<?php
/**
 * ============================================================================
 * CONSTRUMAX - CONEXÃO E FUNÇÕES DE BANCO DE DADOS
 * ============================================================================
 * Versão: 2.0 COMPLETA
 * Autor: ConstruMax Team
 * 
 * Este arquivo contém:
 * ✓ Conexão PDO segura com MySQL
 * ✓ Funções genéricas (SELECT, INSERT, UPDATE, DELETE)
 * ✓ Funções específicas para cada tabela
 * ✓ Funções de estatísticas e relatórios
 * ✓ Tratamento de erros completo
 */

// ============================================================================
// CONFIGURAÇÕES DO BANCO DE DADOS
// ============================================================================

define('DB_HOST', 'localhost');
define('DB_NAME', 'construmax');
define('DB_USER', 'root');
define('DB_PASS', '');           // Deixe vazio para XAMPP/WAMP padrão
define('DB_CHARSET', 'utf8mb4'); // Suporta emojis e caracteres especiais

// ============================================================================
// VARIÁVEL GLOBAL DE CONEXÃO
// ============================================================================

$pdo = null;

// ============================================================================
// ESTABELECE CONEXÃO COM O BANCO
// ============================================================================

try {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
    
    $opcoes = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
    ];
    
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $opcoes);
    
} catch (PDOException $e) {
    // Página de erro amigável
    ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro de Conexão - ConstruMax</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .container {
        background: white;
        max-width: 700px;
        width: 100%;
        padding: 50px;
        border-radius: 30px;
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.3);
    }

    .icon {
        font-size: 100px;
        text-align: center;
        margin-bottom: 30px;
    }

    h1 {
        color: #2C3E50;
        font-size: 32px;
        text-align: center;
        margin-bottom: 20px;
    }

    .subtitle {
        text-align: center;
        color: #7F8C8D;
        font-size: 18px;
        margin-bottom: 40px;
    }

    .error-box {
        background: #FEE;
        border-left: 5px solid #C0392B;
        padding: 25px;
        border-radius: 10px;
        margin-bottom: 30px;
    }

    .error-box strong {
        display: block;
        color: #C0392B;
        font-size: 16px;
        margin-bottom: 10px;
    }

    .error-box code {
        display: block;
        background: white;
        padding: 15px;
        border-radius: 8px;
        color: #C0392B;
        font-size: 14px;
        margin-top: 10px;
        overflow-x: auto;
    }

    .solutions {
        background: #F8F9FA;
        padding: 30px;
        border-radius: 15px;
    }

    .solutions h3 {
        font-size: 20px;
        margin-bottom: 20px;
        color: #2C3E50;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .solutions ol {
        padding-left: 20px;
    }

    .solutions li {
        color: #555;
        line-height: 1.8;
        margin-bottom: 15px;
        font-size: 15px;
    }

    .solutions li strong {
        color: #2E86DE;
    }

    .config-box {
        background: white;
        padding: 15px;
        border-radius: 8px;
        margin: 15px 0;
        border: 2px solid #ECF0F1;
    }

    .config-box code {
        color: #27AE60;
        font-weight: 600;
    }

    .btn {
        display: inline-block;
        background: linear-gradient(135deg, #2E86DE, #FF8C42);
        color: white;
        padding: 15px 40px;
        border-radius: 15px;
        text-decoration: none;
        font-weight: 600;
        margin-top: 20px;
        transition: 0.3s;
        text-align: center;
    }

    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .btn i {
        margin-right: 8px;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="icon">🚫</div>
        <h1>Erro ao Conectar com o Banco de Dados</h1>
        <p class="subtitle">O sistema não conseguiu estabelecer conexão com o MySQL</p>

        <div class="error-box">
            <strong><i class="fas fa-exclamation-triangle"></i> Mensagem de Erro:</strong>
            <code><?php echo htmlspecialchars($e->getMessage()); ?></code>
        </div>

        <div class="solutions">
            <h3><i class="fas fa-tools"></i> Como Resolver:</h3>
            <ol>
                <li><strong>Verifique se o MySQL está rodando</strong>
                    <br>Abra o XAMPP/WAMP e inicie o MySQL
                </li>

                <li><strong>Confira se o banco "construmax" foi criado</strong>
                    <div class="config-box">
                        Banco deve se chamar: <code>construmax</code>
                    </div>
                </li>

                <li><strong>Execute o arquivo database.sql</strong>
                    <br>Acesse o phpMyAdmin e importe o arquivo <code>database.sql</code>
                </li>

                <li><strong>Verifique as configurações em inc/db.php:</strong>
                    <div class="config-box">
                        <strong>Host:</strong> <code>localhost</code><br>
                        <strong>Banco:</strong> <code>construmax</code><br>
                        <strong>Usuário:</strong> <code>root</code><br>
                        <strong>Senha:</strong> <code>(vazio)</code>
                    </div>
                </li>
            </ol>
        </div>

        <div style="text-align: center;">
            <a href="http://localhost/phpmyadmin" class="btn" target="_blank">
                <i class="fas fa-database"></i> Abrir phpMyAdmin
            </a>
        </div>
    </div>
</body>

</html>
<?php
    exit;
}

// ============================================================================
// FUNÇÕES GENÉRICAS DE BANCO DE DADOS
// ============================================================================

/**
 * Executa uma query SELECT e retorna todos os resultados
 * 
 * @param string $sql Query SQL
 * @param array $params Parâmetros para prepared statement
 * @return array Array de resultados
 */
function executarQuery($sql, $params = []) {
    global $pdo;
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        error_log("Erro na query: " . $e->getMessage());
        return [];
    }
}

