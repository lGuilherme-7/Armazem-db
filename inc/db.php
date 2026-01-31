<?php
/**
 * DB.PHP - Configuração e Conexão com Banco de Dados
 * ConstruMax E-commerce
 * 
 * Este arquivo gerencia a conexão com o banco de dados MySQL
 * usando PDO e MySQLi para máxima compatibilidade
 */

// ============================================
// CONFIGURAÇÕES DO BANCO DE DADOS
// ============================================

// IMPORTANTE: Em produção, use variáveis de ambiente!
// Nunca commite estas credenciais em repositórios públicos

define('DB_HOST', 'localhost');
define('DB_NAME', 'construmax');
define('DB_USER', 'root');
define('DB_PASS', ''); // Senha padrão do XAMPP/WAMP
define('DB_CHARSET', 'utf8mb4');

// ============================================
// CONEXÃO PDO (Recomendado)
// ============================================

try {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
    
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . DB_CHARSET
    ];
    
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
    
} catch (PDOException $e) {
    // Em produção, não mostre a mensagem de erro detalhada
    if (defined('AMBIENTE') && AMBIENTE === 'producao') {
        error_log("Erro de conexão PDO: " . $e->getMessage());
        die("Erro ao conectar com o banco de dados. Tente novamente mais tarde.");
    } else {
        die("Erro de conexão PDO: " . $e->getMessage());
    }
}

// ============================================
// CONEXÃO MYSQLI (Alternativa)
// ============================================

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($mysqli->connect_error) {
    if (defined('AMBIENTE') && AMBIENTE === 'producao') {
        error_log("Erro de conexão MySQLi: " . $mysqli->connect_error);
        die("Erro ao conectar com o banco de dados. Tente novamente mais tarde.");
    } else {
        die("Erro de conexão MySQLi: " . $mysqli->connect_error);
    }
}

$mysqli->set_charset(DB_CHARSET);

// ============================================
// FUNÇÕES AUXILIARES
// ============================================

/**
 * Executa uma query preparada (PDO)
 * 
 * @param string $sql Query SQL com placeholders
 * @param array $params Parâmetros da query
 * @return PDOStatement
 */
function db_query($sql, $params = []) {
    global $pdo;
    
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    } catch (PDOException $e) {
        error_log("Erro na query: " . $e->getMessage());
        throw $e;
    }
}

/**
 * Busca um único registro
 * 
 * @param string $sql Query SQL
 * @param array $params Parâmetros
 * @return array|false
 */
function db_fetch_one($sql, $params = []) {
    $stmt = db_query($sql, $params);
    return $stmt->fetch();
}

/**
 * Busca todos os registros
 * 
 * @param string $sql Query SQL
 * @param array $params Parâmetros
 * @return array
 */
function db_fetch_all($sql, $params = []) {
    $stmt = db_query($sql, $params);
    return $stmt->fetchAll();
}

/**
 * Insere um registro e retorna o ID
 * 
 * @param string $sql Query INSERT
 * @param array $params Parâmetros
 * @return int ID do registro inserido
 */
function db_insert($sql, $params = []) {
    global $pdo;
    db_query($sql, $params);
    return $pdo->lastInsertId();
}

/**
 * Atualiza registros e retorna quantidade afetada
 * 
 * @param string $sql Query UPDATE
 * @param array $params Parâmetros
 * @return int Número de linhas afetadas
 */
function db_update($sql, $params = []) {
    $stmt = db_query($sql, $params);
    return $stmt->rowCount();
}

/**
 * Deleta registros e retorna quantidade afetada
 * 
 * @param string $sql Query DELETE
 * @param array $params Parâmetros
 * @return int Número de linhas afetadas
 */
function db_delete($sql, $params = []) {
    $stmt = db_query($sql, $params);
    return $stmt->rowCount();
}

/**
 * Inicia uma transação
 */
function db_begin_transaction() {
    global $pdo;
    $pdo->beginTransaction();
}

/**
 * Confirma uma transação
 */
function db_commit() {
    global $pdo;
    $pdo->commit();
}

/**
 * Reverte uma transação
 */
function db_rollback() {
    global $pdo;
    if ($pdo->inTransaction()) {
        $pdo->rollBack();
    }
}

/**
 * Sanitiza string para evitar XSS
 * 
 * @param string $string String a ser sanitizada
 * @return string String sanitizada
 */
function sanitize($string) {
    return htmlspecialchars(trim($string), ENT_QUOTES, 'UTF-8');
}

/**
 * Valida email
 * 
 * @param string $email Email a validar
 * @return bool
 */
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Gera slug a partir de string
 * 
 * @param string $string String original
 * @return string Slug gerado
 */
function generate_slug($string) {
    $string = mb_strtolower($string, 'UTF-8');
    
    // Remove acentos
    $string = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $string);
    
    // Remove caracteres especiais
    $string = preg_replace('/[^a-z0-9-]/', '-', $string);
    
    // Remove múltiplos hífens
    $string = preg_replace('/-+/', '-', $string);
    
    // Remove hífens do início e fim
    $string = trim($string, '-');
    
    return $string;
}

