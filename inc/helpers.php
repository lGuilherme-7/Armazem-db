<?php
/**
 * ============================================================================
 * CONSTRUMAX - FUNÇÕES AUXILIARES (HELPERS)
 * ============================================================================
 * Versão: 2.0 COMPLETA
 * Autor: ConstruMax Team
 * 
 * Este arquivo contém funções utilitárias para:
 * ✓ Formatação de dados (preço, data, telefone, CPF, etc)
 * ✓ Validações (email, CPF, CNPJ, telefone, etc)
 * ✓ Upload de arquivos e imagens
 * ✓ Manipulação de strings (slug, limitação, etc)
 * ✓ Geração de códigos e tokens
 * ✓ Funções de debug
 */

// ============================================================================
// FUNÇÕES DE FORMATAÇÃO
// ============================================================================

/**
 * Formata valor monetário em Real brasileiro
 * 
 * @param float $valor Valor numérico
 * @param bool $simbolo Se true, adiciona "R$"
 * @return string Valor formatado (ex: R$ 1.234,56)
 */
function formatarPreco($valor, $simbolo = true) {
    $formatado = number_format($valor, 2, ',', '.');
    return $simbolo ? 'R$ ' . $formatado : $formatado;
}

/**
 * Formata data no padrão brasileiro (dd/mm/yyyy)
 * 
 * @param string $data Data no formato MySQL (yyyy-mm-dd)
 * @return string Data formatada (dd/mm/yyyy)
 */
function formatarData($data) {
    if (!$data || $data === '0000-00-00') {
        return '';
    }
    
    $timestamp = strtotime($data);
    return date('d/m/Y', $timestamp);
}

/**
 * Formata data e hora no padrão brasileiro
 * 
 * @param string $data Data/hora MySQL
 * @return string Data formatada (dd/mm/yyyy às HH:mm)
 */
function formatarDataHora($data) {
    if (!$data || $data === '0000-00-00 00:00:00') {
        return '';
    }
    
    $timestamp = strtotime($data);
    return date('d/m/Y \à\s H:i', $timestamp);
}

/**
 * Formata CPF (###.###.###-##)
 * 
 * @param string $cpf CPF apenas números
 * @return string CPF formatado
 */
function formatarCPF($cpf) {
    $cpf = preg_replace('/[^0-9]/', '', $cpf);
    
    if (strlen($cpf) !== 11) {
        return $cpf;
    }
    
    return preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $cpf);
}

/**
 * Formata CNPJ (##.###.###/####-##)
 * 
 * @param string $cnpj CNPJ apenas números
 * @return string CNPJ formatado
 */
function formatarCNPJ($cnpj) {
    $cnpj = preg_replace('/[^0-9]/', '', $cnpj);
    
    if (strlen($cnpj) !== 14) {
        return $cnpj;
    }
    
    return preg_replace('/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/', '$1.$2.$3/$4-$5', $cnpj);
}

/**
 * Formata telefone brasileiro
 * 
 * @param string $telefone Telefone apenas números
 * @return string Telefone formatado
 */
function formatarTelefone($telefone) {
    $telefone = preg_replace('/[^0-9]/', '', $telefone);
    
    // Celular (11) 98888-7777
    if (strlen($telefone) === 11) {
        return preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $telefone);
    }
    
    // Fixo (11) 3888-7777
    if (strlen($telefone) === 10) {
        return preg_replace('/(\d{2})(\d{4})(\d{4})/', '($1) $2-$3', $telefone);
    }
    
    return $telefone;
}

/**
 * Formata CEP (#####-###)
 * 
 * @param string $cep CEP apenas números
 * @return string CEP formatado
 */
function formatarCEP($cep) {
    $cep = preg_replace('/[^0-9]/', '', $cep);
    
    if (strlen($cep) !== 8) {
        return $cep;
    }
    
    return preg_replace('/(\d{5})(\d{3})/', '$1-$2', $cep);
}

