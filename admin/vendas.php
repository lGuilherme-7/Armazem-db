<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Vendas - ConstruMax Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    :root {
        --blue: #2E86DE;
        --orange: #FF8C42;
        --red: #C0392B;
        --gray: #34495E;
        --green: #27AE60;
        --purple: #9B59B6;
        --yellow: #F39C12;
        --light: #ECF0F1;
        --medium: #BDC3C7;
        --dark: #2C3E50
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: #ECF0F1;
        color: #2C3E50
    }

    .sidebar {
        position: fixed;
        left: 0;
        top: 0;
        bottom: 0;
        width: 280px;
        background: #34495E;
        color: #fff;
        overflow-y: auto;
        z-index: 1000;
        overflow-y: auto;
        scrollbar-width: none;
    }

    .logo {
        padding: 2rem;
        text-align: center;
        background: rgba(0, 0, 0, 0.2);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1)
    }

    .logo h2 {
        font-size: 1.75rem;
        font-weight: 800;
        margin-bottom: 0.5rem
    }

    .logo i {
        font-size: 2rem;
        background: linear-gradient(135deg, #2E86DE, #FF8C42);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent
    }

    .menu {
        padding: 1.5rem 0
    }

    .menu-title {
        padding: 0 2rem;
        font-size: 0.75rem;
        text-transform: uppercase;
        opacity: 0.5;
        margin-bottom: 0.75rem
    }

    .menu-item {
        padding: 1rem 2rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: 0.3s;
        position: relative
    }

    .menu-item:hover {
        background: rgba(255, 255, 255, 0.05);
        color: #fff
    }

    .menu-item.active {
        background: rgba(46, 134, 222, 0.2);
        color: #fff;
        border-left: 4px solid #2E86DE
    }

    .menu-item i {
        width: 24px
    }

    .badge {
        margin-left: auto;
        background: #C0392B;
        padding: 0.25rem 0.5rem;
        border-radius: 50px;
        font-size: 0.7rem;
        font-weight: 700
    }

    .user-info {
        padding: 2rem;
        background: rgba(0, 0, 0, 0.2);
        display: flex;
        gap: 1rem;
        align-items: center
    }

    .user-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(135deg, #2E86DE, #FF8C42);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 1.5rem
    }

    .main {
        margin-left: 280px;
        min-height: 100vh
    }

    .topbar {
        background: #fff;
        padding: 1.5rem 2rem;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: sticky;
        top: 0;
        z-index: 100
    }

    .topbar h1 {
        font-size: 1.75rem;
        font-weight: 800
    }

    .breadcrumb {
        display: flex;
        gap: 0.5rem;
        font-size: 0.875rem;
        color: #BDC3C7;
        margin-top: 0.25rem
    }

    .breadcrumb a {
        color: #2E86DE;
        text-decoration: none
    }

    .content {
        padding: 2rem
    }

    .period-selector {
        background: #fff;
        padding: 1.5rem 2rem;
        border-radius: 15px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        margin-bottom: 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem
    }

    .period-tabs {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap
    }

    .period-tab {
        padding: 0.75rem 1.5rem;
        border-radius: 10px;
        background: #ECF0F1;
        border: none;
        cursor: pointer;
        font-weight: 600;
        transition: 0.3s;
        font-family: 'Poppins', sans-serif
    }

    .period-tab:hover {
        background: #DCE4E7
    }

    .period-tab.active {
        background: linear-gradient(135deg, #2E86DE, #FF8C42);
        color: #fff
    }

    .date-range {
        display: flex;
        gap: 0.5rem;
        align-items: center
    }

    .date-input {
        padding: 0.75rem 1rem;
        border: 2px solid #ECF0F1;
        border-radius: 10px;
        font-family: 'Poppins', sans-serif;
        outline: none;
        cursor: pointer
    }

    .stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem
    }

    .stat-card {
        background: #fff;
        padding: 2rem;
        border-radius: 20px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        position: relative;
        overflow: hidden;
        transition: 0.3s
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15)
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        opacity: 0.05;
        z-index: 0
    }

    .stat-card.blue::before {
        background: #2E86DE
    }

    .stat-card.green::before {
        background: #27AE60
    }

    .stat-card.orange::before {
        background: #FF8C42
    }

    .stat-card.purple::before {
        background: #9B59B6
    }

    .stat-content {
        position: relative;
        z-index: 1
    }

    .stat-header {
        display: flex;
        justify-content: space-between;
        align-items: start;
        margin-bottom: 1rem
    }

    .stat-label {
        font-size: 0.875rem;
        color: #7F8C8D;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px
    }

    .stat-icon {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem
    }

    .icon-blue {
        background: rgba(46, 134, 222, 0.1);
        color: #2E86DE
    }

    .icon-green {
        background: rgba(39, 174, 96, 0.1);
        color: #27AE60
    }

    .icon-orange {
        background: rgba(255, 140, 66, 0.1);
        color: #FF8C42
    }

    .icon-purple {
        background: rgba(155, 89, 182, 0.1);
        color: #9B59B6
    }

    .stat-value {
        font-size: 2.5rem;
        font-weight: 800;
        margin-bottom: 0.75rem;
        line-height: 1
    }

    .stat-change {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.875rem;
        font-weight: 600
    }

    .stat-change.positive {
        color: #27AE60
    }

    .stat-change.negative {
        color: #C0392B
    }

    .stat-change i {
        font-size: 1rem
    }

    .charts-row {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 1.5rem;
        margin-bottom: 2rem
    }

    .chart-card {
        background: #fff;
        padding: 2rem;
        border-radius: 20px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08)
    }

    .chart-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem
    }

    .chart-title {
        font-size: 1.25rem;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 0.75rem
    }

    .chart-subtitle {
        font-size: 0.875rem;
        color: #7F8C8D;
        margin-top: 0.25rem
    }

    .info-card {
        background: #fff;
        padding: 2rem;
        border-radius: 20px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        margin-bottom: 1.5rem
    }

    .info-title {
        font-size: 1.125rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.75rem
    }

    .info-list {
        display: flex;
        flex-direction: column;
        gap: 1rem
    }

    .info-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem;
        background: #F8F9FA;
        border-radius: 10px
    }

    .info-item-label {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-weight: 600;
        font-size: 0.95rem
    }

    .info-item-value {
        font-weight: 800;
        font-size: 1.125rem
    }

    .rank-badge {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 0.9rem
    }

    .rank-1 {
        background: linear-gradient(135deg, #FFD700, #FFA500);
        color: #fff
    }

    .rank-2 {
        background: linear-gradient(135deg, #C0C0C0, #808080);
        color: #fff
    }

    .rank-3 {
        background: linear-gradient(135deg, #CD7F32, #8B4513);
        color: #fff
    }

    .rank-other {
        background: #ECF0F1;
        color: #7F8C8D
    }

    .product-thumb {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        background: #ECF0F1;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        color: #BDC3C7
    }

    .comparison-card {
        background: #fff;
        padding: 2rem;
        border-radius: 20px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08)
    }

    .comparison-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem;
        border-bottom: 1px solid #ECF0F1
    }

    .comparison-row:last-child {
        border-bottom: none
    }

    .comparison-label {
        font-weight: 600;
        color: #7F8C8D;
        font-size: 0.9rem
    }

    .comparison-values {
        display: flex;
        gap: 2rem
    }

    .comparison-value {
        text-align: right
    }

    .comparison-value .label {
        font-size: 0.75rem;
        color: #7F8C8D;
        margin-bottom: 0.25rem
    }

    .comparison-value .value {
        font-size: 1.125rem;
        font-weight: 700
    }

    .btn {
        padding: 0.75rem 1.5rem;
        border-radius: 10px;
        border: none;
        font-weight: 600;
        cursor: pointer;
        display: inline-flex;
        gap: 0.5rem;
        align-items: center;
        font-family: 'Poppins', sans-serif;
        transition: 0.3s;
        text-decoration: none
    }

    .btn-primary {
        background: linear-gradient(135deg, #2E86DE, #FF8C42);
        color: #fff
    }

    .btn-primary:hover {
        transform: translateY(-2px)
    }

    .btn-secondary {
        background: #ECF0F1;
        color: #2C3E50
    }

    .btn-secondary:hover {
        background: #BDC3C7
    }

    @media(max-width:1200px) {
        .charts-row {
            grid-template-columns: 1fr
        }
    }

    @media(max-width:768px) {
        .sidebar {
            transform: translateX(-100%)
        }

        .main {
            margin-left: 0
        }

        .period-selector {
            flex-direction: column;
            align-items: stretch
        }

        .stats {
            grid-template-columns: 1fr
        }
    }
    </style>
</head>

<body>

    <aside class="sidebar">
        <div class="logo">
            <h2><i class="fas fa-hard-hat"></i> ConstruMax</h2>
            <div style="font-size:0.75rem;opacity:0.7">PAINEL ADMIN</div>
        </div>
        <nav class="menu">
            <div style="margin-bottom:2rem">
                <div class="menu-title">Menu</div>
                <a href="index.php" class="menu-item"><i class="fas fa-th-large"></i>Dashboard</a>
                <a href="produtos.php" class="menu-item"><i class="fas fa-box"></i>Produtos<span
                        class="badge">507</span></a>
                <a href="categorias.php" class="menu-item"><i class="fas fa-tags"></i>Categorias</a>
                <a href="pedidos.php" class="menu-item"><i class="fas fa-shopping-cart"></i>Pedidos<span
                        class="badge">12</span></a>
                <a href="estoque.php" class="menu-item"><i class="fas fa-warehouse"></i>Estoque</a>
                <a href="vendas.php" class="menu-item active"><i class="fas fa-chart-line"></i>Vendas</a>
                <a href="../public/logout.php" class="menu-item"><i class="fas fa-sign-out-alt"></i>Sair</a>
            </div>
        </nav>
        <div class="user-info">
            <div class="user-avatar">A</div>
            <div><strong>Administrador</strong><br><small style="opacity:0.7">admin@construmax.com.br</small></div>
        </div>
    </aside>

    <main class="main">
        <div class="topbar">
            <div>
                <h1>Relatório de Vendas</h1>
                <div class="breadcrumb"><a href="index.php"><i class="fas fa-home"></i>
                        Dashboard</a><span>/</span><span>Vendas</span></div>
            </div>
            <div style="display:flex;gap:1rem">
                <button class="btn btn-secondary" onclick="window.print()"><i class="fas fa-print"></i>Imprimir</button>
                <button class="btn btn-primary" onclick="alert('Exportando relatório...')"><i
                        class="fas fa-download"></i>Exportar PDF</button>
            </div>
        </div>

        <div class="content">

            <!-- SELETOR DE PERÍODO -->
            <div class="period-selector">
                <div class="period-tabs">
                    <button class="period-tab" onclick="setPeriod('today')">Hoje</button>
                    <button class="period-tab" onclick="setPeriod('week')">Esta Semana</button>
                    <button class="period-tab active" onclick="setPeriod('month')">Este Mês</button>
                    <button class="period-tab" onclick="setPeriod('year')">Este Ano</button>
                </div>
                <div class="date-range">
                    <input type="date" class="date-input" value="2026-01-01">
                    <span style="color:#BDC3C7">até</span>
                    <input type="date" class="date-input" value="2026-02-02">
                </div>
            </div>

            <!-- STATS -->
            <div class="stats">
                <div class="stat-card blue">
                    <div class="stat-content">
                        <div class="stat-header">
                            <div class="stat-label">Faturamento Total</div>
                            <div class="stat-icon icon-blue"><i class="fas fa-dollar-sign"></i></div>
                        </div>
                        <div class="stat-value">R$ 284.560</div>
                        <div class="stat-change positive"><i class="fas fa-arrow-up"></i>+12.5% vs mês anterior</div>
                    </div>
                </div>

                <div class="stat-card green">
                    <div class="stat-content">
                        <div class="stat-header">
                            <div class="stat-label">Total de Pedidos</div>
                            <div class="stat-icon icon-green"><i class="fas fa-shopping-cart"></i></div>
                        </div>
                        <div class="stat-value">247</div>
                        <div class="stat-change positive"><i class="fas fa-arrow-up"></i>+8.3% vs mês anterior</div>
                    </div>
                </div>

                <div class="stat-card orange">
                    <div class="stat-content">
                        <div class="stat-header">
                            <div class="stat-label">Ticket Médio</div>
                            <div class="stat-icon icon-orange"><i class="fas fa-receipt"></i></div>
                        </div>
                        <div class="stat-value">R$ 1.152</div>
                        <div class="stat-change positive"><i class="fas fa-arrow-up"></i>+3.8% vs mês anterior</div>
                    </div>
                </div>

                <div class="stat-card purple">
                    <div class="stat-content">
                        <div class="stat-header">
                            <div class="stat-label">Taxa de Conversão</div>
                            <div class="stat-icon icon-purple"><i class="fas fa-percentage"></i></div>
                        </div>
                        <div class="stat-value">68.4%</div>
                        <div class="stat-change negative"><i class="fas fa-arrow-down"></i>-1.2% vs mês anterior</div>
                    </div>
                </div>
            </div>

            <!-- GRÁFICOS -->
            <div class="charts-row">
                <div class="chart-card">
                    <div class="chart-header">
                        <div>
                            <div class="chart-title"><i class="fas fa-chart-line"></i>Evolução de Vendas</div>
                            <div class="chart-subtitle">Faturamento diário dos últimos 30 dias</div>
                        </div>
                    </div>
                    <div class="chart-wrapper">
                        <canvas id="salesChart" height="330"></canvas>
                    </div>
                </div>

                <div>
                    <div class="chart-card">
                        <div class="chart-header">
                            <div class="chart-title"><i class="fas fa-chart-pie"></i>Vendas por Categoria</div>
                        </div>
                        <div class="chart-wrapper">
                            <canvas id="categoryChart" height="370"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TABELAS E INFOS -->
            <div class="charts-row">

                <!-- TOP PRODUTOS -->
                <div class="info-card">
                    <div class="info-title"><i class="fas fa-trophy"></i>Top 5 Produtos Mais Vendidos</div>
                    <div class="info-list">
                        <div class="info-item">
                            <div class="info-item-label">
                                <div class="rank-badge rank-1">1º</div>
                                <div class="product-thumb"><i class="fas fa-paint-roller"></i></div>
                                <div>
                                    <div style="font-weight:700;font-size:0.95rem">Tinta Látex Premium 18L</div>
                                    <small style="color:#7F8C8D">189 unidades vendidas</small>
                                </div>
                            </div>
                            <div class="info-item-value" style="color:#27AE60">R$ 37.780</div>
                        </div>

                        <div class="info-item">
                            <div class="info-item-label">
                                <div class="rank-badge rank-2">2º</div>
                                <div class="product-thumb"><i class="fas fa-toolbox"></i></div>
                                <div>
                                    <div style="font-weight:700;font-size:0.95rem">Kit Ferramentas 100 Peças</div>
                                    <small style="color:#7F8C8D">132 unidades vendidas</small>
                                </div>
                            </div>
                            <div class="info-item-value" style="color:#27AE60">R$ 51.467</div>
                        </div>

                        <div class="info-item">
                            <div class="info-item-label">
                                <div class="rank-badge rank-3">3º</div>
                                <div class="product-thumb"><i class="fas fa-cube"></i></div>
                                <div>
                                    <div style="font-weight:700;font-size:0.95rem">Cimento CP-II 50kg</div>
                                    <small style="color:#7F8C8D">234 unidades vendidas</small>
                                </div>
                            </div>
                            <div class="info-item-value" style="color:#27AE60">R$ 7.698</div>
                        </div>

                        <div class="info-item">
                            <div class="info-item-label">
                                <div class="rank-badge rank-other">4º</div>
                                <div class="product-thumb"><i class="fas fa-lightbulb"></i></div>
                                <div>
                                    <div style="font-weight:700;font-size:0.95rem">Lâmpada LED 12W Kit</div>
                                    <small style="color:#7F8C8D">98 unidades vendidas</small>
                                </div>
                            </div>
                            <div class="info-item-value" style="color:#27AE60">R$ 8.810</div>
                        </div>

                        <div class="info-item">
                            <div class="info-item-label">
                                <div class="rank-badge rank-other">5º</div>
                                <div class="product-thumb"><i class="fas fa-faucet"></i></div>
                                <div>
                                    <div style="font-weight:700;font-size:0.95rem">Torneira Monocomando</div>
                                    <small style="color:#7F8C8D">67 unidades vendidas</small>
                                </div>
                            </div>
                            <div class="info-item-value" style="color:#27AE60">R$ 17.078</div>
                        </div>
                    </div>
                </div>

                <!-- COMPARATIVO -->
                <div>
                    <div class="comparison-card" style="margin-bottom:1.5rem">
                        <div class="info-title"><i class="fas fa-exchange-alt"></i>Comparativo Mensal</div>
                        <div class="comparison-row">
                            <div class="comparison-label">Faturamento</div>
                            <div class="comparison-values">
                                <div class="comparison-value">
                                    <div class="label">Jan/26</div>
                                    <div class="value" style="color:#2E86DE">R$ 284k</div>
                                </div>
                                <div class="comparison-value">
                                    <div class="label">Dez/25</div>
                                    <div class="value" style="color:#7F8C8D">R$ 253k</div>
                                </div>
                            </div>
                        </div>
                        <div class="comparison-row">
                            <div class="comparison-label">Pedidos</div>
                            <div class="comparison-values">
                                <div class="comparison-value">
                                    <div class="label">Jan/26</div>
                                    <div class="value" style="color:#27AE60">247</div>
                                </div>
                                <div class="comparison-value">
                                    <div class="label">Dez/25</div>
                                    <div class="value" style="color:#7F8C8D">228</div>
                                </div>
                            </div>
                        </div>
                        <div class="comparison-row">
                            <div class="comparison-label">Ticket Médio</div>
                            <div class="comparison-values">
                                <div class="comparison-value">
                                    <div class="label">Jan/26</div>
                                    <div class="value" style="color:#FF8C42">R$ 1.152</div>
                                </div>
                                <div class="comparison-value">
                                    <div class="label">Dez/25</div>
                                    <div class="value" style="color:#7F8C8D">R$ 1.109</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="info-card">
                        <div class="info-title"><i class="fas fa-credit-card"></i>Formas de Pagamento</div>
                        <div class="info-list">
                            <div class="info-item">
                                <div class="info-item-label"><i class="fab fa-pix"
                                        style="color:#27AE60;font-size:1.5rem"></i>PIX</div>
                                <div style="text-align:right">
                                    <div class="info-item-value" style="color:#27AE60">R$ 142k</div>
                                    <small style="color:#7F8C8D">50% das vendas</small>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-item-label"><i class="fas fa-credit-card"
                                        style="color:#2E86DE;font-size:1.5rem"></i>Cartão</div>
                                <div style="text-align:right">
                                    <div class="info-item-value" style="color:#2E86DE">R$ 114k</div>
                                    <small style="color:#7F8C8D">40% das vendas</small>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-item-label"><i class="fas fa-barcode"
                                        style="color:#F39C12;font-size:1.5rem"></i>Boleto</div>
                                <div style="text-align:right">
                                    <div class="info-item-value" style="color:#F39C12">R$ 28k</div>
                                    <small style="color:#7F8C8D">10% das vendas</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    // Period Selector
    function setPeriod(period) {
        document.querySelectorAll('.period-tab').forEach(tab => tab.classList.remove('active'));
        event.target.classList.add('active');
    }

    // Sales Line Chart
    new Chart(document.getElementById('salesChart'), {
        type: 'line',
        data: {
            labels: ['01/01', '05/01', '10/01', '15/01', '20/01', '25/01', '30/01', '02/02'],
            datasets: [{
                label: 'Faturamento (R$)',
                data: [8500, 12300, 9800, 15600, 13200, 18900, 16400, 20100],
                borderColor: '#2E86DE',
                backgroundColor: 'rgba(46,134,222,0.1)',
                tension: 0.4,
                fill: true,
                borderWidth: 3,
                pointRadius: 5,
                pointBackgroundColor: '#2E86DE',
                pointBorderColor: '#fff',
                pointBorderWidth: 2
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
                    backgroundColor: 'rgba(44,62,80,0.95)',
                    padding: 12,
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
                        color: 'rgba(0,0,0,0.05)'
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

    // Category Pie Chart
    new Chart(document.getElementById('categoryChart'), {
        type: 'doughnut',
        data: {
            labels: ['Tintas', 'Ferramentas', 'Cimento', 'Elétrica', 'Hidráulica', 'Pisos'],
            datasets: [{
                data: [89, 132, 45, 76, 98, 67],
                backgroundColor: ['#9B59B6', '#FF8C42', '#2E86DE', '#F39C12', '#2E86DE', '#27AE60'],
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
                            size: 11,
                            family: 'Poppins'
                        }
                    }
                }
            },
            cutout: '65%'
        }
    });
    </script>
</body>

</html>