/**
 * Executa INSERT, UPDATE ou DELETE
 * 
 * @param string $sql Query SQL
 * @param array $params Parâmetros
 * @return int|bool ID inserido (INSERT) ou número de linhas afetadas, false em erro
 */
function executarComando($sql, $params = []) {
    global $pdo;
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        
        // Se for INSERT, retorna o ID inserido
        if (stripos($sql, 'INSERT') === 0) {
            return $pdo->lastInsertId();
        }
        
        // Senão, retorna número de linhas afetadas
        return $stmt->rowCount();
        
    } catch (PDOException $e) {
        error_log("Erro no comando: " . $e->getMessage());
        return false;
    }
}

/**
 * Busca um único registro
 * 
 * @param string $sql Query SQL
 * @param array $params Parâmetros
 * @return array|null Registro encontrado ou null
 */
function buscarUm($sql, $params = []) {
    global $pdo;
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        $result = $stmt->fetch();
        return $result ?: null;
    } catch (PDOException $e) {
        error_log("Erro ao buscar: " . $e->getMessage());
        return null;
    }
}

// ============================================================================
// FUNÇÕES PARA PRODUTOS
// ============================================================================

/**
 * Lista todos os produtos com filtros opcionais
 */
function listarProdutos($filtros = []) {
    $sql = "SELECT p.*, c.nome as categoria_nome, c.icone as categoria_icone, m.nome as marca_nome 
            FROM produtos p 
            LEFT JOIN categorias c ON p.categoria_id = c.id 
            LEFT JOIN marcas m ON p.marca_id = m.id 
            WHERE 1=1";
    $params = [];
    
    // Filtro por categoria
    if (!empty($filtros['categoria_id'])) {
        $sql .= " AND p.categoria_id = ?";
        $params[] = $filtros['categoria_id'];
    }
    
    // Filtro por busca (nome ou SKU)
    if (!empty($filtros['busca'])) {
        $sql .= " AND (p.nome LIKE ? OR p.sku LIKE ? OR p.descricao_curta LIKE ?)";
        $busca = '%' . $filtros['busca'] . '%';
        $params[] = $busca;
        $params[] = $busca;
        $params[] = $busca;
    }
    
    // Filtro por status ativo/inativo
    if (isset($filtros['ativo'])) {
        $sql .= " AND p.ativo = ?";
        $params[] = $filtros['ativo'];
    }
    
    // Filtro por estoque
    if (!empty($filtros['estoque'])) {
        if ($filtros['estoque'] === 'baixo') {
            $sql .= " AND p.estoque_atual > 0 AND p.estoque_atual < p.estoque_minimo";
        } elseif ($filtros['estoque'] === 'zerado') {
            $sql .= " AND p.estoque_atual = 0";
        }
    }
    
    $sql .= " ORDER BY p.id DESC";
    
    return executarQuery($sql, $params);
}