/**
 * Formata número com separadores de milhar
 * 
 * @param float $numero Número a formatar
 * @param int $decimais Casas decimais
 * @return string Número formatado
 */
function formatarNumero($numero, $decimais = 0) {
    return number_format($numero, $decimais, ',', '.');
}

/**
 * Formata porcentagem
 * 
 * @param float $valor Valor decimal (ex: 0.15 para 15%)
 * @param int $decimais Casas decimais
 * @return string Porcentagem formatada (ex: 15%)
 */
function formatarPorcentagem($valor, $decimais = 0) {
    return number_format($valor * 100, $decimais, ',', '.') . '%';
}

// ============================================================================
// FUNÇÕES DE VALIDAÇÃO
// ============================================================================

/**
 * Valida email
 * 
 * @param string $email
 * @return bool
 */
function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Valida CPF
 * 
 * @param string $cpf
 * @return bool
 */
function validarCPF($cpf) {
    $cpf = preg_replace('/[^0-9]/', '', $cpf);
    
    if (strlen($cpf) !== 11) {
        return false;
    }
    
    // Verifica se todos os dígitos são iguais
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }
    
    // Validação do primeiro dígito verificador
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
 * Valida CNPJ
 * 
 * @param string $cnpj
 * @return bool
 */
function validarCNPJ($cnpj) {
    $cnpj = preg_replace('/[^0-9]/', '', $cnpj);
    
    if (strlen($cnpj) !== 14) {
        return false;
    }
    
    // Verifica se todos os dígitos são iguais
    if (preg_match('/(\d)\1{13}/', $cnpj)) {
        return false;
    }
    
    // Validação dos dígitos verificadores
    $tamanho = strlen($cnpj) - 2;
    $numeros = substr($cnpj, 0, $tamanho);
    $digitos = substr($cnpj, $tamanho);
    $soma = 0;
    $pos = $tamanho - 7;
    
    for ($i = $tamanho; $i >= 1; $i--) {
        $soma += $numeros[$tamanho - $i] * $pos--;
        if ($pos < 2) {
            $pos = 9;
        }
    }
    
    $resultado = $soma % 11 < 2 ? 0 : 11 - $soma % 11;
    
    if ($resultado != $digitos[0]) {
        return false;
    }
    
    $tamanho = $tamanho + 1;
    $numeros = substr($cnpj, 0, $tamanho);
    $soma = 0;
    $pos = $tamanho - 7;
    
    for ($i = $tamanho; $i >= 1; $i--) {
        $soma += $numeros[$tamanho - $i] * $pos--;
        if ($pos < 2) {
            $pos = 9;
        }
    }
    
    $resultado = $soma % 11 < 2 ? 0 : 11 - $soma % 11;
    
    return $resultado == $digitos[1];
}

/**
 * Valida telefone brasileiro
 * 
 * @param string $telefone
 * @return bool
 */
function validarTelefone($telefone) {
    $telefone = preg_replace('/[^0-9]/', '', $telefone);
    return strlen($telefone) >= 10 && strlen($telefone) <= 11;
}

/**
 * Valida CEP
 * 
 * @param string $cep
 * @return bool
 */
function validarCEP($cep) {
    $cep = preg_replace('/[^0-9]/', '', $cep);
    return strlen($cep) === 8;
}

/**
 * Valida senha forte (mínimo 6 caracteres)
 * 
 * @param string $senha
 * @return bool
 */
function validarSenha($senha) {
    return strlen($senha) >= 6;
}

/**
 * Valida URL
 * 
 * @param string $url
 * @return bool
 */
function validarURL($url) {
    return filter_var($url, FILTER_VALIDATE_URL) !== false;
}

// ============================================================================
// FUNÇÕES DE MANIPULAÇÃO DE STRINGS
// ============================================================================