/**
 * Formata preço para exibição
 * 
 * @param float $preco Preço numérico
 * @return string Preço formatado (ex: R$ 1.234,56)
 */
function format_price($preco) {
    return 'R$ ' . number_format($preco, 2, ',', '.');
}

/**
 * Formata data para padrão brasileiro
 * 
 * @param string $data Data no formato YYYY-MM-DD
 * @return string Data formatada DD/MM/YYYY
 */
function format_date($data) {
    if (empty($data)) return '';
    return date('d/m/Y', strtotime($data));
}

/**
 * Formata data e hora
 * 
 * @param string $datetime Datetime
 * @return string Formatado
 */
function format_datetime($datetime) {
    if (empty($datetime)) return '';
    return date('d/m/Y H:i', strtotime($datetime));
}

/**
 * Gera número de pedido único
 * 
 * @return string Número do pedido
 */
function generate_order_number() {
    return date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
}

/**
 * Calcula desconto percentual
 * 
 * @param float $preco_original Preço original
 * @param float $preco_promocional Preço promocional
 * @return float Percentual de desconto
 */
function calculate_discount_percent($preco_original, $preco_promocional) {
    if ($preco_original <= 0) return 0;
    return round((($preco_original - $preco_promocional) / $preco_original) * 100, 2);
}

/**
 * Verifica se existe estoque suficiente
 * 
 * @param int $produto_id ID do produto
 * @param int $quantidade Quantidade desejada
 * @return bool
 */
function check_stock($produto_id, $quantidade) {
    $produto = db_fetch_one(
        "SELECT estoque_atual FROM produtos WHERE id = ? AND ativo = TRUE",
        [$produto_id]
    );
    
    if (!$produto) return false;
    
    return $produto['estoque_atual'] >= $quantidade;
}

/**
 * Atualiza estoque do produto
 * 
 * @param int $produto_id ID do produto
 * @param int $quantidade Quantidade (positivo adiciona, negativo remove)
 * @return bool
 */
function update_stock($produto_id, $quantidade) {
    $sql = "UPDATE produtos 
            SET estoque_atual = estoque_atual + ? 
            WHERE id = ?";
    
    return db_update($sql, [$quantidade, $produto_id]) > 0;
}

/**
 * Busca configuração do sistema
 * 
 * @param string $chave Chave da configuração
 * @param mixed $default Valor padrão se não encontrar
 * @return mixed Valor da configuração
 */
function get_config($chave, $default = null) {
    static $cache = [];
    
    if (isset($cache[$chave])) {
        return $cache[$chave];
    }
    
    $config = db_fetch_one(
        "SELECT valor FROM configuracoes WHERE chave = ?",
        [$chave]
    );
    
    $valor = $config ? $config['valor'] : $default;
    $cache[$chave] = $valor;
    
    return $valor;
}

/**
 * Registra log de atividade
 * 
 * @param int|null $usuario_id ID do usuário (null para ações anônimas)
 * @param string $acao Ação realizada
 * @param string $descricao Descrição detalhada
 */
function log_activity($usuario_id, $acao, $descricao = '') {
    $ip = $_SERVER['REMOTE_ADDR'] ?? '';
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    
    $sql = "INSERT INTO logs_acesso (usuario_id, acao, descricao, ip, user_agent) 
            VALUES (?, ?, ?, ?, ?)";
    
    db_insert($sql, [$usuario_id, $acao, $descricao, $ip, $user_agent]);
}

// ============================================
// EXEMPLO DE USO
// ============================================

/*
// Buscar produtos
$produtos = db_fetch_all("SELECT * FROM produtos WHERE ativo = TRUE LIMIT 10");

// Buscar produto específico
$produto = db_fetch_one("SELECT * FROM produtos WHERE id = ?", [1]);

// Inserir novo produto
$id = db_insert(
    "INSERT INTO produtos (nome, preco_venda, categoria_id) VALUES (?, ?, ?)",
    ['Cimento', 32.90, 1]
);

// Atualizar produto
$affected = db_update(
    "UPDATE produtos SET preco_venda = ? WHERE id = ?",
    [35.90, 1]
);

// Deletar produto
$deleted = db_delete("DELETE FROM produtos WHERE id = ?", [1]);

// Transação
try {
    db_begin_transaction();
    
    db_insert("INSERT INTO ...", [...]);
    db_update("UPDATE ...", [...]);
    
    db_commit();
} catch (Exception $e) {
    db_rollback();
    throw $e;
}
*/

// ============================================
// FECHAR CONEXÃO (Opcional - PHP faz automaticamente)
// ============================================

/**
 * Fecha conexões com banco de dados
 * Chamado automaticamente no final do script
 */
function db_close() {
    global $pdo, $mysqli;
    $pdo = null;
    $mysqli->close();
}

// Registrar função para fechar conexões ao final
register_shutdown_function('db_close');

?>