/**
 * Busca produto por ID com informações completas
 */
function buscarProdutoPorId($id) {
    $sql = "SELECT p.*, c.nome as categoria_nome, m.nome as marca_nome 
            FROM produtos p 
            LEFT JOIN categorias c ON p.categoria_id = c.id 
            LEFT JOIN marcas m ON p.marca_id = m.id 
            WHERE p.id = ?";
    return buscarUm($sql, [$id]);
}

/**
 * Busca produto por SKU
 */
function buscarProdutoPorSKU($sku) {
    return buscarUm("SELECT * FROM produtos WHERE sku = ?", [$sku]);
}

/**
 * Cria um novo produto
 */
function criarProduto($dados) {
    $sql = "INSERT INTO produtos (
                nome, sku, descricao_curta, descricao_completa,
                categoria_id, marca_id, preco_custo, preco_venda,
                preco_promocional, unidade_medida, estoque_atual,
                estoque_minimo, peso, altura, largura, comprimento,
                destaque, novidade, ativo, data_cadastro
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
    
    return executarComando($sql, [
        $dados['nome'],
        $dados['sku'],
        $dados['descricao_curta'],
        $dados['descricao_completa'],
        $dados['categoria_id'],
        $dados['marca_id'] ?? null,
        $dados['preco_custo'] ?? 0,
        $dados['preco_venda'],
        $dados['preco_promocional'] ?? null,
        $dados['unidade_medida'] ?? 'un',
        $dados['estoque_atual'] ?? 0,
        $dados['estoque_minimo'] ?? 0,
        $dados['peso'] ?? null,
        $dados['altura'] ?? null,
        $dados['largura'] ?? null,
        $dados['comprimento'] ?? null,
        $dados['destaque'] ?? 0,
        $dados['novidade'] ?? 0,
        $dados['ativo'] ?? 1
    ]);
}

/**
 * Atualiza um produto existente
 */
function atualizarProduto($id, $dados) {
    $sql = "UPDATE produtos SET 
                nome = ?, sku = ?, descricao_curta = ?, descricao_completa = ?,
                categoria_id = ?, marca_id = ?, preco_custo = ?, preco_venda = ?,
                preco_promocional = ?, unidade_medida = ?, estoque_atual = ?,
                estoque_minimo = ?, peso = ?, altura = ?, largura = ?, comprimento = ?,
                destaque = ?, novidade = ?, ativo = ?, data_atualizacao = NOW()
            WHERE id = ?";
    
    return executarComando($sql, [
        $dados['nome'],
        $dados['sku'],
        $dados['descricao_curta'],
        $dados['descricao_completa'],
        $dados['categoria_id'],
        $dados['marca_id'] ?? null,
        $dados['preco_custo'] ?? 0,
        $dados['preco_venda'],
        $dados['preco_promocional'] ?? null,
        $dados['unidade_medida'] ?? 'un',
        $dados['estoque_atual'] ?? 0,
        $dados['estoque_minimo'] ?? 0,
        $dados['peso'] ?? null,
        $dados['altura'] ?? null,
        $dados['largura'] ?? null,
        $dados['comprimento'] ?? null,
        $dados['destaque'] ?? 0,
        $dados['novidade'] ?? 0,
        $dados['ativo'] ?? 1,
        $id
    ]);
}

/**
 * Exclui um produto
 */
function excluirProduto($id) {
    return executarComando("DELETE FROM produtos WHERE id = ?", [$id]);
}

/**
 * Atualiza estoque de um produto
 */
function atualizarEstoque($produtoId, $quantidade, $operacao = 'definir') {
    if ($operacao === 'adicionar') {
        $sql = "UPDATE produtos SET estoque_atual = estoque_atual + ? WHERE id = ?";
    } elseif ($operacao === 'subtrair') {
        $sql = "UPDATE produtos SET estoque_atual = estoque_atual - ? WHERE id = ?";
    } else {
        $sql = "UPDATE produtos SET estoque_atual = ? WHERE id = ?";
    }
    
    return executarComando($sql, [$quantidade, $produtoId]);
}