/**
 * Limita texto a um número de caracteres
 * 
 * @param string $texto Texto original
 * @param int $limite Número máximo de caracteres
 * @param string $sufixo Sufixo (geralmente "...")
 * @return string Texto limitado
 */
function limitarTexto($texto, $limite = 100, $sufixo = '...') {
    if (mb_strlen($texto) <= $limite) {
        return $texto;
    }
    
    return mb_substr($texto, 0, $limite) . $sufixo;
}

/**
 * Gera slug amigável para URL
 * 
 * @param string $texto Texto original
 * @return string Slug (ex: "produto-teste-123")
 */
function gerarSlug($texto) {
    // Converte para minúsculas
    $texto = mb_strtolower($texto, 'UTF-8');
    
    // Remove acentos
    $texto = iconv('UTF-8', 'ASCII//TRANSLIT', $texto);
    
    // Remove caracteres especiais
    $texto = preg_replace('/[^a-z0-9\s-]/', '', $texto);
    
    // Substitui espaços e múltiplos hífens por um hífen
    $texto = preg_replace('/[\s-]+/', '-', $texto);
    
    // Remove hífens do início e fim
    $texto = trim($texto, '-');
    
    return $texto;
}

/**
 * Remove acentos de uma string
 * 
 * @param string $texto
 * @return string Texto sem acentos
 */
function removerAcentos($texto) {
    return iconv('UTF-8', 'ASCII//TRANSLIT', $texto);
}

/**
 * Capitaliza primeira letra de cada palavra
 * 
 * @param string $texto
 * @return string Texto capitalizado
 */
function capitalizarPalavras($texto) {
    return mb_convert_case($texto, MB_CASE_TITLE, 'UTF-8');
}

/**
 * Remove tags HTML e limpa string
 * 
 * @param string $texto
 * @return string Texto limpo
 */
function limparHTML($texto) {
    return strip_tags(trim($texto));
}

/**
 * Sanitiza string para evitar XSS
 * 
 * @param string $texto
 * @return string Texto sanitizado
 */
function sanitizarString($texto) {
    return htmlspecialchars(trim($texto), ENT_QUOTES, 'UTF-8');
}

// ============================================================================
// FUNÇÕES DE UPLOAD DE ARQUIVOS
// ============================================================================

/**
 * Faz upload de imagem
 * 
 * @param array $arquivo Array $_FILES['campo']
 * @param string $pasta Pasta de destino
 * @param array $opcoes Opções (tamanho_max, largura_max, altura_max)
 * @return array ['sucesso' => bool, 'arquivo' => nome, 'mensagem' => string]
 */
function uploadImagem($arquivo, $pasta = 'uploads/', $opcoes = []) {
    // Configurações padrão
    $tamanhoMax = $opcoes['tamanho_max'] ?? 5 * 1024 * 1024; // 5MB
    $larguraMax = $opcoes['largura_max'] ?? 2000;
    $alturaMax = $opcoes['altura_max'] ?? 2000;
    $extensoesPermitidas = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
    
    // Verifica se houve erro no upload
    if ($arquivo['error'] !== UPLOAD_ERR_OK) {
        return ['sucesso' => false, 'mensagem' => 'Erro ao fazer upload do arquivo.'];
    }
    
    // Verifica tamanho
    if ($arquivo['size'] > $tamanhoMax) {
        $tamanhoMB = $tamanhoMax / (1024 * 1024);
        return ['sucesso' => false, 'mensagem' => "Arquivo muito grande. Máximo: {$tamanhoMB}MB"];
    }
    
    // Verifica extensão
    $extensao = strtolower(pathinfo($arquivo['name'], PATHINFO_EXTENSION));
    if (!in_array($extensao, $extensoesPermitidas)) {
        return ['sucesso' => false, 'mensagem' => 'Formato não permitido. Use: ' . implode(', ', $extensoesPermitidas)];
    }
    
    // Verifica se é imagem válida
    $infoImagem = getimagesize($arquivo['tmp_name']);
    if ($infoImagem === false) {
        return ['sucesso' => false, 'mensagem' => 'Arquivo não é uma imagem válida.'];
    }
    
    // Verifica dimensões
    if ($infoImagem[0] > $larguraMax || $infoImagem[1] > $alturaMax) {
        return ['sucesso' => false, 'mensagem' => "Imagem muito grande. Máximo: {$larguraMax}x{$alturaMax}px"];
    }
    
    // Gera nome único
    $nomeArquivo = uniqid() . '_' . time() . '.' . $extensao;
    
    // Garante que a pasta existe
    if (!is_dir($pasta)) {
        mkdir($pasta, 0755, true);
    }
    
    // Move arquivo
    $caminhoCompleto = $pasta . $nomeArquivo;
    if (move_uploaded_file($arquivo['tmp_name'], $caminhoCompleto)) {
        return [
            'sucesso' => true,
            'arquivo' => $nomeArquivo,
            'caminho' => $caminhoCompleto,
            'mensagem' => 'Upload realizado com sucesso!'
        ];
    }
    
    return ['sucesso' => false, 'mensagem' => 'Erro ao mover arquivo.'];
}

