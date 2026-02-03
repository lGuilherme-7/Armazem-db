<?php
/**
 * ============================================================================
 * CONSTRUMAX - SISTEMA DE AUTENTICAÇÃO E SEGURANÇA
 * ============================================================================
 * Versão: 2.0 COMPLETA
 * Autor: ConstruMax Team
 * 
 * Este arquivo contém:
 * ✓ Sistema de login/logout
 * ✓ Proteção de páginas (apenas logados e admins)
 * ✓ Gerenciamento de sessões
 * ✓ Mensagens flash (sucesso, erro, aviso)
 * ✓ Logs de atividade
 * ✓ Segurança (CSRF, XSS, validações)
 * ✓ Funções utilitárias
 */

// ============================================================================
// INICIA SESSÃO
// ============================================================================

if (session_status() === PHP_SESSION_NONE) {
    // Configurações de segurança da sessão
    ini_set('session.cookie_httponly', 1);
    ini_set('session.use_only_cookies', 1);
    ini_set('session.cookie_secure', 0); // Mude para 1 se usar HTTPS
    
    session_start();
}

// ============================================================================
// INCLUI CONEXÃO COM BANCO
// ============================================================================

require_once __DIR__ . '/db.php';

// ============================================================================
// CONFIGURAÇÕES
// ============================================================================

define('TIMEOUT_SESSAO', 30 * 60); // 30 minutos em segundos

// ============================================================================
// FUNÇÕES DE AUTENTICAÇÃO
// ============================================================================

/**
 * Realiza login do usuário
 * 
 * @param string $email Email do usuário
 * @param string $senha Senha do usuário
 * @return array|false Dados do usuário ou false em caso de falha
 */
function fazerLogin($email, $senha) {
    global $pdo;
    
    try {
        // Busca usuário pelo email
        $sql = "SELECT * FROM usuarios WHERE email = ? AND ativo = 1 LIMIT 1";
        $usuario = buscarUm($sql, [$email]);
        
        // Verifica se usuário existe
        if (!$usuario) {
            registrarTentativaLogin($email, false, 'Usuário não encontrado');
            return false;
        }
        
        // Verifica senha
        if (password_verify($senha, $usuario['senha'])) {
            // Remove senha dos dados
            unset($usuario['senha']);
            
            // Salva dados na sessão
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];
            $_SESSION['usuario_email'] = $usuario['email'];
            $_SESSION['usuario_tipo'] = $usuario['tipo'];
            $_SESSION['logado'] = true;
            $_SESSION['ultimo_acesso'] = time();
            $_SESSION['ip_login'] = $_SERVER['REMOTE_ADDR'] ?? 'Desconhecido';
            
            // Atualiza último acesso no banco
            $sqlUpdate = "UPDATE usuarios SET ultimo_acesso = NOW() WHERE id = ?";
            executarComando($sqlUpdate, [$usuario['id']]);
            
            // Registra login bem-sucedido
            registrarTentativaLogin($email, true, 'Login realizado');
            registrarAtividade('Login realizado com sucesso', $usuario['id']);
            
            return $usuario;
        }
        
        // Senha incorreta
        registrarTentativaLogin($email, false, 'Senha incorreta');
        return false;
        
    } catch (Exception $e) {
        error_log("Erro no login: " . $e->getMessage());
        return false;
    }
}

/**
 * Verifica se usuário está logado
 * 
 * @return bool
 */
function estaLogado() {
    return isset($_SESSION['logado']) && $_SESSION['logado'] === true;
}

/**
 * Retorna dados do usuário logado
 * 
 * @return array|null
 */
function usuarioLogado() {
    if (!estaLogado()) {
        return null;
    }
    
    return [
        'id' => $_SESSION['usuario_id'] ?? null,
        'nome' => $_SESSION['usuario_nome'] ?? null,
        'email' => $_SESSION['usuario_email'] ?? null,
        'tipo' => $_SESSION['usuario_tipo'] ?? null
    ];
}

/**
 * Verifica se usuário é administrador
 * 
 * @return bool
 */
function ehAdmin() {
    if (!estaLogado()) {
        return false;
    }
    
    return isset($_SESSION['usuario_tipo']) && $_SESSION['usuario_tipo'] === 'admin';
}

/**
 * Realiza logout do usuário
 */
function fazerLogout() {
    // Registra logout antes de destruir sessão
    if (estaLogado()) {
        registrarAtividade('Logout realizado');
    }
    
    // Limpa variáveis de sessão
    $_SESSION = [];
    
    // Destrói cookie de sessão
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 3600, '/');
    }
    
    // Destrói sessão
    session_destroy();
}

/**
 * Redireciona para página de login
 * 
 * @param string $mensagem Mensagem opcional
 */
