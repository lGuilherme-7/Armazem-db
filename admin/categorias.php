<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias - ConstruMax Admin</title>

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
        --light: #ECF0F1;
        --medium: #BDC3C7;
        --dark: #2C3E50;
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
        font-size: 0.7rem
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
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
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

    .icon-purple {
        background: rgba(155, 89, 182, 0.1);
        color: #9B59B6
    }

    .grid-2 {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 2rem
    }

    .card {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        overflow: hidden
    }

    .card-header {
        padding: 1.5rem 2rem;
        border-bottom: 2px solid #ECF0F1;
        display: flex;
        justify-content: space-between;
        align-items: center
    }

    .card-header h2 {
        font-size: 1.25rem;
        font-weight: 700
    }

    .card-body {
        padding: 2rem
    }

    .category-list {
        display: flex;
        flex-direction: column;
        gap: 1rem
    }

    .category-item {
        padding: 1.25rem;
        background: #ECF0F1;
        border-radius: 12px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: 0.3s
    }

    .category-item:hover {
        background: #DCE4E7;
        transform: translateX(5px)
    }

    .category-icon {
        width: 50px;
        height: 50px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin-right: 1rem
    }

    .category-info {
        flex: 1
    }

    .category-info h4 {
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 0.25rem
    }

    .category-info small {
        color: #BDC3C7;
        font-size: 0.875rem
    }

    .category-stats {
        display: flex;
        gap: 2rem;
        margin-right: 1rem
    }

    .category-stat {
        text-align: center
    }

    .category-stat .label {
        font-size: 0.75rem;
        color: #BDC3C7;
        margin-bottom: 0.25rem
    }

    .category-stat .value {
        font-size: 1.125rem;
        font-weight: 700
    }

    .category-actions {
        display: flex;
        gap: 0.5rem
    }

    .btn-icon {
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

    .btn-icon.edit {
        background: rgba(255, 140, 66, 0.1);
        color: #FF8C42
    }

    .btn-icon.delete {
        background: rgba(192, 57, 43, 0.1);
        color: #C0392B
    }

    .btn-icon:hover {
        transform: scale(1.1)
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

    .icon-picker {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 0.75rem;
        margin-top: 0.5rem
    }

    .icon-option {
        width: 45px;
        height: 45px;
        border-radius: 8px;
        border: 2px solid #ECF0F1;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: 0.3s;
        font-size: 1.25rem
    }

    .icon-option:hover {
        border-color: #2E86DE;
        background: rgba(46, 134, 222, 0.05)
    }

    .icon-option.selected {
        border-color: #2E86DE;
        background: rgba(46, 134, 222, 0.1)
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
        text-decoration: none;
        font-family: 'Poppins', sans-serif;
        transition: 0.3s
    }

    .btn-primary {
        background: linear-gradient(135deg, #2E86DE, #FF8C42);
        color: #fff
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12)
    }

    .btn-secondary {
        background: #ECF0F1;
        color: #2C3E50
    }

    .btn-block {
        width: 100%;
        justify-content: center
    }

    .alert {
        padding: 1rem 1.5rem;
        border-radius: 10px;
        margin-bottom: 1.5rem;
        display: flex;
        gap: 1rem;
        align-items: start
    }

    .alert-success {
        background: rgba(39, 174, 96, 0.1);
        color: #27AE60;
        border: 2px solid #27AE60
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
        width: 90%;
        max-height: 90vh;
        overflow-y: auto
    }

    .modal-header {
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid #ECF0F1
    }

    .modal-header h3 {
        font-size: 1.5rem;
        font-weight: 700
    }

    .modal-footer {
        display: flex;
        gap: 1rem;
        justify-content: flex-end;
        margin-top: 2rem
    }

    @media(max-width:1024px) {
        .grid-2 {
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
                <a href="categorias.php" class="menu-item active"><i class="fas fa-tags"></i>Categorias</a>
                <a href="pedidos.php" class="menu-item"><i class="fas fa-shopping-cart"></i>Pedidos<span
                        class="badge">12</span></a>
                <a href="estoque.php" class="menu-item"><i class="fas fa-warehouse"></i>Estoque</a>
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
                <h1>Categorias</h1>
                <div class="breadcrumb"><a href="index.php"><i class="fas fa-home"></i>
                        Dashboard</a><span>/</span><span>Categorias</span></div>
            </div>
            <button class="btn btn-primary" onclick="openAddModal()"><i class="fas fa-plus"></i>Nova Categoria</button>
        </div>

        <div class="content">

            <!-- STATS -->
            <div class="stats">
                <div class="stat-card">
                    <div>
                        <h4>Total de Categorias</h4>
                        <div class="value">6</div>
                    </div>
                    <div class="stat-icon icon-blue"><i class="fas fa-tags"></i></div>
                </div>
                <div class="stat-card">
                    <div>
                        <h4>Categorias Ativas</h4>
                        <div class="value">6</div>
                    </div>
                    <div class="stat-icon icon-green"><i class="fas fa-check-circle"></i></div>
                </div>
                <div class="stat-card">
                    <div>
                        <h4>Total de Produtos</h4>
                        <div class="value">507</div>
                    </div>
                    <div class="stat-icon icon-orange"><i class="fas fa-box"></i></div>
                </div>
            </div>

            <!-- GRID -->
            <div class="grid-2">

                <!-- LISTA DE CATEGORIAS -->
                <div class="card">
                    <div class="card-header">
                        <h2><i class="fas fa-list"></i> Lista de Categorias</h2>
                    </div>
                    <div class="card-body">
                        <div class="category-list">

                            <div class="category-item">
                                <div class="category-icon" style="background:rgba(46,134,222,0.1);color:#2E86DE"><i
                                        class="fas fa-cube"></i></div>
                                <div class="category-info">
                                    <h4>Cimento & Argamassa</h4>
                                    <small>Cimentos, argamassas e rejuntes</small>
                                </div>
                                <div class="category-stats">
                                    <div class="category-stat">
                                        <div class="label">Produtos</div>
                                        <div class="value">45</div>
                                    </div>
                                </div>
                                <div class="category-actions">
                                    <button class="btn-icon edit" onclick="openEditModal('Cimento & Argamassa')"><i
                                            class="fas fa-edit"></i></button>
                                    <button class="btn-icon delete" onclick="confirmDelete('Cimento & Argamassa')"><i
                                            class="fas fa-trash"></i></button>
                                </div>
                            </div>

                            <div class="category-item">
                                <div class="category-icon" style="background:rgba(155,89,182,0.1);color:#9B59B6"><i
                                        class="fas fa-paint-roller"></i></div>
                                <div class="category-info">
                                    <h4>Tintas & Vernizes</h4>
                                    <small>Tintas, vernizes e complementos</small>
                                </div>
                                <div class="category-stats">
                                    <div class="category-stat">
                                        <div class="label">Produtos</div>
                                        <div class="value">89</div>
                                    </div>
                                </div>
                                <div class="category-actions">
                                    <button class="btn-icon edit" onclick="openEditModal('Tintas & Vernizes')"><i
                                            class="fas fa-edit"></i></button>
                                    <button class="btn-icon delete" onclick="confirmDelete('Tintas & Vernizes')"><i
                                            class="fas fa-trash"></i></button>
                                </div>
                            </div>

                            <div class="category-item">
                                <div class="category-icon" style="background:rgba(255,140,66,0.1);color:#FF8C42"><i
                                        class="fas fa-hammer"></i></div>
                                <div class="category-info">
                                    <h4>Ferramentas</h4>
                                    <small>Ferramentas manuais e elétricas</small>
                                </div>
                                <div class="category-stats">
                                    <div class="category-stat">
                                        <div class="label">Produtos</div>
                                        <div class="value">132</div>
                                    </div>
                                </div>
                                <div class="category-actions">
                                    <button class="btn-icon edit" onclick="openEditModal('Ferramentas')"><i
                                            class="fas fa-edit"></i></button>
                                    <button class="btn-icon delete" onclick="confirmDelete('Ferramentas')"><i
                                            class="fas fa-trash"></i></button>
                                </div>
                            </div>

                            <div class="category-item">
                                <div class="category-icon" style="background:rgba(243,156,18,0.1);color:#F39C12"><i
                                        class="fas fa-bolt"></i></div>
                                <div class="category-info">
                                    <h4>Elétrica</h4>
                                    <small>Materiais e componentes elétricos</small>
                                </div>
                                <div class="category-stats">
                                    <div class="category-stat">
                                        <div class="label">Produtos</div>
                                        <div class="value">76</div>
                                    </div>
                                </div>
                                <div class="category-actions">
                                    <button class="btn-icon edit" onclick="openEditModal('Elétrica')"><i
                                            class="fas fa-edit"></i></button>
                                    <button class="btn-icon delete" onclick="confirmDelete('Elétrica')"><i
                                            class="fas fa-trash"></i></button>
                                </div>
                            </div>

                            <div class="category-item">
                                <div class="category-icon" style="background:rgba(46,134,222,0.1);color:#2E86DE"><i
                                        class="fas fa-faucet"></i></div>
                                <div class="category-info">
                                    <h4>Hidráulica</h4>
                                    <small>Tubos, conexões e acessórios</small>
                                </div>
                                <div class="category-stats">
                                    <div class="category-stat">
                                        <div class="label">Produtos</div>
                                        <div class="value">98</div>
                                    </div>
                                </div>
                                <div class="category-actions">
                                    <button class="btn-icon edit" onclick="openEditModal('Hidráulica')"><i
                                            class="fas fa-edit"></i></button>
                                    <button class="btn-icon delete" onclick="confirmDelete('Hidráulica')"><i
                                            class="fas fa-trash"></i></button>
                                </div>
                            </div>

                            <div class="category-item">
                                <div class="category-icon" style="background:rgba(39,174,96,0.1);color:#27AE60"><i
                                        class="fas fa-border-all"></i></div>
                                <div class="category-info">
                                    <h4>Pisos & Revestimentos</h4>
                                    <small>Pisos, azulejos e revestimentos</small>
                                </div>
                                <div class="category-stats">
                                    <div class="category-stat">
                                        <div class="label">Produtos</div>
                                        <div class="value">67</div>
                                    </div>
                                </div>
                                <div class="category-actions">
                                    <button class="btn-icon edit" onclick="openEditModal('Pisos & Revestimentos')"><i
                                            class="fas fa-edit"></i></button>
                                    <button class="btn-icon delete" onclick="confirmDelete('Pisos & Revestimentos')"><i
                                            class="fas fa-trash"></i></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- INFO -->
                <div>
                    <div class="card" style="margin-bottom:1.5rem">
                        <div class="card-header">
                            <h2><i class="fas fa-info-circle"></i> Informações</h2>
                        </div>
                        <div class="card-body">
                            <p style="color:#7F8C8D;font-size:0.9rem;line-height:1.6">As categorias ajudam a organizar
                                seus produtos e facilitam a navegação dos clientes na loja.</p>
                            <hr style="margin:1.5rem 0;border:none;border-top:1px solid #ECF0F1">
                            <div style="display:flex;flex-direction:column;gap:1rem">
                                <div style="display:flex;gap:1rem;align-items:start">
                                    <div
                                        style="width:40px;height:40px;background:rgba(46,134,222,0.1);border-radius:10px;display:flex;align-items:center;justify-content:center;color:#2E86DE">
                                        <i class="fas fa-lightbulb"></i></div>
                                    <div>
                                        <h4 style="font-size:0.95rem;margin-bottom:0.25rem">Dica</h4>
                                        <p style="font-size:0.85rem;color:#7F8C8D">Use ícones diferentes para cada
                                            categoria para melhor visualização</p>
                                    </div>
                                </div>
                                <div style="display:flex;gap:1rem;align-items:start">
                                    <div
                                        style="width:40px;height:40px;background:rgba(39,174,96,0.1);border-radius:10px;display:flex;align-items:center;justify-content:center;color:#27AE60">
                                        <i class="fas fa-check"></i></div>
                                    <div>
                                        <h4 style="font-size:0.95rem;margin-bottom:0.25rem">Boas Práticas</h4>
                                        <p style="font-size:0.85rem;color:#7F8C8D">Mantenha nomes claros e objetivos
                                            para facilitar a busca</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2><i class="fas fa-chart-pie"></i> Distribuição</h2>
                        </div>
                        <div class="card-body">
                            <canvas id="categoryChart" height="200"></canvas>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>

    <!-- MODAL ADD/EDIT -->
    <div class="modal" id="categoryModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modalTitle"><i class="fas fa-plus-circle"></i> Nova Categoria</h3>
            </div>
            <form onsubmit="saveCategory(event)">
                <div class="form-group">
                    <label class="form-label">Nome da Categoria</label>
                    <input type="text" class="form-input" placeholder="Ex: Cimento & Argamassa" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Descrição</label>
                    <input type="text" class="form-input" placeholder="Breve descrição da categoria">
                </div>
                <div class="form-group">
                    <label class="form-label">Ícone</label>
                    <div class="icon-picker">
                        <div class="icon-option selected" data-icon="cube"><i class="fas fa-cube"></i></div>
                        <div class="icon-option" data-icon="paint-roller"><i class="fas fa-paint-roller"></i></div>
                        <div class="icon-option" data-icon="hammer"><i class="fas fa-hammer"></i></div>
                        <div class="icon-option" data-icon="bolt"><i class="fas fa-bolt"></i></div>
                        <div class="icon-option" data-icon="faucet"><i class="fas fa-faucet"></i></div>
                        <div class="icon-option" data-icon="border-all"><i class="fas fa-border-all"></i></div>
                        <div class="icon-option" data-icon="toolbox"><i class="fas fa-toolbox"></i></div>
                        <div class="icon-option" data-icon="wrench"><i class="fas fa-wrench"></i></div>
                        <div class="icon-option" data-icon="lightbulb"><i class="fas fa-lightbulb"></i></div>
                        <div class="icon-option" data-icon="door-open"><i class="fas fa-door-open"></i></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Status</label>
                    <select class="form-select">
                        <option value="1">Ativo</option>
                        <option value="0">Inativo</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="closeModal()">Cancelar</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Salvar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- MODAL DELETE -->
    <div class="modal" id="deleteModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3><i class="fas fa-exclamation-triangle" style="color:#C0392B"></i> Confirmar Exclusão</h3>
            </div>
            <div style="margin-bottom:2rem">
                <p>Tem certeza que deseja excluir a categoria <strong id="categoryName"></strong>?</p>
                <p style="color:#BDC3C7;font-size:0.875rem;margin-top:0.5rem">Os produtos desta categoria não serão
                    excluídos.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" onclick="closeDeleteModal()">Cancelar</button>
                <button class="btn btn-primary" style="background:#C0392B" onclick="deleteCategory()"><i
                        class="fas fa-trash"></i>Excluir</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    // Icon Picker
    document.querySelectorAll('.icon-option').forEach(icon => {
        icon.addEventListener('click', function() {
            document.querySelectorAll('.icon-option').forEach(i => i.classList.remove('selected'));
            this.classList.add('selected');
        });
    });

    // Modals
    function openAddModal() {
        document.getElementById('modalTitle').innerHTML = '<i class="fas fa-plus-circle"></i> Nova Categoria';
        document.getElementById('categoryModal').classList.add('active');
    }

    function openEditModal(name) {
        document.getElementById('modalTitle').innerHTML = '<i class="fas fa-edit"></i> Editar Categoria';
        document.getElementById('categoryModal').classList.add('active');
    }

    function closeModal() {
        document.getElementById('categoryModal').classList.remove('active')
    }

    let currentCategory = '';

    function confirmDelete(name) {
        currentCategory = name;
        document.getElementById('categoryName').textContent = name;
        document.getElementById('deleteModal').classList.add('active');
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').classList.remove('active')
    }

    function deleteCategory() {
        alert(`Categoria "${currentCategory}" excluída!`);
        closeDeleteModal();
    }

    function saveCategory(e) {
        e.preventDefault();
        alert('Categoria salva com sucesso!');
        closeModal();
    }

    // Chart
    new Chart(document.getElementById('categoryChart'), {
        type: 'doughnut',
        data: {
            labels: ['Cimento', 'Tintas', 'Ferramentas', 'Elétrica', 'Hidráulica', 'Pisos'],
            datasets: [{
                data: [45, 89, 132, 76, 98, 67],
                backgroundColor: ['#2E86DE', '#9B59B6', '#FF8C42', '#F39C12', '#2E86DE', '#27AE60'],
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
                        padding: 10,
                        font: {
                            size: 11
                        }
                    }
                }
            },
            cutout: '65%'
        }
    });

    document.querySelectorAll('.modal').forEach(modal => {
        modal.addEventListener('click', function(e) {
            if (e.target === this) this.classList.remove('active')
        });
    });
    </script>
</body>

</html>