/**
 * Redimensiona imagem
 * 
 * @param string $origem Caminho da imagem original
 * @param string $destino Caminho da imagem redimensionada
 * @param int $larguraMax Largura máxima
 * @param int $alturaMax Altura máxima
 * @return bool
 */
function redimensionarImagem($origem, $destino, $larguraMax, $alturaMax) {
    $info = getimagesize($origem);
    if ($info === false) {
        return false;
    }
    
    list($larguraOriginal, $alturaOriginal, $tipo) = $info;
    
    // Calcula novas dimensões mantendo proporção
    $ratio = min($larguraMax / $larguraOriginal, $alturaMax / $alturaOriginal);
    $novaLargura = round($larguraOriginal * $ratio);
    $novaAltura = round($alturaOriginal * $ratio);
    
    // Cria imagem de origem
    switch ($tipo) {
        case IMAGETYPE_JPEG:
            $imagemOrigem = imagecreatefromjpeg($origem);
            break;
        case IMAGETYPE_PNG:
            $imagemOrigem = imagecreatefrompng($origem);
            break;
        case IMAGETYPE_GIF:
            $imagemOrigem = imagecreatefromgif($origem);
            break;
        case IMAGETYPE_WEBP:
            $imagemOrigem = imagecreatefromwebp($origem);
            break;
        default:
            return false;
    }
    
    // Cria nova imagem
    $novaImagem = imagecreatetruecolor($novaLargura, $novaAltura);
    
    // Preserva transparência PNG/GIF
    if ($tipo == IMAGETYPE_PNG || $tipo == IMAGETYPE_GIF) {
        imagealphablending($novaImagem, false);
        imagesavealpha($novaImagem, true);
    }
    
    // Redimensiona
    imagecopyresampled($novaImagem, $imagemOrigem, 0, 0, 0, 0, $novaLargura, $novaAltura, $larguraOriginal, $alturaOriginal);
    
    // Salva imagem
    $resultado = false;
    switch ($tipo) {
        case IMAGETYPE_JPEG:
            $resultado = imagejpeg($novaImagem, $destino, 90);
            break;
        case IMAGETYPE_PNG:
            $resultado = imagepng($novaImagem, $destino, 9);
            break;
        case IMAGETYPE_GIF:
            $resultado = imagegif($novaImagem, $destino);
            break;
        case IMAGETYPE_WEBP:
            $resultado = imagewebp($novaImagem, $destino, 90);
            break;
    }
    
    // Libera memória
    imagedestroy($imagemOrigem);
    imagedestroy($novaImagem);
    
    return $resultado;
}

/**
 * Exclui arquivo
 * 
 * @param string $caminho Caminho do arquivo
 * @return bool
 */
function excluirArquivo($caminho) {
    if (file_exists($caminho)) {
        return unlink($caminho);
    }
    return false;
}

