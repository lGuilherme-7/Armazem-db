<?php
/**
 * ============================================================================
 * CONSTRUMAX - HEADER DO PAINEL ADMIN
 * ============================================================================
 * 
 * Este arquivo contém:
 * ✓ Cabeçalho HTML completo
 * ✓ Meta tags e importações
 * ✓ Sidebar com menu dinâmico
 * ✓ Topbar com breadcrumb e perfil
 * ✓ Notificações e badges
 * ✓ Design responsivo
 * 
 * USO:
 * require_once '../inc/header.php';
 */

// Verifica se está logado (deve ter incluído auth.php antes)
if (!function_exists('estaLogado')) {
    die('ERRO: Inclua auth.php antes do header.php');
}

if (!estaLogado()) {
    redirecionarParaLogin();
}

// Pega dados do usuário
$usuario = usuarioLogado();
$iniciais = obterIniciais($usuario['nome']);

// Detecta página atual
$paginaAtual = basename($_SERVER['PHP_SELF'], '.php');

// Busca estatísticas para badges
$totalProdutos = contarProdutos();
$estoqueBaixo = contarProdutosEstoqueBaixo();
$pedidosPendentes = contarPedidos('pendente');
$totalPedidos = contarPedidos();

// Título da página (pode ser sobrescrito)
$tituloPagina = $tituloPagina ?? 'ConstruMax Admin';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Painel Administrativo ConstruMax - Gestão completa de produtos, pedidos e estoque">
    <meta name="author" content="ConstruMax Team">

    <title><?php echo $tituloPagina; ?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/armazem/assets/img/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Chart.js (para gráficos) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
    /* ============================================= */
    /* RESET E VARIÁVEIS                            */
    /* ============================================= */
    :root {
        --primary: #2E86DE;
        --secondary: #FF8C42;
        --success: #27AE60;
        --danger: #C0392B;
        --warning: #F39C12;
        --info: #3498DB;
        --purple: #9B59B6;
        --dark: #2C3E50;
        --gray: #34495E;
        --light: #ECF0F1;
        --medium: #BDC3C7;
        --white: #FFFFFF;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: var(--light);
        color: var(--dark);
        overflow-x: hidden;
    }

    /* ============================================= */
    /* SIDEBAR                                      */
    /* ============================================= */
    .sidebar {
        position: fixed;
        left: 0;
        top: 0;
        bottom: 0;
        width: 280px;
        background: var(--gray);
        color: var(--white);
        overflow-y: auto;
        z-index: 1000;
        transition: 0.3s;
    }

    .sidebar::-webkit-scrollbar {
        width: 6px;
    }

    .sidebar::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.2);
        border-radius: 10px;
    }

    /* Logo */
    .logo {
        padding: 2rem;
        text-align: center;
        background: rgba(0, 0, 0, 0.2);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .logo h2 {
        font-size: 1.75rem;
        font-weight: 800;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
    }

    .logo i {
        font-size: 2rem;
        background: linear-gradient(135deg, var(--primary), var(--secondary));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .logo small {
        font-size: 0.75rem;
        opacity: 0.7;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    /* Menu */
    .menu {
        padding: 1.5rem 0;
    }

    .menu-title {
        padding: 0 2rem;
        font-size: 0.75rem;
        text-transform: uppercase;
        opacity: 0.5;
        margin-bottom: 0.75rem;
        letter-spacing: 1px;
        font-weight: 600;
    }

    .menu-item {
        padding: 1rem 2rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: 0.3s;
        position: relative;
        font-weight: 500;
    }

    .menu-item:hover {
        background: rgba(255, 255, 255, 0.05);
        color: var(--white);
        padding-left: 2.5rem;
    }

    .menu-item.active {
        background: rgba(46, 134, 222, 0.2);
        color: var(--white);
        border-left: 4px solid var(--primary);
    }

    .menu-item i {
        width: 24px;
        font-size: 1.1rem;
    }

    .menu-item .badge {
        margin-left: auto;
        background: var(--danger);
        padding: 0.25rem 0.5rem;
        border-radius: 50px;
        font-size: 0.7rem;
        font-weight: 700;
    }

    /* Usuário Info */
    .user-info {
        padding: 2rem;
        background: rgba(0, 0, 0, 0.2);
        display: flex;
        gap: 1rem;
        align-items: center;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .user-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--primary), var(--secondary));
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 1.25rem;
        color: var(--white);
        flex-shrink: 0;
    }

    .user-details {
        flex: 1;
        overflow: hidden;
    }

    .user-details strong {
        display: block;
        font-size: 0.95rem;
        margin-bottom: 0.25rem;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .user-details small {
        opacity: 0.7;
        font-size: 0.8rem;
    }

    /* ============================================= */
    /* MAIN CONTENT                                 */
    /* ============================================= */
    .main {
        margin-left: 280px;
        min-height: 100vh;
        transition: 0.3s;
    }

    /* Topbar */
    .topbar {
        background: var(--white);
        padding: 1.5rem 2rem;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: sticky;
        top: 0;
        z-index: 100;
    }

    .topbar h1 {
        font-size: 1.75rem;
        font-weight: 800;
        color: var(--dark);
    }

    .breadcrumb {
        display: flex;
        gap: 0.5rem;
        font-size: 0.875rem;
        color: var(--medium);
        margin-top: 0.25rem;
        align-items: center;
    }

    .breadcrumb a {
        color: var(--primary);
        text-decoration: none;
        transition: 0.3s;
    }

    .breadcrumb a:hover {
        color: var(--secondary);
    }

    .breadcrumb i {
        font-size: 0.75rem;
    }

    /* Topbar Actions */
    .topbar-actions {
        display: flex;
        gap: 1rem;
        align-items: center;
    }

    .topbar-btn {
        width: 45px;
        height: 45px;
        border-radius: 12px;
        border: none;
        background: var(--light);
        color: var(--dark);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: 0.3s;
        position: relative;
    }

    .topbar-btn:hover {
        background: var(--primary);
        color: var(--white);
        transform: translateY(-2px);
    }

    .topbar-btn .badge-count {
        position: absolute;
        top: -5px;
        right: -5px;
        background: var(--danger);
        color: var(--white);
        width: 20px;
        height: 20px;
        border-radius: 50%;
        font-size: 0.7rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
    }

    /* Content */
    .content {
        padding: 2rem;
    }

    /* ============================================= */
    /* RESPONSIVO                                   */
    /* ============================================= */
    @media (max-width: 768px) {
        .sidebar {
            transform: translateX(-100%);
        }

        .sidebar.active {
            transform: translateX(0);
        }

        .main {
            margin-left: 0;
        }

        .topbar h1 {
            font-size: 1.25rem;
        }

        .breadcrumb {
            font-size: 0.75rem;
        }

        .mobile-menu-toggle {
            display: flex !important;
        }
    }

    /* Mobile Menu Toggle */
    .mobile-menu-toggle {
        width: 45px;
        height: 45px;
        border-radius: 12px;
        border: none;
        background: var(--light);
        color: var(--dark);
        display: none;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-size: 1.25rem;
    }

    /* Overlay */
    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }

    .overlay.active {
        display: block;
    }

    /* Animações */
    @keyframes slideInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    </style>
</head>

<body>

    <!-- OVERLAY MOBILE -->
    <div class="overlay" id="overlay" onclick="toggleMobileMenu()"></div>

    <!-- SIDEBAR -->
    <aside class="sidebar" id="sidebar">
        <!-- Logo -->
        <div class="logo">
            <h2>
                <i class="fas fa-hard-hat"></i>
                ConstruMax
            </h2>
            <small>Painel Admin</small>
        </div>

        <!-- Menu -->
        <nav class="menu">
            <div style="margin-bottom: 2rem;">
                <div class="menu-title">Menu Principal</div>

                <a href="index.php" class="menu-item <?php echo $paginaAtual === 'index' ? 'active' : ''; ?>">
                    <i class="fas fa-th-large"></i>
                    Dashboard
                </a>

                <a href="produtos.php"
                    class="menu-item <?php echo $paginaAtual === 'produtos' || $paginaAtual === 'produto_novo' || $paginaAtual === 'produto_editar' ? 'active' : ''; ?>">
                    <i class="fas fa-box"></i>
                    Produtos
                    <span class="badge"><?php echo $totalProdutos; ?></span>
                </a>

                <a href="categorias.php" class="menu-item <?php echo $paginaAtual === 'categorias' ? 'active' : ''; ?>">
                    <i class="fas fa-tags"></i>
                    Categorias
                </a>

                <a href="pedidos.php" class="menu-item <?php echo $paginaAtual === 'pedidos' ? 'active' : ''; ?>">
                    <i class="fas fa-shopping-cart"></i>
                    Pedidos
                    <?php if ($pedidosPendentes > 0): ?>
                    <span class="badge"><?php echo $pedidosPendentes; ?></span>
                    <?php endif; ?>
                </a>

                <a href="estoque.php" class="menu-item <?php echo $paginaAtual === 'estoque' ? 'active' : ''; ?>">
                    <i class="fas fa-warehouse"></i>
                    Estoque
                    <?php if ($estoqueBaixo > 0): ?>
                    <span class="badge"><?php echo $estoqueBaixo; ?></span>
                    <?php endif; ?>
                </a>

                <a href="vendas.php" class="menu-item <?php echo $paginaAtual === 'vendas' ? 'active' : ''; ?>">
                    <i class="fas fa-chart-line"></i>
                    Vendas
                </a>
            </div>

            <div>
                <div class="menu-title">Sistema</div>

                <a href="/armazem/public/logout.php" class="menu-item">
                    <i class="fas fa-sign-out-alt"></i>
                    Sair
                </a>
            </div>
        </nav>

        <!-- Usuário Info -->
        <div class="user-info">
            <div class="user-avatar">
                <?php echo $iniciais; ?>
            </div>
            <div class="user-details">
                <strong><?php echo $usuario['nome']; ?></strong>
                <small><?php echo $usuario['email']; ?></small>
            </div>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="main">
        <!-- TOPBAR -->
        <div class="topbar">
            <div style="flex: 1;">
                <button class="mobile-menu-toggle" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars"></i>
                </button>

                <h1><?php echo $tituloHeader ?? 'Dashboard'; ?></h1>

                <div class="breadcrumb">
                    <a href="index.php"><i class="fas fa-home"></i> Dashboard</a>
                    <?php if (isset($breadcrumb)): ?>
                    <span>/</span>
                    <span><?php echo $breadcrumb; ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="topbar-actions">
                <?php if ($estoqueBaixo > 0): ?>
                <button class="topbar-btn" onclick="window.location.href='estoque.php'"
                    title="Produtos com estoque baixo">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span class="badge-count"><?php echo $estoqueBaixo; ?></span>
                </button>
                <?php endif; ?>

                <?php if ($pedidosPendentes > 0): ?>
                <button class="topbar-btn" onclick="window.location.href='pedidos.php'" title="Pedidos pendentes">
                    <i class="fas fa-bell"></i>
                    <span class="badge-count"><?php echo $pedidosPendentes; ?></span>
                </button>
                <?php endif; ?>
            </div>
        </div>

        <!-- CONTENT AREA -->
        <div class="content">
            <?php
            // Exibe mensagens flash (sucesso, erro, aviso)
            exibirMensagens();
            ?>

            <!-- O conteúdo da página vai aqui -->