// ============================================================================
// FUNÇÕES PARA CATEGORIAS
// ============================================================================

/**
 * Lista todas as categorias
 */
function listarCategorias($apenasAtivas = false) {
    $sql = "SELECT * FROM categorias";
    
    if ($apenasAtivas) {
        $sql .= " WHERE ativo = 1";
    }
    
    $sql .= " ORDER BY nome ASC";
    
    return executarQuery($sql);
}

/**
 * Busca categoria por ID
 */
function buscarCategoriaPorId($id) {
    return buscarUm("SELECT * FROM categorias WHERE id = ?", [$id]);
}

/**
 * Cria nova categoria
 */
function criarCategoria($dados) {
    $sql = "INSERT INTO categorias (nome, descricao, icone, cor, ativo) VALUES (?, ?, ?, ?, ?)";
    
    return executarComando($sql, [
        $dados['nome'],
        $dados['descricao'] ?? null,
        $dados['icone'] ?? 'fa-box',
        $dados['cor'] ?? '#2E86DE',
        $dados['ativo'] ?? 1
    ]);
}

/**
 * Atualiza categoria
 */
function atualizarCategoria($id, $dados) {
    $sql = "UPDATE categorias SET nome = ?, descricao = ?, icone = ?, cor = ?, ativo = ? WHERE id = ?";
    
    return executarComando($sql, [
        $dados['nome'],
        $dados['descricao'] ?? null,
        $dados['icone'] ?? 'fa-box',
        $dados['cor'] ?? '#2E86DE',
        $dados['ativo'] ?? 1,
        $id
    ]);
}

/**
 * Conta produtos por categoria
 */
function contarProdutosPorCategoria($categoriaId) {
    $result = buscarUm("SELECT COUNT(*) as total FROM produtos WHERE categoria_id = ?", [$categoriaId]);
    return $result['total'] ?? 0;
}

/**
 * Exclui categoria (apenas se não tiver produtos)
 */
function excluirCategoria($id) {
    $temProdutos = contarProdutosPorCategoria($id);
    
    if ($temProdutos > 0) {
        return false; // Não pode excluir categoria com produtos
    }
    
    return executarComando("DELETE FROM categorias WHERE id = ?", [$id]);
}

// ============================================================================
// FUNÇÕES PARA PEDIDOS
// ============================================================================

/**
 * Lista pedidos com filtros
 */
function listarPedidos($filtros = []) {
    $sql = "SELECT p.*, c.nome as cliente_nome, c.email as cliente_email 
            FROM pedidos p 
            LEFT JOIN clientes c ON p.cliente_id = c.id 
            WHERE 1=1";
    $params = [];
    
    if (!empty($filtros['status'])) {
        $sql .= " AND p.status = ?";
        $params[] = $filtros['status'];
    }
    
    if (!empty($filtros['data_inicio'])) {
        $sql .= " AND DATE(p.data_pedido) >= ?";
        $params[] = $filtros['data_inicio'];
    }
    
    if (!empty($filtros['data_fim'])) {
        $sql .= " AND DATE(p.data_pedido) <= ?";
        $params[] = $filtros['data_fim'];
    }
    
    $sql .= " ORDER BY p.data_pedido DESC";
    
    return executarQuery($sql, $params);
}

/**
 * Busca pedido por ID
 */
function buscarPedidoPorId($id) {
    $sql = "SELECT p.*, c.nome as cliente_nome, c.email as cliente_email, c.telefone as cliente_telefone, c.cpf as cliente_cpf 
            FROM pedidos p 
            LEFT JOIN clientes c ON p.cliente_id = c.id 
            WHERE p.id = ?";
    
    return buscarUm($sql, [$id]);
}

/**
 * Busca itens do pedido
 */
function buscarItensPedido($pedidoId) {
    $sql = "SELECT ip.*, p.nome as produto_nome, p.sku, p.unidade_medida 
            FROM itens_pedido ip 
            LEFT JOIN produtos p ON ip.produto_id = p.id 
            WHERE ip.pedido_id = ?";
    
    return executarQuery($sql, [$pedidoId]);
}

/**
 * Atualiza status do pedido
 */