// ============================================================================
// FUNÇÕES DE GERAÇÃO
// ============================================================================

/**
 * Gera código aleatório
 * 
 * @param int $tamanho Tamanho do código
 * @param string $tipo 'numerico', 'alfabetico' ou 'alfanumerico'
 * @return string Código gerado
 */
function gerarCodigo($tamanho = 8, $tipo = 'alfanumerico') {
    switch ($tipo) {
        case 'numerico':
            $caracteres = '0123456789';
            break;
        case 'alfabetico':
            $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            break;
        default:
            $caracteres = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    
    $codigo = '';
    $max = strlen($caracteres) - 1;
    
    for ($i = 0; $i < $tamanho; $i++) {
        $codigo .= $caracteres[random_int(0, $max)];
    }
    
    return $codigo;
}

/**
 * Gera token único
 * 
 * @param int $tamanho Tamanho em bytes (resultado será o dobro)
 * @return string Token hexadecimal
 */
function gerarToken($tamanho = 32) {
    return bin2hex(random_bytes($tamanho));
}

/**
 * Gera senha aleatória
 * 
 * @param int $tamanho Tamanho da senha
 * @return string Senha gerada
 */
function gerarSenha($tamanho = 10) {
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%';
    $senha = '';
    $max = strlen($caracteres) - 1;
    
    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[random_int(0, $max)];
    }
    
    return $senha;
}

// ============================================================================
// FUNÇÕES DE DATA E HORA
// ============================================================================

/**
 * Converte data brasileira para MySQL
 * 
 * @param string $data Data no formato dd/mm/yyyy
 * @return string Data no formato yyyy-mm-dd
 */
function dataParaMySQL($data) {
    if (!$data) return null;
    
    // Se já estiver no formato MySQL
    if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $data)) {
        return $data;
    }
    
    // Converte dd/mm/yyyy para yyyy-mm-dd
    $partes = explode('/', $data);
    if (count($partes) === 3) {
        return $partes[2] . '-' . $partes[1] . '-' . $partes[0];
    }
    
    return null;
}

/**
 * Calcula diferença entre datas em dias
 * 
 * @param string $data1
 * @param string $data2
 * @return int Número de dias
 */
function diferencaEmDias($data1, $data2) {
    $d1 = new DateTime($data1);
    $d2 = new DateTime($data2);
    return $d1->diff($d2)->days;
}

/**
 * Retorna nome do mês em português
 * 
 * @param int $mes Número do mês (1-12)
 * @return string Nome do mês
 */
function nomeMes($mes) {
    $meses = [
        1 => 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho',
        'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
    ];
    return $meses[$mes] ?? '';
}

/**
 * Retorna nome do dia da semana em português
 * 
 * @param int $dia Número do dia (0=Domingo, 6=Sábado)
 * @return string Nome do dia
 */
function nomeDiaSemana($dia) {
    $dias = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
    return $dias[$dia] ?? '';
}

// ============================================================================
// FUNÇÕES DE DEBUG
// ============================================================================

/**
 * Debug de variável (apenas em desenvolvimento)
 * 
 * @param mixed $variavel
 * @param bool $morrer Se true, para execução
 */
function debug($variavel, $morrer = false) {
    echo '<pre style="background:#2C3E50;color:#ECF0F1;padding:20px;border-radius:10px;margin:20px;font-size:14px;font-family:monospace">';
    print_r($variavel);
    echo '</pre>';
    
    if ($morrer) {
        die();
    }
}

/**
 * Loga mensagem em arquivo
 * 
 * @param string $mensagem
 * @param string $arquivo
 */
function logarMensagem($mensagem, $arquivo = 'debug.log') {
    $data = date('Y-m-d H:i:s');
    $texto = "[$data] $mensagem" . PHP_EOL;
    file_put_contents($arquivo, $texto, FILE_APPEND);
}
?>