function redirecionarParaLogin($mensagem = '') {
    if ($mensagem) {
        $_SESSION['mensagem_erro'] = $mensagem;
    }
    
    // Detecta protocolo e host
    $protocolo = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    
    // Monta URL de redirecionamento
    $redirect = $protocolo . '://' . $host . '/armazem/public/login.php';
    
    header("Location: $redirect");
    exit;
}

/**
 * Protege uma página - apenas usuários logados podem acessar
 * 
 * @param bool $apenasAdmin Se true, apenas admins podem acessar
 */
function protegerPagina($apenasAdmin = false) {
    // Verifica se está logado
    if (!estaLogado()) {
        redirecionarParaLogin('Você precisa fazer login para acessar esta página.');
    }
    
    // Verifica se precisa ser admin
    if ($apenasAdmin && !ehAdmin()) {
        redirecionarParaLogin('Você não tem permissão para acessar esta página.');
    }
    
    // Verifica timeout de sessão
    if (isset($_SESSION['ultimo_acesso'])) {
        if (time() - $_SESSION['ultimo_acesso'] > TIMEOUT_SESSAO) {
            fazerLogout();
            redirecionarParaLogin('Sua sessão expirou. Por favor, faça login novamente.');
        }
    }
    
    // Atualiza último acesso
    $_SESSION['ultimo_acesso'] = time();
}

// ============================================================================
// FUNÇÕES DE GERENCIAMENTO DE USUÁRIOS
// ============================================================================

/**
 * Cria novo usuário
 * 
 * @param array $dados Dados do usuário (nome, email, senha, tipo, telefone)
 * @return int|false ID do usuário criado ou false
 */
function criarUsuario($dados) {
    try {
        // Verifica se email já existe
        $existe = buscarUm("SELECT id FROM usuarios WHERE email = ?", [$dados['email']]);
        
        if ($existe) {
            return false; // Email já cadastrado
        }
        
        // Valida senha
        if (!isset($dados['senha']) || strlen($dados['senha']) < 6) {
            return false; // Senha muito curta
        }
        
        // Hash da senha
        $senhaHash = password_hash($dados['senha'], PASSWORD_DEFAULT);
        
        // Insere usuário
        $sql = "INSERT INTO usuarios (nome, email, senha, tipo, telefone, ativo, data_cadastro) 
                VALUES (?, ?, ?, ?, ?, 1, NOW())";
        
        $params = [
            $dados['nome'],
            $dados['email'],
            $senhaHash,
            $dados['tipo'] ?? 'usuario',
            $dados['telefone'] ?? null
        ];
        
        $usuarioId = executarComando($sql, $params);
        
        if ($usuarioId) {
            registrarAtividade('Novo usuário cadastrado: ' . $dados['email'], $usuarioId);
        }
        
        return $usuarioId;
        
    } catch (Exception $e) {
        error_log("Erro ao criar usuário: " . $e->getMessage());
        return false;
    }
}

/**
 * Atualiza senha de um usuário
 * 
 * @param int $usuarioId ID do usuário
 * @param string $novaSenha Nova senha
 * @return bool
 */
function atualizarSenha($usuarioId, $novaSenha) {
    try {
        if (strlen($novaSenha) < 6) {
            return false; // Senha muito curta
        }
        
        $senhaHash = password_hash($novaSenha, PASSWORD_DEFAULT);
        $sql = "UPDATE usuarios SET senha = ? WHERE id = ?";
        $resultado = executarComando($sql, [$senhaHash, $usuarioId]);
        
        if ($resultado) {
            registrarAtividade('Senha alterada', $usuarioId);
        }
        
        return $resultado !== false;
        
    } catch (Exception $e) {
        error_log("Erro ao atualizar senha: " . $e->getMessage());
        return false;
    }
}

/**
 * Busca usuário por ID
 * 
 * @param int $id
 * @return array|null
 */
function buscarUsuarioPorId($id) {
    return buscarUm("SELECT id, nome, email, tipo, telefone, ativo, data_cadastro, ultimo_acesso FROM usuarios WHERE id = ?", [$id]);
}

/**
 * Lista todos os usuários
 * 
 * @param bool $apenasAtivos
 * @return array
 */
function listarUsuarios($apenasAtivos = false) {
    $sql = "SELECT id, nome, email, tipo, telefone, ativo, data_cadastro, ultimo_acesso FROM usuarios";
    
    if ($apenasAtivos) {
        $sql .= " WHERE ativo = 1";
    }
    
    $sql .= " ORDER BY nome ASC";
    
    return executarQuery($sql);
}

/**
 * Ativa ou desativa um usuário
 * 
 * @param int $usuarioId
 * @param bool $ativo
 * @return bool
 */