function atualizarStatusPedido($id, $status) {
    return executarComando("UPDATE pedidos SET status = ? WHERE id = ?", [$status, $id]);
}

// ============================================================================
// FUNÇÕES DE ESTATÍSTICAS
// ============================================================================

/**
 * Conta total de produtos ativos
 */
function contarProdutos($apenasAtivos = true) {
    $sql = "SELECT COUNT(*) as total FROM produtos";
    
    if ($apenasAtivos) {
        $sql .= " WHERE ativo = 1";
    }
    
    $result = buscarUm($sql);
    return $result['total'] ?? 0;
}

/**
 * Conta produtos com estoque baixo
 */
function contarProdutosEstoqueBaixo() {
    $sql = "SELECT COUNT(*) as total FROM produtos 
            WHERE estoque_atual > 0 
            AND estoque_atual < estoque_minimo 
            AND ativo = 1";
    
    $result = buscarUm($sql);
    return $result['total'] ?? 0;
}

/**
 * Conta produtos sem estoque
 */
function contarProdutosSemEstoque() {
    $sql = "SELECT COUNT(*) as total FROM produtos WHERE estoque_atual = 0 AND ativo = 1";
    $result = buscarUm($sql);
    return $result['total'] ?? 0;
}

/**
 * Valor total em estoque
 */
function valorTotalEstoque() {
    $sql = "SELECT SUM(preco_venda * estoque_atual) as total FROM produtos WHERE ativo = 1";
    $result = buscarUm($sql);
    return $result['total'] ?? 0;
}

/**
 * Total de pedidos
 */
function contarPedidos($status = null) {
    $sql = "SELECT COUNT(*) as total FROM pedidos";
    $params = [];
    
    if ($status) {
        $sql .= " WHERE status = ?";
        $params[] = $status;
    }
    
    $result = buscarUm($sql, $params);
    return $result['total'] ?? 0;
}

/**
 * Faturamento total
 */
function calcularFaturamento($dataInicio = null, $dataFim = null) {
    $sql = "SELECT SUM(valor_total) as total FROM pedidos WHERE status != 'cancelado'";
    $params = [];
    
    if ($dataInicio) {
        $sql .= " AND DATE(data_pedido) >= ?";
        $params[] = $dataInicio;
    }
    
    if ($dataFim) {
        $sql .= " AND DATE(data_pedido) <= ?";
        $params[] = $dataFim;
    }
    
    $result = buscarUm($sql, $params);
    return $result['total'] ?? 0;
}

/**
 * Produtos mais vendidos
 */
function produtosMaisVendidos($limite = 5) {
    $sql = "SELECT p.id, p.nome, p.sku, SUM(ip.quantidade) as total_vendido, 
            SUM(ip.subtotal) as faturamento_total
            FROM itens_pedido ip
            INNER JOIN produtos p ON ip.produto_id = p.id
            INNER JOIN pedidos ped ON ip.pedido_id = ped.id
            WHERE ped.status != 'cancelado'
            GROUP BY p.id
            ORDER BY total_vendido DESC
            LIMIT ?";
    
    return executarQuery($sql, [$limite]);
}

// ============================================================================
// FUNÇÕES UTILITÁRIAS
// ============================================================================

/**
 * Formata valor em reais
 */
function formatarPreco($valor) {
    return 'R$ ' . number_format($valor, 2, ',', '.');
}

/**
 * Formata data brasileira (dd/mm/yyyy)
 */
function formatarData($data) {
    if (!$data || $data === '0000-00-00') return '';
    $timestamp = strtotime($data);
    return date('d/m/Y', $timestamp);
}

/**
 * Formata data e hora (dd/mm/yyyy hh:mm)
 */
function formatarDataHora($data) {
    if (!$data || $data === '0000-00-00 00:00:00') return '';
    $timestamp = strtotime($data);
    return date('d/m/Y H:i', $timestamp);
}

/**
 * Converte data brasileira para MySQL (yyyy-mm-dd)
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
 * Limita texto a um número de caracteres
 */
function limitarTexto($texto, $limite = 100, $sufixo = '...') {
    if (mb_strlen($texto) <= $limite) {
        return $texto;
    }
    
    return mb_substr($texto, 0, $limite) . $sufixo;
}
?>