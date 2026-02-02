<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos - ConstruMax Admin</title>
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

    .stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem
    }

    .stat-card {
        background: #fff;
        padding: 1.5rem;
        border-radius: 15px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        display: flex;
        justify-content: space-between;
        align-items: center
    }

    .stat-card h4 {
        font-size: 0.875rem;
        color: #BDC3C7;
        margin-bottom: 0.5rem
    }

    .stat-card .value {
        font-size: 1.75rem;
        font-weight: 800
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

    .icon-yellow {
        background: rgba(243, 156, 18, 0.1);
        color: #F39C12
    }

    .status-tabs {
        display: flex;
        gap: 0.5rem;
        background: #fff;
        padding: 1rem;
        border-radius: 15px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        margin-bottom: 2rem;
        overflow-x: auto;
        flex-wrap: wrap
    }

    .status-tab {
        padding: 0.75rem 1.5rem;
        border-radius: 10px;
        background: #ECF0F1;
        border: none;
        cursor: pointer;
        font-weight: 600;
        transition: 0.3s;
        font-family: 'Poppins', sans-serif;
        white-space: nowrap
    }

    .status-tab:hover {
        background: #DCE4E7
    }

    .status-tab.active {
        background: linear-gradient(135deg, #2E86DE, #FF8C42);
        color: #fff
    }

    .filters {
        background: #fff;
        padding: 1.5rem;
        border-radius: 15px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        margin-bottom: 2rem;
        display: flex;
        gap: 1rem;
        flex-wrap: wrap
    }

    .search-box {
        flex: 1;
        min-width: 300px;
        position: relative
    }

    .search-box input {
        width: 100%;
        padding: 0.875rem 1rem 0.875rem 3rem;
        border: 2px solid #ECF0F1;
        border-radius: 10px;
        outline: none;
        font-family: 'Poppins', sans-serif
    }

    .search-box input:focus {
        border-color: #2E86DE
    }

    .search-box i {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: #BDC3C7
    }

    .filter-select {
        padding: 0.875rem 1rem;
        border: 2px solid #ECF0F1;
        border-radius: 10px;
        outline: none;
        cursor: pointer;
        background: #fff;
        font-family: 'Poppins', sans-serif
    }

    .table-container {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        overflow: hidden
    }

    .table-header {
        padding: 1.5rem 2rem;
        border-bottom: 2px solid #ECF0F1;
        display: flex;
        justify-content: space-between;
        align-items: center
    }

    .table-header h2 {
        font-size: 1.25rem;
        font-weight: 700
    }

    table {
        width: 100%;
        border-collapse: collapse
    }

    th,
    td {
        padding: 1.25rem 1.5rem;
        text-align: left
    }

    th {
        background: #ECF0F1;
        font-weight: 600;
        font-size: 0.875rem;
        text-transform: uppercase
    }

    tbody tr {
        border-bottom: 1px solid #ECF0F1;
        transition: 0.3s
    }

    tbody tr:hover {
        background: rgba(46, 134, 222, 0.05)
    }

    .order-id {
        font-weight: 700;
        color: #2E86DE;
        font-size: 0.95rem
    }

    .customer-cell {
        display: flex;
        align-items: center;
        gap: 1rem
    }

    .customer-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(135deg, #2E86DE, #FF8C42);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-weight: 700;
        font-size: 0.9rem
    }

    .customer-info h4 {
        font-size: 0.95rem;
        font-weight: 600;
        margin-bottom: 0.25rem
    }

    .customer-info small {
        color: #BDC3C7;
        font-size: 0.8rem
    }

    .badge-status {
        padding: 0.35rem 0.75rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase
    }

    .badge-pending {
        background: rgba(243, 156, 18, 0.1);
        color: #F39C12
    }

    .badge-confirmed {
        background: rgba(46, 134, 222, 0.1);
        color: #2E86DE
    }

    .badge-shipping {
        background: rgba(155, 89, 182, 0.1);
        color: #9B59B6
    }

    .badge-delivered {
        background: rgba(39, 174, 96, 0.1);
        color: #27AE60
    }

    .badge-cancelled {
        background: rgba(192, 57, 43, 0.1);
        color: #C0392B
    }

    .action-btns {
        display: flex;
        gap: 0.5rem
    }

    .action-btn {
        width: 36px;
        height: 36px;
        border-radius: 8px;
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: 0.3s
    }

    .action-btn.view {
        background: rgba(46, 134, 222, 0.1);
        color: #2E86DE
    }

    .action-btn.print {
        background: rgba(39, 174, 96, 0.1);
        color: #27AE60
    }

    .action-btn:hover {
        transform: scale(1.1)
    }

    .pagination {
        display: flex;
        justify-content: center;
        gap: 0.5rem;
        padding: 2rem
    }

    .page-btn {
        min-width: 40px;
        height: 40px;
        padding: 0 1rem;
        background: #fff;
        border: 2px solid #ECF0F1;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
        font-family: 'Poppins', sans-serif
    }

    .page-btn:hover {
        border-color: #2E86DE;
        color: #2E86DE
    }

    .page-btn.active {
        background: linear-gradient(135deg, #2E86DE, #FF8C42);
        color: #fff;
        border: none
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

    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 9999;
        align-items: center;
        justify-content: center
    }

    .modal.active {
        display: flex
    }

    .modal-content {
        background: #fff;
        border-radius: 20px;
        padding: 2rem;
        max-width: 700px;
        width: 90%;
        max-height: 90vh;
        overflow-y: auto
    }

    .modal-header {
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid #ECF0F1;
        display: flex;
        justify-content: space-between;
        align-items: center
    }

    .modal-header h3 {
        font-size: 1.5rem;
        font-weight: 700
    }

    .modal-close {
        background: none;
        border: none;
        font-size: 1.5rem;
        cursor: pointer;
        color: #BDC3C7
    }

    .detail-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
        margin-bottom: 1.5rem
    }

    .detail-item {
        background: #ECF0F1;
        padding: 1rem;
        border-radius: 10px
    }

    .detail-label {
        font-size: 0.8rem;
        color: #7F8C8D;
        margin-bottom: 0.25rem
    }

    .detail-value {
        font-weight: 700;
        font-size: 1rem
    }

    .order-item {
        display: flex;
        justify-content: space-between;
        padding: 1rem;
        background: #ECF0F1;
        border-radius: 10px;
        margin-bottom: 0.75rem
    }

    .item-info {
        flex: 1
    }

    .item-info h4 {
        font-size: 0.95rem;
        font-weight: 600;
        margin-bottom: 0.25rem
    }

    .item-info small {
        color: #7F8C8D
    }

    .item-price {
        text-align: right
    }

    .item-price .qty {
        font-size: 0.85rem;
        color: #7F8C8D;
        margin-bottom: 0.25rem
    }

    .item-price .total {
        font-size: 1.1rem;
        font-weight: 700
    }

    .order-totals {
        background: #F8F9FA;
        padding: 1.5rem;
        border-radius: 10px;
        margin-bottom: 1.5rem
    }

    .total-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 0.75rem
    }

    .total-row.grand {
        font-size: 1.25rem;
        font-weight: 800;
        color: #2E86DE;
        padding-top: 0.75rem;
        border-top: 2px solid #DCE4E7
    }

    .status-update {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap
    }

    .status-btn {
        padding: 0.75rem 1.5rem;
        border-radius: 10px;
        border: none;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
        font-family: 'Poppins', sans-serif
    }

    .status-btn.pending {
        background: rgba(243, 156, 18, 0.1);
        color: #F39C12
    }

    .status-btn.confirmed {
        background: rgba(46, 134, 222, 0.1);
        color: #2E86DE
    }

    .status-btn.shipping {
        background: rgba(155, 89, 182, 0.1);
        color: #9B59B6
    }

    .status-btn.delivered {
        background: rgba(39, 174, 96, 0.1);
        color: #27AE60
    }

    .status-btn:hover {
        transform: translateY(-2px)
    }

    @media(max-width:1024px) {
        .detail-grid {
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

        .filters,
        .status-tabs {
            flex-direction: column
        }

        .search-box {
            min-width: 100%
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
                <div class="menu-title">Menu</div><a href="index.php" class="menu-item"><i
                        class="fas fa-th-large"></i>Dashboard</a><a href="produtos.php" class="menu-item"><i
                        class="fas fa-box"></i>Produtos<span class="badge">507</span></a><a href="categorias.php"
                    class="menu-item"><i class="fas fa-tags"></i>Categorias</a><a href="pedidos.php"
                    class="menu-item active"><i class="fas fa-shopping-cart"></i>Pedidos<span
                        class="badge">12</span></a><a href="estoque.php" class="menu-item"><i
                        class="fas fa-warehouse"></i>Estoque</a><a href="vendas.php" class="menu-item"><i
                        class="fas fa-chart-line"></i>Vendas</a><a href="../logout.php" class="menu-item"><i
                        class="fas fa-sign-out-alt"></i>Sair</a>
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
                <h1>Pedidos</h1>
                <div class="breadcrumb"><a href="index.php"><i class="fas fa-home"></i>
                        Dashboard</a><span>/</span><span>Pedidos</span></div>
            </div><button class="btn btn-primary" onclick="window.print()"><i class="fas fa-print"></i>Imprimir</button>
        </div>
        <div class="content">
            <div class="stats">
                <div class="stat-card">
                    <div>
                        <h4>Total de Pedidos</h4>
                        <div class="value">247</div>
                    </div>
                    <div class="stat-icon icon-blue"><i class="fas fa-shopping-cart"></i></div>
                </div>
                <div class="stat-card">
                    <div>
                        <h4>Pedidos Hoje</h4>
                        <div class="value">23</div>
                    </div>
                    <div class="stat-icon icon-green"><i class="fas fa-calendar-day"></i></div>
                </div>
                <div class="stat-card">
                    <div>
                        <h4>Em Andamento</h4>
                        <div class="value">45</div>
                    </div>
                    <div class="stat-icon icon-orange"><i class="fas fa-clock"></i></div>
                </div>
                <div class="stat-card">
                    <div>
                        <h4>Faturamento</h4>
                        <div class="value">R$ 189.5k</div>
                    </div>
                    <div class="stat-icon icon-yellow"><i class="fas fa-dollar-sign"></i></div>
                </div>
            </div>
            <div class="status-tabs">
                <button class="status-tab active">Todos (247)</button>
                <button class="status-tab">Pendentes (45)</button>
                <button class="status-tab">Confirmados (32)</button>
                <button class="status-tab">Em Transporte (85)</button>
                <button class="status-tab">Entregues (71)</button>
                <button class="status-tab">Cancelados (14)</button>
            </div>
            <div class="filters">
                <div class="search-box"><i class="fas fa-search"></i><input type="text"
                        placeholder="Buscar por pedido, cliente..." id="searchInput"></div>
                <select class="filter-select">
                    <option>Período</option>
                    <option>Hoje</option>
                    <option>Semana</option>
                    <option>Mês</option>
                </select>
                <select class="filter-select">
                    <option>Pagamento</option>
                    <option>PIX</option>
                    <option>Cartão</option>
                    <option>Boleto</option>
                </select>
            </div>
            <div class="table-container">
                <div class="table-header">
                    <h2>Lista de Pedidos</h2>
                    <div style="color:#BDC3C7;font-size:0.875rem">Mostrando <strong>1-6</strong> de <strong>247</strong>
                        pedidos</div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Pedido</th>
                            <th>Cliente</th>
                            <th>Data</th>
                            <th>Valor</th>
                            <th>Pagamento</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="order-id">#20260201-A2F3B1</span></td>
                            <td>
                                <div class="customer-cell">
                                    <div class="customer-avatar">JS</div>
                                    <div class="customer-info">
                                        <h4>João Silva</h4><small>joao@email.com</small>
                                    </div>
                                </div>
                            </td>
                            <td>01/02/2026<br><small style="color:#BDC3C7">14:35</small></td>
                            <td><strong style="font-size:1.1rem">R$ 1.245,90</strong></td>
                            <td>PIX</td>
                            <td><span class="badge-status badge-delivered">Entregue</span></td>
                            <td>
                                <div class="action-btns"><button class="action-btn view"
                                        onclick="viewOrder('A2F3B1')"><i class="fas fa-eye"></i></button><button
                                        class="action-btn print"><i class="fas fa-print"></i></button></div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="order-id">#20260201-C7D8E9</span></td>
                            <td>
                                <div class="customer-cell">
                                    <div class="customer-avatar">MS</div>
                                    <div class="customer-info">
                                        <h4>Maria Santos</h4><small>maria@email.com</small>
                                    </div>
                                </div>
                            </td>
                            <td>01/02/2026<br><small style="color:#BDC3C7">13:20</small></td>
                            <td><strong style="font-size:1.1rem">R$ 890,50</strong></td>
                            <td>Cartão</td>
                            <td><span class="badge-status badge-shipping">Em Transporte</span></td>
                            <td>
                                <div class="action-btns"><button class="action-btn view"
                                        onclick="viewOrder('C7D8E9')"><i class="fas fa-eye"></i></button><button
                                        class="action-btn print"><i class="fas fa-print"></i></button></div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="order-id">#20260131-F5G6H7</span></td>
                            <td>
                                <div class="customer-cell">
                                    <div class="customer-avatar">PC</div>
                                    <div class="customer-info">
                                        <h4>Pedro Costa</h4><small>pedro@email.com</small>
                                    </div>
                                </div>
                            </td>
                            <td>31/01/2026<br><small style="color:#BDC3C7">16:45</small></td>
                            <td><strong style="font-size:1.1rem">R$ 2.340,00</strong></td>
                            <td>PIX</td>
                            <td><span class="badge-status badge-confirmed">Confirmado</span></td>
                            <td>
                                <div class="action-btns"><button class="action-btn view"
                                        onclick="viewOrder('F5G6H7')"><i class="fas fa-eye"></i></button><button
                                        class="action-btn print"><i class="fas fa-print"></i></button></div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="order-id">#20260131-I8J9K0</span></td>
                            <td>
                                <div class="customer-cell">
                                    <div class="customer-avatar">AP</div>
                                    <div class="customer-info">
                                        <h4>Ana Paula</h4><small>ana@email.com</small>
                                    </div>
                                </div>
                            </td>
                            <td>31/01/2026<br><small style="color:#BDC3C7">11:30</small></td>
                            <td><strong style="font-size:1.1rem">R$ 567,80</strong></td>
                            <td>Boleto</td>
                            <td><span class="badge-status badge-cancelled">Cancelado</span></td>
                            <td>
                                <div class="action-btns"><button class="action-btn view"
                                        onclick="viewOrder('I8J9K0')"><i class="fas fa-eye"></i></button><button
                                        class="action-btn print"><i class="fas fa-print"></i></button></div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="order-id">#20260130-L1M2N3</span></td>
                            <td>
                                <div class="customer-cell">
                                    <div class="customer-avatar">CM</div>
                                    <div class="customer-info">
                                        <h4>Carlos Mendes</h4><small>carlos@email.com</small>
                                    </div>
                                </div>
                            </td>
                            <td>30/01/2026<br><small style="color:#BDC3C7">09:15</small></td>
                            <td><strong style="font-size:1.1rem">R$ 1.890,00</strong></td>
                            <td>Cartão</td>
                            <td><span class="badge-status badge-delivered">Entregue</span></td>
                            <td>
                                <div class="action-btns"><button class="action-btn view"
                                        onclick="viewOrder('L1M2N3')"><i class="fas fa-eye"></i></button><button
                                        class="action-btn print"><i class="fas fa-print"></i></button></div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="order-id">#20260130-P4Q5R6</span></td>
                            <td>
                                <div class="customer-cell">
                                    <div class="customer-avatar">RF</div>
                                    <div class="customer-info">
                                        <h4>Rita Ferreira</h4><small>rita@email.com</small>
                                    </div>
                                </div>
                            </td>
                            <td>30/01/2026<br><small style="color:#BDC3C7">15:50</small></td>
                            <td><strong style="font-size:1.1rem">R$ 456,90</strong></td>
                            <td>PIX</td>
                            <td><span class="badge-status badge-pending">Pendente</span></td>
                            <td>
                                <div class="action-btns"><button class="action-btn view"
                                        onclick="viewOrder('P4Q5R6')"><i class="fas fa-eye"></i></button><button
                                        class="action-btn print"><i class="fas fa-print"></i></button></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="pagination"><button class="page-btn"><i class="fas fa-chevron-left"></i></button>
                    <button class="page-btn active">1</button><button class="page-btn">2</button><button
                        class="page-btn">3</button><button class="page-btn">4</button><button
                        class="page-btn">...</button><button class="page-btn">25</button><button class="page-btn"><i
                            class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </main>
    <div class="modal" id="orderModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3><i class="fas fa-file-invoice"></i> Detalhes do Pedido <span id="modalOrderId"></span></h3><button
                    class="modal-close" onclick="closeModal()">×</button>
            </div>
            <div class="detail-grid">
                <div class="detail-item">
                    <div class="detail-label">Cliente</div>
                    <div class="detail-value">João Silva</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Data</div>
                    <div class="detail-value">01/02/2026 14:35</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Pagamento</div>
                    <div class="detail-value">PIX</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Status Pagamento</div>
                    <div class="detail-value" style="color:#27AE60">✓ Aprovado</div>
                </div>
            </div>
            <h4 style="margin:1.5rem 0 1rem;font-size:1.1rem">Endereço de Entrega</h4>
            <div style="background:#ECF0F1;padding:1rem;border-radius:10px;margin-bottom:1.5rem">
                <p><strong>Rua das Flores, 123 - Apto 45</strong></p>
                <p>Centro - Belo Horizonte/MG - CEP: 30130-000</p>
            </div>
            <h4 style="margin:1.5rem 0 1rem;font-size:1.1rem">Itens do Pedido</h4>
            <div class="order-item">
                <div class="item-info">
                    <h4>Cimento CP-II 50kg</h4><small>SKU: CIM-VOT-50</small>
                </div>
                <div class="item-price">
                    <div class="qty">2x R$ 32,90</div>
                    <div class="total">R$ 65,80</div>
                </div>
            </div>
            <div class="order-item">
                <div class="item-info">
                    <h4>Tinta Látex 18L</h4><small>SKU: TIN-COR-18L</small>
                </div>
                <div class="item-price">
                    <div class="qty">1x R$ 199,90</div>
                    <div class="total">R$ 199,90</div>
                </div>
            </div>
            <div class="order-item">
                <div class="item-info">
                    <h4>Kit Ferramentas 100pç</h4><small>SKU: FER-TRA-100</small>
                </div>
                <div class="item-price">
                    <div class="qty">1x R$ 389,90</div>
                    <div class="total">R$ 389,90</div>
                </div>
            </div>
            <div class="order-totals">
                <div class="total-row"><span>Subtotal:</span><strong>R$ 655,60</strong></div>
                <div class="total-row"><span>Frete:</span><strong>R$ 25,00</strong></div>
                <div class="total-row"><span style="color:#27AE60">Desconto:</span><strong style="color:#27AE60">-R$
                        32,78</strong></div>
                <div class="total-row grand"><span>Total:</span><span>R$ 647,82</span></div>
            </div>
            <h4 style="margin:1.5rem 0 1rem;font-size:1.1rem">Atualizar Status</h4>
            <div class="status-update">
                <button class="status-btn pending" onclick="updateStatus('Pendente')"><i class="fas fa-clock"></i>
                    Pendente</button>
                <button class="status-btn confirmed" onclick="updateStatus('Confirmado')"><i class="fas fa-check"></i>
                    Confirmado</button>
                <button class="status-btn shipping" onclick="updateStatus('Em Transporte')"><i class="fas fa-truck"></i>
                    Em Transporte</button>
                <button class="status-btn delivered" onclick="updateStatus('Entregue')"><i class="fas fa-box-open"></i>
                    Entregue</button>
            </div>
        </div>
    </div>
    <script>
    document.getElementById('searchInput').addEventListener('input', function(e) {
        const term = e.target.value.toLowerCase();
        document.querySelectorAll('tbody tr').forEach(row => {
            row.style.display = row.textContent.toLowerCase().includes(term) ? '' : 'none'
        })
    });
    document.querySelectorAll('.status-tab').forEach(tab => {
        tab.addEventListener('click', function() {
            document.querySelectorAll('.status-tab').forEach(t => t.classList.remove('active'));
            this.classList.add('active')
        })
    });

    function viewOrder(id) {
        document.getElementById('modalOrderId').textContent = '#20260201-' + id;
        document.getElementById('orderModal').classList.add('active')
    }

    function closeModal() {
        document.getElementById('orderModal').classList.remove('active')
    }

    function updateStatus(status) {
        alert('Status atualizado para: ' + status);
        closeModal()
    }
    document.getElementById('orderModal').addEventListener('click', function(e) {
        if (e.target === this) closeModal()
    });
    </script>
</body>

</html>