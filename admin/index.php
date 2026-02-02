<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - ConstruMax</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
    :root {
        --primary-blue: #2E86DE;
        --primary-orange: #FF8C42;
        --primary-red: #C0392B;
        --primary-graphite: #34495E;
        --primary-yellow: #F39C12;
        --primary-green: #27AE60;
        --primary-purple: #9B59B6;
        --white: #FFFFFF;
        --light-gray: #ECF0F1;
        --medium-gray: #BDC3C7;
        --dark-gray: #2C3E50;
        --gradient-primary: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-orange) 100%);
        --gradient-success: linear-gradient(135deg, #27AE60 0%, #2ECC71 100%);
        --gradient-danger: linear-gradient(135deg, #C0392B 0%, #E74C3C 100%);
        --font-primary: 'Poppins', sans-serif;
        --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.08);
        --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.12);
        --shadow-lg: 0 8px 32px rgba(0, 0, 0, 0.16);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: var(--font-primary);
        background: var(--light-gray);
        color: var(--dark-gray);
    }




    /* ============================================
           SIDEBAR
        ============================================ */
    .sidebar {
        position: fixed;
        left: 0;
        top: 0;
        bottom: 0;
        width: 280px;
        background: var(--primary-graphite);
        color: var(--white);
        overflow-y: auto;
        z-index: 1000;
        transition: 0.3s;
        overflow-y: auto;
        scrollbar-width: none;
    }

    .sidebar::-webkit-scrollbar {
        width: 6px;
    }

    .sidebar::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.2);
        border-radius: 10px;
    }

    .logo {
        padding: 2rem;
        text-align: center;
        background: rgba(0, 0, 0, 0.2);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .logo h2 {
        font-size: 1.75rem;
        font-weight: 800;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
        margin-bottom: 0.5rem;
    }

    .logo i {
        font-size: 2rem;
        background: var(--gradient-primary);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .logo .subtitle {
        font-size: 0.75rem;
        opacity: 0.7;
        font-weight: 400;
    }

    .menu {
        padding: 1.5rem 0;
    }

    .menu-section {
        margin-bottom: 2rem;
    }

    .menu-section-title {
        padding: 0.5rem 2rem;
        font-size: 0.75rem;
        text-transform: uppercase;
        opacity: 0.5;
        font-weight: 600;
        letter-spacing: 1px;
    }

    .menu-item {
        padding: 1rem 2rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: 0.3s;
        position: relative;
    }

    .menu-item:hover {
        background: rgba(255, 255, 255, 0.05);
        color: var(--white);
        padding-left: 2.5rem;
    }

    .menu-item.active {
        background: var(--gradient-primary);
        color: var(--white);
    }

    .menu-item.active::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 4px;
        background: var(--white);
    }

    .menu-item i {
        font-size: 1.25rem;
        width: 24px;
        text-align: center;
    }

    .menu-item .badge {
        margin-left: auto;
        padding: 0.25rem 0.5rem;
        background: var(--primary-red);
        border-radius: 50px;
        font-size: 0.7rem;
        font-weight: 700;
    }

    .user-info {
        padding: 2rem;
        background: rgba(0, 0, 0, 0.2);
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .user-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: var(--gradient-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        font-weight: 700;
        flex-shrink: 0;
    }

    .user-details {
        flex: 1;
    }

    .user-name {
        font-weight: 700;
        font-size: 0.9rem;
    }

    .user-role {
        font-size: 0.75rem;
        opacity: 0.7;
    }

    /* ============================================
           MAIN CONTENT
        ============================================ */
    .main-content {
        margin-left: 280px;
        min-height: 100vh;
        transition: 0.3s;
    }

    /* TOP BAR */
    .topbar {
        background: var(--white);
        padding: 1.5rem 2rem;
        box-shadow: var(--shadow-sm);
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: sticky;
        top: 0;
        z-index: 100;
    }

    .topbar-left {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .menu-toggle {
        display: none;
        width: 40px;
        height: 40px;
        background: var(--light-gray);
        border: none;
        border-radius: 10px;
        cursor: pointer;
        font-size: 1.25rem;
    }

    .search-bar {
        position: relative;
        width: 400px;
    }

    .search-input {
        width: 100%;
        padding: 0.75rem 1rem 0.75rem 3rem;
        border: 2px solid var(--light-gray);
        border-radius: 50px;
        outline: none;
        font-family: var(--font-primary);
        transition: 0.3s;
    }

    .search-input:focus {
        border-color: var(--primary-blue);
    }

    .search-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--medium-gray);
    }

    .topbar-right {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .topbar-icon {
        width: 40px;
        height: 40px;
        background: var(--light-gray);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        position: relative;
        transition: 0.3s;
    }

    .topbar-icon:hover {
        background: var(--primary-blue);
        color: var(--white);
    }

    .topbar-icon .notification-badge {
        position: absolute;
        top: -5px;
        right: -5px;
        width: 18px;
        height: 18px;
        background: var(--primary-red);
        border-radius: 50%;
        font-size: 0.7rem;
        color: var(--white);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
    }

    /* CONTENT */
    .content {
        padding: 2rem;
    }

    .page-header {
        margin-bottom: 2rem;
    }

    .page-title {
        font-size: 2rem;
        font-weight: 800;
        color: var(--dark-gray);
        margin-bottom: 0.5rem;
    }

    .page-subtitle {
        color: var(--medium-gray);
        font-size: 1rem;
    }

    .breadcrumb {
        display: flex;
        gap: 0.5rem;
        align-items: center;
        font-size: 0.875rem;
        color: var(--medium-gray);
        margin-bottom: 1rem;
    }

    .breadcrumb a {
        color: var(--primary-blue);
        text-decoration: none;
    }

    /* ============================================
           STATS CARDS
        ============================================ */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .stat-card {
        background: var(--white);
        padding: 2rem;
        border-radius: 20px;
        box-shadow: var(--shadow-sm);
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
        overflow: hidden;
        transition: 0.3s;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 100px;
        height: 100px;
        background: var(--gradient-primary);
        opacity: 0.05;
        border-radius: 50%;
        transform: translate(30%, -30%);
    }

    .stat-info {
        flex: 1;
    }

    .stat-label {
        font-size: 0.875rem;
        color: var(--medium-gray);
        margin-bottom: 0.5rem;
        font-weight: 600;
    }

    .stat-value {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--dark-gray);
        margin-bottom: 0.5rem;
    }

    .stat-change {
        font-size: 0.875rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .stat-change.positive {
        color: var(--primary-green);
    }

    .stat-change.negative {
        color: var(--primary-red);
    }

    .stat-icon {
        width: 80px;
        height: 80px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        flex-shrink: 0;
    }

    .stat-icon.blue {
        background: rgba(46, 134, 222, 0.1);
        color: var(--primary-blue);
    }

    .stat-icon.green {
        background: rgba(39, 174, 96, 0.1);
        color: var(--primary-green);
    }

    .stat-icon.orange {
        background: rgba(255, 140, 66, 0.1);
        color: var(--primary-orange);
    }

    .stat-icon.purple {
        background: rgba(155, 89, 182, 0.1);
        color: var(--primary-purple);
    }

    .stat-icon.red {
        background: rgba(192, 57, 43, 0.1);
        color: var(--primary-red);
    }

    /* ============================================
           CHARTS
        ============================================ */
    .charts-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .chart-card {
        background: var(--white);
        padding: 2rem;
        border-radius: 20px;
        box-shadow: var(--shadow-sm);
    }

    .chart-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
    }

    .chart-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--dark-gray);
    }

    .chart-filter {
        display: flex;
        gap: 0.5rem;
    }

    .chart-wrapper {
        height: 220px;
        position: relative;
    }


    .filter-btn {
        padding: 0.5rem 1rem;
        border: 2px solid var(--light-gray);
        background: var(--white);
        border-radius: 10px;
        cursor: pointer;
        font-size: 0.875rem;
        font-weight: 600;
        transition: 0.3s;
    }

    .filter-btn.active {
        background: var(--primary-blue);
        color: var(--white);
        border-color: var(--primary-blue);
    }

    /* ============================================
           TABLES
        ============================================ */
    .table-card {
        background: var(--white);
        border-radius: 20px;
        box-shadow: var(--shadow-sm);
        margin-bottom: 2rem;
        overflow: hidden;
    }

    .table-header {
        padding: 1.5rem 2rem;
        background: var(--light-gray);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .table-title {
        font-weight: 700;
        font-size: 1.125rem;
        color: var(--dark-gray);
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .table-actions {
        display: flex;
        gap: 0.5rem;
    }

    .table-scroll {
        max-height: 260px;
        overflow-y: auto;
    }

    .table-scroll thead th {
        position: sticky;
        top: 0;
        background: var(--light-gray);
        z-index: 2;
    }


    .btn {
        padding: 0.75rem 1.5rem;
        border-radius: 10px;
        border: none;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: 0.3s;
        font-family: var(--font-primary);
    }

    .btn-sm {
        padding: 0.5rem 1rem;
        font-size: 0.875rem;
    }

    .btn-primary {
        background: var(--gradient-primary);
        color: var(--white);
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .btn-secondary {
        background: var(--light-gray);
        color: var(--dark-gray);
    }

    .btn-secondary:hover {
        background: var(--medium-gray);
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    thead {
        background: var(--light-gray);
    }

    th,
    td {
        padding: 1.25rem 2rem;
        text-align: left;
        font-size: 0.85rem;

    }

    th {
        font-weight: 600;
        color: var(--dark-gray);
        font-size: 0.875rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    tbody tr {
        border-bottom: 1px solid var(--light-gray);
        transition: 0.3s;
    }

    tbody tr:hover {
        background: rgba(46, 134, 222, 0.03);
    }

    .badge {
        padding: 0.375rem 0.875rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
    }

    .badge-success {
        background: rgba(39, 174, 96, 0.1);
        color: var(--primary-green);
    }

    .badge-warning {
        background: rgba(255, 140, 66, 0.1);
        color: var(--primary-orange);
    }

    .badge-danger {
        background: rgba(192, 57, 43, 0.1);
        color: var(--primary-red);
    }

    .badge-info {
        background: rgba(46, 134, 222, 0.1);
        color: var(--primary-blue);
    }

    .badge-purple {
        background: rgba(155, 89, 182, 0.1);
        color: var(--primary-purple);
    }

    .product-thumb {
        width: 50px;
        height: 50px;
        border-radius: 10px;
        background: var(--light-gray);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--medium-gray);
        font-size: 1.5rem;
    }

    .action-btns {
        display: flex;
        gap: 0.5rem;
    }

    .action-btn {
        width: 35px;
        height: 35px;
        border-radius: 8px;
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: 0.3s;
    }

    .action-btn.view {
        background: rgba(46, 134, 222, 0.1);
        color: var(--primary-blue);
    }

    .action-btn.edit {
        background: rgba(255, 140, 66, 0.1);
        color: var(--primary-orange);
    }

    .action-btn.delete {
        background: rgba(192, 57, 43, 0.1);
        color: var(--primary-red);
    }

    .action-btn:hover {
        transform: scale(1.1);
    }

    /* ============================================
           ACTIVITY FEED
        ============================================ */
    .activity-feed {
        background: var(--white);
        border-radius: 20px;
        padding: 2rem;
        box-shadow: var(--shadow-sm);
    }

    .activity-item {
        display: flex;
        gap: 1rem;
        padding: 1rem 0;
        border-bottom: 1px solid var(--light-gray);
    }

    .activity-item:last-child {
        border-bottom: none;
    }

    .activity-icon {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .activity-content {
        flex: 1;
    }

    .activity-text {
        font-size: 0.9rem;
        margin-bottom: 0.25rem;
    }

    .activity-time {
        font-size: 0.75rem;
        color: var(--medium-gray);
    }

    /* ============================================
           RESPONSIVE
        ============================================ */
    @media (max-width: 1024px) {
        .charts-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .sidebar {
            transform: translateX(-100%);
        }

        .sidebar.active {
            transform: translateX(0);
        }

        .main-content {
            margin-left: 0;
        }

        .menu-toggle {
            display: flex;
        }

        .search-bar {
            display: none;
        }

        .stats-grid {
            grid-template-columns: 1fr;
        }

        .topbar {
            padding: 1rem;
        }

        .content {
            padding: 1rem;
        }

        table {
            font-size: 0.875rem;
        }

        th,
        td {
            padding: 1rem;
        }
    }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="logo">
            <h2>
                <i class="fas fa-hard-hat"></i>
                ConstruMax
            </h2>
            <div class="subtitle">PAINEL ADMINISTRATIVO</div>
        </div>

        <nav class="menu">
            <div class="menu-section">
                <div class="menu-section-title">Principal</div>
                <a href="index.php" class="menu-item active">
                    <i class="fas fa-th-large"></i>
                    <span>Dashboard</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-chart-line"></i>
                    <span>Análises</span>
                </a>
            </div>

            <div class="menu-section">
                <div class="menu-section-title">Produtos</div>
                <a href="produtos.php" class="menu-item">
                    <i class="fas fa-box"></i>
                    <span>Todos os Produtos</span>
                    <span class="badge">142</span>
                </a>
                <a href="produto_novo.php" class="menu-item">
                    <i class="fas fa-plus-circle"></i>
                    <span>Adicionar Produto</span>
                </a>
                <a href="categorias.php" class="menu-item">
                    <i class="fas fa-tags"></i>
                    <span>Categorias</span>
                </a>
                <a href="estoque.php" class="menu-item">
                    <i class="fas fa-warehouse"></i>
                    <span>Estoque</span>
                    <span class="badge">8</span>
                </a>
            </div>

            <div class="menu-section">
                <div class="menu-section-title">Vendas</div>
                <a href="pedidos.php" class="menu-item">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Pedidos</span>
                    <span class="badge">24</span>
                </a>
                <a href="vendas.php" class="menu-item">
                    <i class="fas fa-dollar-sign"></i>
                    <span>Relatório de Vendas</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-users"></i>
                    <span>Clientes</span>
                </a>
            </div>

            <div class="menu-section">
                <div class="menu-section-title">Sistema</div>
                <a href="#" class="menu-item">
                    <i class="fas fa-cog"></i>
                    <span>Configurações</span>
                </a>
                <a href="../logout.php" class="menu-item">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Sair</span>
                </a>
            </div>
        </nav>

        <div class="user-info">
            <div class="user-avatar">A</div>
            <div class="user-details">
                <div class="user-name">Administrador</div>
                <div class="user-role">Admin Master</div>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="main-content">

        <!-- Top Bar -->
        <div class="topbar">
            <div class="topbar-left">
                <button class="menu-toggle" onclick="toggleSidebar()">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="search-bar">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" class="search-input" placeholder="Buscar produtos, pedidos, clientes...">
                </div>
            </div>

            <div class="topbar-right">
                <div class="topbar-icon" title="Notificações">
                    <i class="fas fa-bell"></i>
                    <span class="notification-badge">12</span>
                </div>
                <div class="topbar-icon" title="Mensagens">
                    <i class="fas fa-envelope"></i>
                    <span class="notification-badge">5</span>
                </div>
                <div class="topbar-icon" title="Configurações">
                    <i class="fas fa-cog"></i>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content">

            <!-- Page Header -->
            <div class="page-header">
                <div class="breadcrumb">
                    <i class="fas fa-home"></i>
                    <span>/</span>
                    <a href="#">Dashboard</a>
                </div>
                <h1 class="page-title">Dashboard</h1>
                <p class="page-subtitle">Bem-vindo de volta! Aqui está o resumo do seu negócio.</p>
            </div>

            <!-- Stats Cards -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-info">
                        <div class="stat-label">Vendas Totais</div>
                        <div class="stat-value">R$ 89.547</div>
                        <div class="stat-change positive">
                            <i class="fas fa-arrow-up"></i>
                            <span>+12,5% vs mês anterior</span>
                        </div>
                    </div>
                    <div class="stat-icon green">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-info">
                        <div class="stat-label">Pedidos</div>
                        <div class="stat-value">247</div>
                        <div class="stat-change positive">
                            <i class="fas fa-arrow-up"></i>
                            <span>+8,3% vs mês anterior</span>
                        </div>
                    </div>
                    <div class="stat-icon blue">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-info">
                        <div class="stat-label">Produtos</div>
                        <div class="stat-value">142</div>
                        <div class="stat-change negative">
                            <i class="fas fa-exclamation-triangle"></i>
                            <span>8 com estoque baixo</span>
                        </div>
                    </div>
                    <div class="stat-icon orange">
                        <i class="fas fa-box"></i>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-info">
                        <div class="stat-label">Clientes</div>
                        <div class="stat-value">1.834</div>
                        <div class="stat-change positive">
                            <i class="fas fa-arrow-up"></i>
                            <span>+156 novos este mês</span>
                        </div>
                    </div>
                    <div class="stat-icon purple">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <!-- Charts -->
            <div class="charts-grid">
                <div class="chart-card">
                    <div class="chart-header">
                        <h3 class="chart-title">Vendas dos Últimos 6 Meses</h3>
                        <div class="chart-filter">
                            <button class="filter-btn">7 Dias</button>
                            <button class="filter-btn">30 Dias</button>
                            <button class="filter-btn active">6 Meses</button>
                            <button class="filter-btn">1 Ano</button>
                        </div>
                    </div>
                    <div class="chart-wrapper">
                        <canvas id="salesChart" height="200"></canvas>
                    </div>

                </div>

                <div class="chart-card">
                    <div class="chart-header">
                        <h3 class="chart-title">Status dos Pedidos</h3>
                    </div>
                    <div class="chart-wrapper">
                        <canvas id="ordersChart" height="230"></canvas>
                    </div>

                </div>
            </div>

            <!-- Tables Grid -->
            <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 1.5rem; margin-bottom: 2rem;">

                <!-- Recent Orders -->
                <div class="table-card">
                    <div class="table-header">
                        <div class="table-title">
                            <i class="fas fa-shopping-cart"></i>
                            Pedidos Recentes
                        </div>
                        <a href="pedidos.php" class="btn btn-sm btn-secondary">
                            Ver Todos
                        </a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Pedido</th>
                                <th>Cliente</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>#20260201-A5F</strong></td>
                                <td>João Silva</td>
                                <td><strong>R$ 432,90</strong></td>
                                <td><span class="badge badge-success">Entregue</span></td>
                                <td>
                                    <div class="action-btns">
                                        <button class="action-btn view" title="Ver"><i class="fas fa-eye"></i></button>
                                        <button class="action-btn edit" title="Editar"><i
                                                class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#20260201-B7K</strong></td>
                                <td>Maria Santos</td>
                                <td><strong>R$ 1.254,50</strong></td>
                                <td><span class="badge badge-warning">Em Transporte</span></td>
                                <td>
                                    <div class="action-btns">
                                        <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                        <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#20260131-C9M</strong></td>
                                <td>Pedro Oliveira</td>
                                <td><strong>R$ 789,00</strong></td>
                                <td><span class="badge badge-info">Processando</span></td>
                                <td>
                                    <div class="action-btns">
                                        <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                        <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#20260131-D2N</strong></td>
                                <td>Ana Costa</td>
                                <td><strong>R$ 156,80</strong></td>
                                <td><span class="badge badge-danger">Cancelado</span></td>
                                <td>
                                    <div class="action-btns">
                                        <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                        <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#20260130-E4P</strong></td>
                                <td>Carlos Souza</td>
                                <td><strong>R$ 2.145,00</strong></td>
                                <td><span class="badge badge-success">Entregue</span></td>
                                <td>
                                    <div class="action-btns">
                                        <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                        <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Activity Feed -->
                <div class="activity-feed">
                    <h3 class="chart-title" style="margin-bottom: 1.5rem;">
                        <i class="fas fa-clock"></i> Atividades Recentes
                    </h3>

                    <div class="activity-item">
                        <div class="activity-icon"
                            style="background: rgba(39, 174, 96, 0.1); color: var(--primary-green);">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-text">Novo pedido <strong>#20260201-A5F</strong> recebido</div>
                            <div class="activity-time">Há 5 minutos</div>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon"
                            style="background: rgba(46, 134, 222, 0.1); color: var(--primary-blue);">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-text">Novo cliente cadastrado: <strong>Maria Silva</strong></div>
                            <div class="activity-time">Há 1 hora</div>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon"
                            style="background: rgba(255, 140, 66, 0.1); color: var(--primary-orange);">
                            <i class="fas fa-box"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-text">Produto <strong>Cimento CP-II</strong> com estoque baixo</div>
                            <div class="activity-time">Há 2 horas</div>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon"
                            style="background: rgba(192, 57, 43, 0.1); color: var(--primary-red);">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-text">Pedido <strong>#20260131-D2N</strong> foi cancelado</div>
                            <div class="activity-time">Há 3 horas</div>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon"
                            style="background: rgba(39, 174, 96, 0.1); color: var(--primary-green);">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-text">Pedido <strong>#20260130-E4P</strong> foi entregue</div>
                            <div class="activity-time">Há 5 horas</div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Top Products -->
            <div class="table-card">
                <div class="table-header">
                    <div class="table-title">
                        <i class="fas fa-fire"></i>
                        Produtos Mais Vendidos
                    </div>
                    <a href="produtos.php" class="btn btn-sm btn-primary">
                        <i class="fas fa-plus"></i>
                        Novo Produto
                    </a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>SKU</th>
                            <th>Categoria</th>
                            <th>Preço</th>
                            <th>Estoque</th>
                            <th>Vendidos</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div style="display: flex; align-items: center; gap: 1rem;">
                                    <div class="product-thumb"><i class="fas fa-cube"></i></div>
                                    <strong>Cimento CP-II 50kg Votoran</strong>
                                </div>
                            </td>
                            <td>CIM-VOT-50</td>
                            <td><span class="badge badge-info">Cimento</span></td>
                            <td><strong>R$ 32,90</strong></td>
                            <td><span class="badge badge-danger">12</span></td>
                            <td><strong>234</strong></td>
                            <td>
                                <div class="action-btns">
                                    <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                    <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="display: flex; align-items: center; gap: 1rem;">
                                    <div class="product-thumb"><i class="fas fa-paint-roller"></i></div>
                                    <strong>Tinta Látex Premium 18L Coral</strong>
                                </div>
                            </td>
                            <td>TIN-COR-18L</td>
                            <td><span class="badge badge-purple">Tintas</span></td>
                            <td><strong>R$ 199,90</strong></td>
                            <td>45</td>
                            <td><strong>189</strong></td>
                            <td>
                                <div class="action-btns">
                                    <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                    <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="display: flex; align-items: center; gap: 1rem;">
                                    <div class="product-thumb"><i class="fas fa-toolbox"></i></div>
                                    <strong>Kit Ferramentas 100 Peças</strong>
                                </div>
                            </td>
                            <td>FER-TRA-100</td>
                            <td><span class="badge badge-warning">Ferramentas</span></td>
                            <td><strong>R$ 389,90</strong></td>
                            <td>23</td>
                            <td><strong>67</strong></td>
                            <td>
                                <div class="action-btns">
                                    <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                    <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </main>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    // Toggle Sidebar (Mobile)
    function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('active');
    }

    // Sales Chart
    const salesChart = new Chart(document.getElementById('salesChart'), {
        type: 'line',
        data: {
            labels: ['Ago', 'Set', 'Out', 'Nov', 'Dez', 'Jan'],
            datasets: [{
                label: 'Vendas (R$)',
                data: [45000, 52000, 48000, 61000, 73000, 89547],
                borderColor: '#2E86DE',
                backgroundColor: 'rgba(46, 134, 222, 0.1)',
                tension: 0.4,
                fill: true,
                borderWidth: 3,
                pointRadius: 5,
                pointHoverRadius: 7,
                pointBackgroundColor: '#2E86DE'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: '#34495E',
                    padding: 12,
                    titleFont: {
                        size: 14
                    },
                    bodyFont: {
                        size: 16,
                        weight: 'bold'
                    },
                    callbacks: {
                        label: function(context) {
                            return 'R$ ' + context.parsed.y.toLocaleString('pt-BR');
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return 'R$ ' + (value / 1000) + 'k';
                        }
                    },
                    grid: {
                        color: '#ECF0F1'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });

    // Orders Chart
    const ordersChart = new Chart(document.getElementById('ordersChart'), {
        type: 'doughnut',
        data: {
            labels: ['Processando', 'Em Transporte', 'Entregue', 'Cancelado'],
            datasets: [{
                data: [45, 32, 156, 14],
                backgroundColor: [
                    '#2E86DE',
                    '#F39C12',
                    '#27AE60',
                    '#C0392B'
                ],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        padding: 15,
                        font: {
                            size: 12,
                            family: 'Poppins'
                        }
                    }
                }
            }
        }
    });

    // Animate numbers on load
    window.addEventListener('load', () => {
        const statValues = document.querySelectorAll('.stat-value');
        statValues.forEach(el => {
            const text = el.textContent;
            if (text.includes('R$')) {
                const value = parseFloat(text.replace('R$ ', '').replace('.', '').replace(',', '.'));
                animateValue(el, 0, value, 1500, true);
            } else {
                const value = parseInt(text.replace('.', ''));
                animateValue(el, 0, value, 1500, false);
            }
        });
    });

    function animateValue(el, start, end, duration, isCurrency) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const current = Math.floor(progress * (end - start) + start);

            if (isCurrency) {
                el.textContent = 'R$ ' + current.toLocaleString('pt-BR');
            } else {
                el.textContent = current.toLocaleString('pt-BR');
            }

            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }
    </script>

</body>

</html>