function alterarStatusUsuario($usuarioId, $ativo) {
    $sql = "UPDATE usuarios SET ativo = ? WHERE id = ?";
    $resultado = executarComando($sql, [$ativo ? 1 : 0, $usuarioId]);
    
    if ($resultado) {
        $acao = $ativo ? 'Usuário ativado' : 'Usuário desativado';
        registrarAtividade($acao, $usuarioId);
    }
    
    return $resultado !== false;
}

// ============================================================================
// FUNÇÕES DE MENSAGENS FLASH
// ============================================================================

/**
 * Define mensagem de sucesso
 */
function definirMensagemSucesso($mensagem) {
    $_SESSION['mensagem_sucesso'] = $mensagem;
}

/**
 * Define mensagem de erro
 */
function definirMensagemErro($mensagem) {
    $_SESSION['mensagem_erro'] = $mensagem;
}

/**
 * Define mensagem de aviso
 */
function definirMensagemAviso($mensagem) {
    $_SESSION['mensagem_aviso'] = $mensagem;
}

/**
 * Obtém e limpa mensagem de sucesso
 */
function obterMensagemSucesso() {
    if (isset($_SESSION['mensagem_sucesso'])) {
        $msg = $_SESSION['mensagem_sucesso'];
        unset($_SESSION['mensagem_sucesso']);
        return $msg;
    }
    return null;
}

/**
 * Obtém e limpa mensagem de erro
 */
function obterMensagemErro() {
    if (isset($_SESSION['mensagem_erro'])) {
        $msg = $_SESSION['mensagem_erro'];
        unset($_SESSION['mensagem_erro']);
        return $msg;
    }
    return null;
}

/**
 * Obtém e limpa mensagem de aviso
 */
function obterMensagemAviso() {
    if (isset($_SESSION['mensagem_aviso'])) {
        $msg = $_SESSION['mensagem_aviso'];
        unset($_SESSION['mensagem_aviso']);
        return $msg;
    }
    return null;
}

/**
 * Exibe todas as mensagens flash (HTML)
 */
function exibirMensagens() {
    $sucesso = obterMensagemSucesso();
    $erro = obterMensagemErro();
    $aviso = obterMensagemAviso();
    
    if ($sucesso) {
        echo '<div class="alert alert-success" style="padding:1rem 1.5rem;border-radius:10px;margin-bottom:1.5rem;background:rgba(39,174,96,0.1);color:#27AE60;border:2px solid #27AE60;display:flex;gap:1rem;align-items:center;animation:slideInDown 0.3s">';
        echo '<i class="fas fa-check-circle" style="font-size:1.25rem"></i>';
        echo '<div><strong>' . htmlspecialchars($sucesso) . '</strong></div>';
        echo '<button onclick="this.parentElement.remove()" style="margin-left:auto;background:none;border:none;font-size:1.5rem;cursor:pointer;color:#27AE60">×</button>';
        echo '</div>';
    }
    
    if ($erro) {
        echo '<div class="alert alert-error" style="padding:1rem 1.5rem;border-radius:10px;margin-bottom:1.5rem;background:rgba(192,57,43,0.1);color:#C0392B;border:2px solid #C0392B;display:flex;gap:1rem;align-items:center;animation:slideInDown 0.3s">';
        echo '<i class="fas fa-exclamation-circle" style="font-size:1.25rem"></i>';
        echo '<div><strong>' . htmlspecialchars($erro) . '</strong></div>';
        echo '<button onclick="this.parentElement.remove()" style="margin-left:auto;background:none;border:none;font-size:1.5rem;cursor:pointer;color:#C0392B">×</button>';
        echo '</div>';
    }
    
    if ($aviso) {
        echo '<div class="alert alert-warning" style="padding:1rem 1.5rem;border-radius:10px;margin-bottom:1.5rem;background:rgba(243,156,18,0.1);color:#F39C12;border:2px solid #F39C12;display:flex;gap:1rem;align-items:center;animation:slideInDown 0.3s">';
        echo '<i class="fas fa-exclamation-triangle" style="font-size:1.25rem"></i>';
        echo '<div><strong>' . htmlspecialchars($aviso) . '</strong></div>';
        echo '<button onclick="this.parentElement.remove()" style="margin-left:auto;background:none;border:none;font-size:1.5rem;cursor:pointer;color:#F39C12">×</button>';
        echo '</div>';
    }
}

// ============================================================================
// FUNÇÕES DE SEGURANÇA
// ============================================================================

/**
 * Gera token CSRF
 */
