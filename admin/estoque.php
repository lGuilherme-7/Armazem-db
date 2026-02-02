<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque - ConstruMax Admin</title>
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
        z-index: 1000
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
        align-items: center;
        transition: 0.3s
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15)
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

    .icon-red {
        background: rgba(192, 57, 43, 0.1);
        color: #C0392B
    }

    .alerts {
        background: #fff;
        padding: 1.5rem;
        border-radius: 15px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        margin-bottom: 2rem
    }

    .alert-item {
        padding: 1rem;
        background: #FFF3CD;
        border-left: 4px solid #F39C12;
        border-radius: 8px;
        margin-bottom: 1rem;
        display: flex;
        gap: 1rem;
        align-items: start
    }

    .alert-item.critical {
        background: #F8D7DA;
        border-color: #C0392B
    }

    .alert-item i {
        font-size: 1.5rem;
        margin-top: 0.25rem
    }

    .alert-item.critical i {
        color: #C0392B
    }

    .alert-item:not(.critical) i {
        color: #F39C12
    }

    .alert-content {
        flex: 1
    }

    .alert-content h4 {
        font-weight: 700;
        margin-bottom: 0.25rem;
        font-size: 0.95rem
    }

    .alert-content p {
        font-size: 0.875rem;
        color: #7F8C8D
    }

    .alert-actions {
        display: flex;
        gap: 0.5rem
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

    .product-cell {
        display: flex;
        align-items: center;
        gap: 1rem
    }

    .product-thumb {
        width: 50px;
        height: 50px;
        border-radius: 10px;
        background: #ECF0F1;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #BDC3C7;
        font-size: 1.5rem
    }

    .product-info h4 {
        font-size: 0.95rem;
        font-weight: 600;
        margin-bottom: 0.25rem
    }

    .product-info small {
        color: #BDC3C7;
        font-size: 0.8rem
    }

    .stock-indicator {
        display: flex;
        align-items: center;
        gap: 0.75rem
    }

    .stock-bar {
        width: 100px;
        height: 8px;
        background: #ECF0F1;
        border-radius: 10px;
        overflow: hidden
    }

    .stock-fill {
        height: 100%;
        border-radius: 10px;
        transition: 0.3s
    }

    .stock-fill.high {
        background: #27AE60
    }

    .stock-fill.medium {
        background: #F39C12
    }

    .stock-fill.low {
        background: #C0392B
    }

    .stock-value {
        font-weight: 700;
        font-size: 1rem
    }

    .stock-value.high {
        color: #27AE60
    }

    .stock-value.medium {
        color: #F39C12
    }

    .stock-value.low {
        color: #C0392B
    }

    .badge-category {
        padding: 0.35rem 0.75rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 700
    }

    .badge-blue {
        background: rgba(46, 134, 222, 0.1);
        color: #2E86DE
    }

    .badge-purple {
        background: rgba(155, 89, 182, 0.1);
        color: #9B59B6
    }

    .badge-orange {
        background: rgba(255, 140, 66, 0.1);
        color: #FF8C42
    }

    .badge-green {
        background: rgba(39, 174, 96, 0.1);
        color: #27AE60
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

    .action-btn.add {
        background: rgba(39, 174, 96, 0.1);
        color: #27AE60
    }

    .action-btn.remove {
        background: rgba(192, 57, 43, 0.1);
        color: #C0392B
    }

    .action-btn.adjust {
        background: rgba(46, 134, 222, 0.1);
        color: #2E86DE
    }

    .action-btn:hover {
        transform: scale(1.1)
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

    .btn-success {
        background: #27AE60;
        color: #fff
    }

    .btn-success:hover {
        background: #229954
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
        max-width: 500px;
        width: 90%
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

    .form-group {
        margin-bottom: 1.5rem
    }

    .form-label {
        font-weight: 600;
        margin-bottom: 0.5rem;
        display: block;
        font-size: 0.9rem
    }

    .form-input,
    .form-select {
        width: 100%;
        padding: 0.875rem 1rem;
        border: 2px solid #ECF0F1;
        border-radius: 10px;
        font-family: 'Poppins', sans-serif;
        outline: none;
        transition: 0.3s
    }

    .form-input:focus,
    .form-select:focus {
        border-color: #2E86DE;
        box-shadow: 0 0 0 4px rgba(46, 134, 222, 0.1)
    }

    .form-select {
        cursor: pointer;
        background: #fff
    }

    .modal-footer {
        display: flex;
        gap: 1rem;
        justify-content: flex-end;
        margin-top: 2rem
    }

    .btn-secondary {
        background: #ECF0F1;
        color: #2C3E50
    }

    .btn-secondary:hover {
        background: #BDC3C7
    }

    @media(max-width:768px) {
        .sidebar {
            transform: translateX(-100%)
        }

        .main {
            margin-left: 0
        }

        .filters {
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
                <div class="menu-title">Menu</div>
                <a href="index.php" class="menu-item"><i class="fas fa-th-large"></i>Dashboard</a>
                <a href="produtos.php" class="menu-item"><i class="fas fa-box"></i>Produtos<span
                        class="badge">507</span></a>
                <a href="categorias.php" class="menu-item"><i class="fas fa-tags"></i>Categorias</a>
                <a href="pedidos.php" class="menu-item"><i class="fas fa-shopping-cart"></i>Pedidos<span
                        class="badge">12</span></a>
                <a href="estoque.php" class="menu-item active"><i class="fas fa-warehouse"></i>Estoque</a>
                <a href="vendas.php" class="menu-item"><i class="fas fa-chart-line"></i>Vendas</a>
                <a href="../logout.php" class="menu-item"><i class="fas fa-sign-out-alt"></i>Sair</a>
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
                <h1>Gerenciar Estoque</h1>
                <div class="breadcrumb"><a href="index.php"><i class="fas fa-home"></i>
                        Dashboard</a><span>/</span><span>Estoque</span></div>
            </div>
            <button class="btn btn-success" onclick="openMovementModal()"><i class="fas fa-exchange-alt"></i>Nova
                Movimentação</button>
        </div>

        <div class="content">

            <!-- STATS -->
            <div class="stats">
                <div class="stat-card">
                    <div>
                        <h4>Valor Total em Estoque</h4>
                        <div class="value">R$ 1.2M</div>
                    </div>
                    <div class="stat-icon icon-blue"><i class="fas fa-dollar-sign"></i></div>
                </div>
                <div class="stat-card">
                    <div>
                        <h4>Produtos em Estoque</h4>
                        <div class="value">495</div>
                    </div>
                    <div class="stat-icon icon-green"><i class="fas fa-check-circle"></i></div>
                </div>
                <div class="stat-card">
                    <div>
                        <h4>Estoque Baixo</h4>
                        <div class="value">12</div>
                    </div>
                    <div class="stat-icon icon-orange"><i class="fas fa-exclamation-triangle"></i></div>
                </div>
                <div class="stat-card">
                    <div>
                        <h4>Sem Estoque</h4>
                        <div class="value">3</div>
                    </div>
                    <div class="stat-icon icon-red"><i class="fas fa-times-circle"></i></div>
                </div>
            </div>

            <!-- ALERTAS -->
            <div class="alerts">
                <h3 style="margin-bottom:1rem;font-size:1.25rem;font-weight:700"><i class="fas fa-bell"></i> Alertas de
                    Estoque</h3>

                <div class="alert-item critical">
                    <i class="fas fa-exclamation-triangle"></i>
                    <div class="alert-content">
                        <h4>3 Produtos SEM ESTOQUE!</h4>
                        <p>Arame Galvanizado, Parafuso Sextavado 10mm, Vedante de Silicone</p>
                    </div>
                    <div class="alert-actions">
                        <button class="btn btn-primary" onclick="alert('Redirecionando para reposição...')">Repor
                            Agora</button>
                    </div>
                </div>

                <div class="alert-item">
                    <i class="fas fa-exclamation-circle"></i>
                    <div class="alert-content">
                        <h4>12 Produtos com Estoque Baixo</h4>
                        <p>Cimento CP-II (12 un), Tinta Branca (8 un), Argamassa AC-II (15 sacos)...</p>
                    </div>
                    <div class="alert-actions">
                        <button class="btn btn-secondary" onclick="filterLowStock()">Ver Todos</button>
                    </div>
                </div>
            </div>

            <!-- FILTERS -->
            <div class="filters">
                <div class="search-box"><i class="fas fa-search"></i><input type="text" placeholder="Buscar produtos..."
                        id="searchInput"></div>
                <select class="filter-select" id="categoryFilter">
                    <option value="">Todas Categorias</option>
                    <option value="cimento">Cimento & Argamassa</option>
                    <option value="tintas">Tintas & Vernizes</option>
                    <option value="ferramentas">Ferramentas</option>
                    <option value="eletrica">Elétrica</option>
                    <option value="hidraulica">Hidráulica</option>
                </select>
                <select class="filter-select" id="stockFilter" onchange="filterStock(this.value)">
                    <option value="all">Todos Estoques</option>
                    <option value="high">Em Estoque (OK)</option>
                    <option value="low">Estoque Baixo</option>
                    <option value="out">Sem Estoque</option>
                </select>
            </div>

            <!-- TABLE -->
            <div class="table-container">
                <div class="table-header">
                    <h2><i class="fas fa-boxes"></i> Controle de Estoque</h2>
                    <div style="color:#BDC3C7;font-size:0.875rem">Mostrando <strong>507</strong> produtos</div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>SKU</th>
                            <th>Categoria</th>
                            <th>Estoque Atual</th>
                            <th>Estoque Mínimo</th>
                            <th>Status</th>
                            <th style="width:140px">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-stock="low">
                            <td>
                                <div class="product-cell">
                                    <div class="product-thumb"><i class="fas fa-cube"></i></div>
                                    <div class="product-info">
                                        <h4>Cimento CP-II 50kg Votoran</h4><small>Saco de 50kg</small>
                                    </div>
                                </div>
                            </td>
                            <td>CIM-VOT-50</td>
                            <td><span class="badge-category badge-blue">Cimento</span></td>
                            <td>
                                <div class="stock-indicator">
                                    <div class="stock-bar">
                                        <div class="stock-fill low" style="width:24%"></div>
                                    </div>
                                    <span class="stock-value low">12 un</span>
                                </div>
                            </td>
                            <td>50 un</td>
                            <td><span class="badge-category badge-orange"
                                    style="background:rgba(192,57,43,0.1);color:#C0392B">⚠ BAIXO</span></td>
                            <td>
                                <div class="action-btns">
                                    <button class="action-btn add" onclick="openAddStock('Cimento CP-II')"
                                        title="Adicionar"><i class="fas fa-plus"></i></button>
                                    <button class="action-btn remove" onclick="openRemoveStock('Cimento CP-II')"
                                        title="Remover"><i class="fas fa-minus"></i></button>
                                    <button class="action-btn adjust" onclick="openAdjustStock('Cimento CP-II')"
                                        title="Ajustar"><i class="fas fa-cog"></i></button>
                                </div>
                            </td>
                        </tr>

                        <tr data-stock="high">
                            <td>
                                <div class="product-cell">
                                    <div class="product-thumb"><i class="fas fa-paint-roller"></i></div>
                                    <div class="product-info">
                                        <h4>Tinta Látex Premium 18L Coral</h4><small>Lata 18 litros</small>
                                    </div>
                                </div>
                            </td>
                            <td>TIN-COR-18L</td>
                            <td><span class="badge-category badge-purple">Tintas</span></td>
                            <td>
                                <div class="stock-indicator">
                                    <div class="stock-bar">
                                        <div class="stock-fill high" style="width:90%"></div>
                                    </div>
                                    <span class="stock-value high">45 un</span>
                                </div>
                            </td>
                            <td>15 un</td>
                            <td><span class="badge-category badge-green">✓ OK</span></td>
                            <td>
                                <div class="action-btns">
                                    <button class="action-btn add" onclick="openAddStock('Tinta Látex')"
                                        title="Adicionar"><i class="fas fa-plus"></i></button>
                                    <button class="action-btn remove" onclick="openRemoveStock('Tinta Látex')"
                                        title="Remover"><i class="fas fa-minus"></i></button>
                                    <button class="action-btn adjust" onclick="openAdjustStock('Tinta Látex')"
                                        title="Ajustar"><i class="fas fa-cog"></i></button>
                                </div>
                            </td>
                        </tr>

                        <tr data-stock="high">
                            <td>
                                <div class="product-cell">
                                    <div class="product-thumb"><i class="fas fa-toolbox"></i></div>
                                    <div class="product-info">
                                        <h4>Kit Ferramentas 100 Peças Tramontina</h4><small>Kit completo</small>
                                    </div>
                                </div>
                            </td>
                            <td>FER-TRA-100</td>
                            <td><span class="badge-category badge-orange">Ferramentas</span></td>
                            <td>
                                <div class="stock-indicator">
                                    <div class="stock-bar">
                                        <div class="stock-fill high" style="width:76%"></div>
                                    </div>
                                    <span class="stock-value high">23 un</span>
                                </div>
                            </td>
                            <td>10 un</td>
                            <td><span class="badge-category badge-green">✓ OK</span></td>
                            <td>
                                <div class="action-btns">
                                    <button class="action-btn add" onclick="openAddStock('Kit Ferramentas')"
                                        title="Adicionar"><i class="fas fa-plus"></i></button>
                                    <button class="action-btn remove" onclick="openRemoveStock('Kit Ferramentas')"
                                        title="Remover"><i class="fas fa-minus"></i></button>
                                    <button class="action-btn adjust" onclick="openAdjustStock('Kit Ferramentas')"
                                        title="Ajustar"><i class="fas fa-cog"></i></button>
                                </div>
                            </td>
                        </tr>

                        <tr data-stock="out">
                            <td>
                                <div class="product-cell">
                                    <div class="product-thumb"><i class="fas fa-circle"></i></div>
                                    <div class="product-info">
                                        <h4>Arame Galvanizado 12mm - Rolo 1kg</h4><small>Rolo 1kg</small>
                                    </div>
                                </div>
                            </td>
                            <td>ARF-GAL-12</td>
                            <td><span class="badge-category badge-orange">Ferramentas</span></td>
                            <td>
                                <div class="stock-indicator">
                                    <div class="stock-bar">
                                        <div class="stock-fill low" style="width:0%"></div>
                                    </div>
                                    <span class="stock-value low">0 un</span>
                                </div>
                            </td>
                            <td>25 un</td>
                            <td><span class="badge-category badge-orange"
                                    style="background:rgba(192,57,43,0.15);color:#C0392B;font-weight:800">✕ SEM
                                    ESTOQUE</span></td>
                            <td>
                                <div class="action-btns">
                                    <button class="action-btn add" onclick="openAddStock('Arame Galvanizado')"
                                        title="Adicionar"><i class="fas fa-plus"></i></button>
                                    <button class="action-btn remove" onclick="openRemoveStock('Arame Galvanizado')"
                                        title="Remover" disabled style="opacity:0.3;cursor:not-allowed"><i
                                            class="fas fa-minus"></i></button>
                                    <button class="action-btn adjust" onclick="openAdjustStock('Arame Galvanizado')"
                                        title="Ajustar"><i class="fas fa-cog"></i></button>
                                </div>
                            </td>
                        </tr>

                        <tr data-stock="medium">
                            <td>
                                <div class="product-cell">
                                    <div class="product-thumb"><i class="fas fa-lightbulb"></i></div>
                                    <div class="product-info">
                                        <h4>Lâmpada LED 12W Bivolt Kit 10un</h4><small>Kit com 10 unidades</small>
                                    </div>
                                </div>
                            </td>
                            <td>ELE-LED-12W</td>
                            <td><span class="badge-category badge-blue">Elétrica</span></td>
                            <td>
                                <div class="stock-indicator">
                                    <div class="stock-bar">
                                        <div class="stock-fill medium" style="width:55%"></div>
                                    </div>
                                    <span class="stock-value medium">34 un</span>
                                </div>
                            </td>
                            <td>20 un</td>
                            <td><span class="badge-category badge-green">✓ OK</span></td>
                            <td>
                                <div class="action-btns">
                                    <button class="action-btn add" onclick="openAddStock('Lâmpada LED')"
                                        title="Adicionar"><i class="fas fa-plus"></i></button>
                                    <button class="action-btn remove" onclick="openRemoveStock('Lâmpada LED')"
                                        title="Remover"><i class="fas fa-minus"></i></button>
                                    <button class="action-btn adjust" onclick="openAdjustStock('Lâmpada LED')"
                                        title="Ajustar"><i class="fas fa-cog"></i></button>
                                </div>
                            </td>
                        </tr>

                        <tr data-stock="low">
                            <td>
                                <div class="product-cell">
                                    <div class="product-thumb"><i class="fas fa-fill-drip"></i></div>
                                    <div class="product-info">
                                        <h4>Argamassa AC-II Quartzolit 20kg</h4><small>Saco de 20kg</small>
                                    </div>
                                </div>
                            </td>
                            <td>ARG-QUA-20</td>
                            <td><span class="badge-category badge-blue">Cimento</span></td>
                            <td>
                                <div class="stock-indicator">
                                    <div class="stock-bar">
                                        <div class="stock-fill low" style="width:30%"></div>
                                    </div>
                                    <span class="stock-value low">15 un</span>
                                </div>
                            </td>
                            <td>40 un</td>
                            <td><span class="badge-category badge-orange"
                                    style="background:rgba(192,57,43,0.1);color:#C0392B">⚠ BAIXO</span></td>
                            <td>
                                <div class="action-btns">
                                    <button class="action-btn add" onclick="openAddStock('Argamassa')"
                                        title="Adicionar"><i class="fas fa-plus"></i></button>
                                    <button class="action-btn remove" onclick="openRemoveStock('Argamassa')"
                                        title="Remover"><i class="fas fa-minus"></i></button>
                                    <button class="action-btn adjust" onclick="openAdjustStock('Argamassa')"
                                        title="Ajustar"><i class="fas fa-cog"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </main>

    <!-- MODAL MOVIMENTAÇÃO -->
    <div class="modal" id="movementModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3><i class="fas fa-exchange-alt"></i> <span id="modalTitle">Adicionar ao Estoque</span></h3>
                <button class="modal-close" onclick="closeModal()">×</button>
            </div>

            <form onsubmit="saveMovement(event)">
                <div class="form-group">
                    <label class="form-label">Produto</label>
                    <input type="text" class="form-input" id="productName" value="Cimento CP-II 50kg Votoran" readonly
                        style="background:#F8F9FA">
                </div>

                <div class="form-group">
                    <label class="form-label">Tipo de Movimentação</label>
                    <select class="form-select" id="movementType" required>
                        <option value="entrada">Entrada (Compra/Recebimento)</option>
                        <option value="saida">Saída (Venda/Uso)</option>
                        <option value="ajuste">Ajuste de Inventário</option>
                        <option value="perda">Perda/Avaria</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Quantidade</label>
                    <input type="number" class="form-input" min="1" placeholder="Ex: 50" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Motivo/Observação</label>
                    <input type="text" class="form-input" placeholder="Ex: Reposição de estoque, Pedido #123...">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="closeModal()">Cancelar</button>
                    <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Confirmar</button>
                </div>
            </form>
        </div>
    </div>

    <script>
    // Search
    document.getElementById('searchInput').addEventListener('input', function(e) {
        const term = e.target.value.toLowerCase();
        document.querySelectorAll('tbody tr').forEach(row => {
            row.style.display = row.textContent.toLowerCase().includes(term) ? '' : 'none';
        });
    });

    // Filter Stock
    function filterStock(type) {
        const rows = document.querySelectorAll('tbody tr');
        rows.forEach(row => {
            if (type === 'all') {
                row.style.display = '';
            } else {
                row.style.display = row.dataset.stock === type ? '' : 'none';
            }
        });
    }

    function filterLowStock() {
        document.getElementById('stockFilter').value = 'low';
        filterStock('low');
    }

    // Modals
    let currentProduct = '';

    function openMovementModal() {
        document.getElementById('modalTitle').textContent = 'Nova Movimentação';
        document.getElementById('productName').value = '';
        document.getElementById('movementModal').classList.add('active');
    }

    function openAddStock(product) {
        currentProduct = product;
        document.getElementById('modalTitle').textContent = 'Adicionar ao Estoque';
        document.getElementById('productName').value = product;
        document.getElementById('movementType').value = 'entrada';
        document.getElementById('movementModal').classList.add('active');
    }

    function openRemoveStock(product) {
        currentProduct = product;
        document.getElementById('modalTitle').textContent = 'Remover do Estoque';
        document.getElementById('productName').value = product;
        document.getElementById('movementType').value = 'saida';
        document.getElementById('movementModal').classList.add('active');
    }

    function openAdjustStock(product) {
        currentProduct = product;
        document.getElementById('modalTitle').textContent = 'Ajustar Estoque';
        document.getElementById('productName').value = product;
        document.getElementById('movementType').value = 'ajuste';
        document.getElementById('movementModal').classList.add('active');
    }

    function closeModal() {
        document.getElementById('movementModal').classList.remove('active');
    }

    function saveMovement(e) {
        e.preventDefault();
        alert('Movimentação registrada com sucesso!');
        closeModal();
    }

    document.getElementById('movementModal').addEventListener('click', function(e) {
        if (e.target === this) closeModal();
    });
    </script>
</body>

</html>