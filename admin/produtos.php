<?php
require_once '../inc/auth.php';
protegerPagina(true);

$tituloHeader = 'Produtos'; // Muda conforme a página
$breadcrumb = 'Produtos';

require_once '../inc/header.php';
?>

<!-- SEU HTML AQUI -->

<?php require_once '../inc/footer.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - ConstruMax Admin</title>

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

    .icon-red {
        background: rgba(192, 57, 43, 0.1);
        color: #C0392B
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
        outline: none
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
        justify-content: space-between
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
        gap: 1rem;
        align-items: center
    }

    .product-thumb {
        width: 60px;
        height: 60px;
        border-radius: 10px;
        background: #ECF0F1;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #BDC3C7;
        font-size: 1.75rem
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

    .badge-info {
        background: rgba(46, 134, 222, 0.1);
        color: #2E86DE;
        padding: 0.35rem 0.75rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 700
    }

    .badge-purple {
        background: rgba(155, 89, 182, 0.1);
        color: #9B59B6;
        padding: 0.35rem 0.75rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 700
    }

    .badge-warning {
        background: rgba(255, 140, 66, 0.1);
        color: #FF8C42;
        padding: 0.35rem 0.75rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 700
    }

    .badge-success {
        background: rgba(39, 174, 96, 0.1);
        color: #27AE60;
        padding: 0.35rem 0.75rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 700
    }

    .stock-low {
        color: #C0392B;
        font-weight: 700
    }

    .stock-ok {
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

    .action-btn.view {
        background: rgba(46, 134, 222, 0.1);
        color: #2E86DE
    }

    .action-btn.edit {
        background: rgba(255, 140, 66, 0.1);
        color: #FF8C42
    }

    .action-btn.delete {
        background: rgba(192, 57, 43, 0.1);
        color: #C0392B
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
        transition: 0.3s
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
        text-decoration: none;
        font-family: 'Poppins', sans-serif
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
        margin-bottom: 1.5rem
    }

    .modal-header h3 {
        font-size: 1.5rem;
        font-weight: 700
    }

    .modal-body {
        margin-bottom: 2rem
    }

    .modal-footer {
        display: flex;
        gap: 1rem;
        justify-content: flex-end
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
                <a href="produtos.php" class="menu-item active"><i class="fas fa-box"></i>Produtos<span
                        class="badge">507</span></a>
                <a href="categorias.php" class="menu-item"><i class="fas fa-tags"></i>Categorias</a>
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
                <h1>Produtos</h1>
                <div class="breadcrumb"><a href="index.php"><i class="fas fa-home"></i>
                        Dashboard</a><span>/</span><span>Produtos</span></div>
            </div>
            <a href="produto_novo.php" class="btn btn-primary"><i class="fas fa-plus"></i>Novo Produto</a>
        </div>

        <div class="content">
            <div class="stats">
                <div class="stat-card">
                    <div>
                        <h4>Total de Produtos</h4>
                        <div class="value">507</div>
                    </div>
                    <div class="stat-icon icon-blue"><i class="fas fa-box"></i></div>
                </div>
                <div class="stat-card">
                    <div>
                        <h4>Produtos Ativos</h4>
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

            <div class="filters">
                <div class="search-box"><i class="fas fa-search"></i><input type="text" placeholder="Buscar produtos..."
                        id="searchInput"></div>
                <select class="filter-select">
                    <option>Todas Categorias</option>
                    <option>Cimento</option>
                    <option>Tintas</option>
                    <option>Ferramentas</option>
                </select>
                <select class="filter-select">
                    <option>Todos Estoques</option>
                    <option>Em Estoque</option>
                    <option>Estoque Baixo</option>
                    <option>Sem Estoque</option>
                </select>
                <select class="filter-select">
                    <option>Todos Status</option>
                    <option>Ativos</option>
                    <option>Inativos</option>
                </select>
            </div>

            <div class="table-container">
                <div class="table-header">
                    <h2>Lista de Produtos</h2>
                    <div style="color:#BDC3C7;font-size:0.875rem">Mostrando <strong>1-20</strong> de
                        <strong>507</strong> produtos
                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th style="width:50px"><input type="checkbox" style="width:18px;height:18px"></th>
                            <th>Produto</th>
                            <th>SKU</th>
                            <th>Categoria</th>
                            <th>Preço</th>
                            <th>Estoque</th>
                            <th>Status</th>
                            <th style="width:130px">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" style="width:18px;height:18px"></td>
                            <td>
                                <div class="product-cell">
                                    <div class="product-thumb"><i class="fas fa-cube"></i></div>
                                    <div class="product-info">
                                        <h4>Cimento CP-II 50kg Votoran</h4><small>Alta resistência</small>
                                    </div>
                                </div>
                            </td>
                            <td>CIM-VOT-50</td>
                            <td><span class="badge-info">Cimento</span></td>
                            <td><strong>R$ 32,90</strong></td>
                            <td><span class="stock-low">12 un</span></td>
                            <td><span class="badge-success">Ativo</span></td>
                            <td>
                                <div class="action-btns"><button class="action-btn view"><i
                                            class="fas fa-eye"></i></button><button class="action-btn edit"><i
                                            class="fas fa-edit"></i></button><button class="action-btn delete"
                                        onclick="confirmDelete('Cimento')"><i class="fas fa-trash"></i></button></div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" style="width:18px;height:18px"></td>
                            <td>
                                <div class="product-cell">
                                    <div class="product-thumb"><i class="fas fa-paint-roller"></i></div>
                                    <div class="product-info">
                                        <h4>Tinta Látex Premium 18L Coral</h4><small>Alta cobertura</small>
                                    </div>
                                </div>
                            </td>
                            <td>TIN-COR-18L</td>
                            <td><span class="badge-purple">Tintas</span></td>
                            <td><strong>R$ 199,90</strong></td>
                            <td><span class="stock-ok">45 un</span></td>
                            <td><span class="badge-success">Ativo</span></td>
                            <td>
                                <div class="action-btns"><button class="action-btn view"><i
                                            class="fas fa-eye"></i></button><button class="action-btn edit"><i
                                            class="fas fa-edit"></i></button><button class="action-btn delete"
                                        onclick="confirmDelete('Tinta')"><i class="fas fa-trash"></i></button></div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" style="width:18px;height:18px"></td>
                            <td>
                                <div class="product-cell">
                                    <div class="product-thumb"><i class="fas fa-toolbox"></i></div>
                                    <div class="product-info">
                                        <h4>Kit Ferramentas 100 Peças</h4><small>Kit profissional</small>
                                    </div>
                                </div>
                            </td>
                            <td>FER-TRA-100</td>
                            <td><span class="badge-warning">Ferramentas</span></td>
                            <td><strong>R$ 389,90</strong></td>
                            <td><span class="stock-ok">23 un</span></td>
                            <td><span class="badge-success">Ativo</span></td>
                            <td>
                                <div class="action-btns"><button class="action-btn view"><i
                                            class="fas fa-eye"></i></button><button class="action-btn edit"><i
                                            class="fas fa-edit"></i></button><button class="action-btn delete"
                                        onclick="confirmDelete('Kit')"><i class="fas fa-trash"></i></button></div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" style="width:18px;height:18px"></td>
                            <td>
                                <div class="product-cell">
                                    <div class="product-thumb"><i class="fas fa-lightbulb"></i></div>
                                    <div class="product-info">
                                        <h4>Lâmpada LED 12W Kit 10un</h4><small>LED econômico</small>
                                    </div>
                                </div>
                            </td>
                            <td>ELE-LED-12W</td>
                            <td><span class="badge-info">Elétrica</span></td>
                            <td><strong>R$ 89,90</strong></td>
                            <td><span class="stock-ok">67 un</span></td>
                            <td><span class="badge-success">Ativo</span></td>
                            <td>
                                <div class="action-btns"><button class="action-btn view"><i
                                            class="fas fa-eye"></i></button><button class="action-btn edit"><i
                                            class="fas fa-edit"></i></button><button class="action-btn delete"
                                        onclick="confirmDelete('Lâmpada')"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="pagination">
                    <button class="page-btn"><i class="fas fa-chevron-left"></i></button>
                    <button class="page-btn active">1</button>
                    <button class="page-btn">2</button>
                    <button class="page-btn">3</button>
                    <button class="page-btn">4</button>
                    <button class="page-btn">5</button>
                    <button class="page-btn">...</button>
                    <button class="page-btn">26</button>
                    <button class="page-btn"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </main>

    <div class="modal" id="deleteModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3><i class="fas fa-exclamation-triangle" style="color:#C0392B"></i> Confirmar Exclusão</h3>
            </div>
            <div class="modal-body">
                <p>Tem certeza que deseja excluir o produto <strong id="productName"></strong>?</p>
                <p style="color:#BDC3C7;font-size:0.875rem;margin-top:0.5rem">Esta ação não pode ser desfeita.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" onclick="closeModal()">Cancelar</button>
                <button class="btn btn-primary" style="background:#C0392B" onclick="deleteProduct()"><i
                        class="fas fa-trash"></i> Excluir</button>
            </div>
        </div>
    </div>

    <script>
    document.getElementById('searchInput').addEventListener('input', function(e) {
        const term = e.target.value.toLowerCase();
        document.querySelectorAll('tbody tr').forEach(row => {
            row.style.display = row.textContent.toLowerCase().includes(term) ? '' : 'none';
        });
    });

    let currentProduct = '';

    function confirmDelete(name) {
        currentProduct = name;
        document.getElementById('productName').textContent = name;
        document.getElementById('deleteModal').classList.add('active');
    }

    function closeModal() {
        document.getElementById('deleteModal').classList.remove('active')
    }

    function deleteProduct() {
        alert(`Produto "${currentProduct}" excluído!`);
        closeModal()
    }

    document.getElementById('deleteModal').addEventListener('click', function(e) {
        if (e.target === this) closeModal()
    });
    </script>
</body>

</html>