function gerarTokenCSRF() {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Valida token CSRF
 */
function validarTokenCSRF($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Sanitiza string (previne XSS)
 */
function sanitizar($texto) {
    return htmlspecialchars(trim($texto), ENT_QUOTES, 'UTF-8');
}

/**
 * Valida email
 */
function emailValido($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Valida senha forte
 */
function senhaForte($senha) {
    // Mínimo 6 caracteres
    return strlen($senha) >= 6;
}

/**
 * Valida CPF
 */
function cpfValido($cpf) {
    // Remove caracteres não numéricos
    $cpf = preg_replace('/[^0-9]/', '', $cpf);
    
    // Verifica se tem 11 dígitos
    if (strlen($cpf) != 11) {
        return false;
    }
    
    // Verifica se todos os dígitos são iguais
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }
    
    // Validação dos dígitos verificadores
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    
    return true;
}

/**
 * Formata CPF
 */
function formatarCPF($cpf) {
    $cpf = preg_replace('/[^0-9]/', '', $cpf);
    return preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $cpf);
}

/**
 * Formata telefone
 */
function formatarTelefone($telefone) {
    $telefone = preg_replace('/[^0-9]/', '', $telefone);
    
    if (strlen($telefone) === 11) {
        return preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $telefone);
    } elseif (strlen($telefone) === 10) {
        return preg_replace('/(\d{2})(\d{4})(\d{4})/', '($1) $2-$3', $telefone);
    }
    
    return $telefone;
}

// ============================================================================
// FUNÇÕES DE LOG E ATIVIDADE
// ============================================================================

/**
 * Registra atividade do usuário
 */
function registrarAtividade($acao, $usuarioId = null) {
    if ($usuarioId === null && estaLogado()) {
        $usuarioId = $_SESSION['usuario_id'];
    }
    
    if (!$usuarioId) {
        return;
    }
    
    try {
        $sql = "INSERT INTO logs_atividade (usuario_id, acao, data_hora, ip, user_agent) 
                VALUES (?, ?, NOW(), ?, ?)";
        
        $ip = $_SERVER['REMOTE_ADDR'] ?? 'Desconhecido';
        $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Desconhecido';
        
        executarComando($sql, [$usuarioId, $acao, $ip, $userAgent]);
    } catch (Exception $e) {
        error_log("Erro ao registrar atividade: " . $e->getMessage());
    }
}

/**
 * Registra tentativa de login
 */
function registrarTentativaLogin($email, $sucesso, $observacao = '') {
    try {
        $sql = "INSERT INTO logs_login (email, sucesso, observacao, data_hora, ip) 
                VALUES (?, ?, ?, NOW(), ?)";
        
        $ip = $_SERVER['REMOTE_ADDR'] ?? 'Desconhecido';
        
        executarComando($sql, [$email, $sucesso ? 1 : 0, $observacao, $ip]);
    } catch (Exception $e) {
        error_log("Erro ao registrar tentativa de login: " . $e->getMessage());
    }
}

/**
 * Busca logs de atividade de um usuário
 */
function buscarLogsUsuario($usuarioId, $limite = 50) {
    $sql = "SELECT * FROM logs_atividade WHERE usuario_id = ? ORDER BY data_hora DESC LIMIT ?";
    return executarQuery($sql, [$usuarioId, $limite]);
}

/**
 * Busca logs de login
 */
function buscarLogsLogin($limite = 100) {
    $sql = "SELECT * FROM logs_login ORDER BY data_hora DESC LIMIT ?";
    return executarQuery($sql, [$limite]);
}

// ============================================================================
// FUNÇÕES UTILITÁRIAS
// ============================================================================

/**
 * Retorna iniciais do nome para avatar
 */
function obterIniciais($nome) {
    $palavras = explode(' ', trim($nome));
    
    if (count($palavras) >= 2) {
        return strtoupper(substr($palavras[0], 0, 1) . substr($palavras[count($palavras) - 1], 0, 1));
    }
    
    return strtoupper(substr($nome, 0, 2));
}

/**
 * Formata tempo desde último acesso
 */
function tempoDesde($data) {
    if (!$data || $data === '0000-00-00 00:00:00') {
        return 'Nunca';
    }
    
    $timestamp = strtotime($data);
    $diferenca = time() - $timestamp;
    
    if ($diferenca < 60) return 'Agora mesmo';
    if ($diferenca < 3600) return floor($diferenca / 60) . ' min atrás';
    if ($diferenca < 86400) return floor($diferenca / 3600) . ' h atrás';
    if ($diferenca < 604800) return floor($diferenca / 86400) . ' dias atrás';
    
    return date('d/m/Y', $timestamp);
}

/**
 * Gera cor aleatória para avatar
 */
function gerarCorAvatar($texto) {
    $cores = [
        '#2E86DE', '#FF8C42', '#27AE60', '#9B59B6',
        '#E74C3C', '#3498DB', '#F39C12', '#1ABC9C'
    ];
    
    $hash = 0;
    for ($i = 0; $i < strlen($texto); $i++) {
        $hash = ord($texto[$i]) + (($hash << 5) - $hash);
    }
    
    $index = abs($hash) % count($cores);
    return $cores[$index];
}
?>