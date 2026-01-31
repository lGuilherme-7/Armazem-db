<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - ConstruMax | Materiais de Construção</title>
    <meta name="description" content="Encontre os melhores materiais de construção com preços imbatíveis">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
    /* ===========================
           VARIÁVEIS CSS
        =========================== */
    :root {
        --primary-blue: #2E86DE;
        --primary-orange: #FF8C42;
        --primary-red: #C0392B;
        --primary-graphite: #34495E;
        --primary-yellow: #F39C12;
        --primary-green: #27AE60;
        --white: #FFFFFF;
        --light-gray: #ECF0F1;
        --medium-gray: #BDC3C7;
        --dark-gray: #2C3E50;
        --black: #1A1A1A;
        --gradient-primary: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-orange) 100%);
        --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.08);
        --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.12);
        --shadow-lg: 0 8px 32px rgba(0, 0, 0, 0.16);
        --shadow-hover: 0 12px 40px rgba(46, 134, 222, 0.25);
        --font-primary: 'Poppins', sans-serif;
        --transition-fast: 0.2s ease;
        --transition-base: 0.3s ease;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: var(--font-primary);
        color: var(--dark-gray);
        background: var(--light-gray);
        line-height: 1.6;
    }

    /* ===========================
           HEADER
        =========================== */
    .header {
        background: var(--white);
        box-shadow: var(--shadow-sm);
        padding: 1.5rem 0;
        position: sticky;
        top: 0;
        z-index: 100;
    }

    .header-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 2rem;
    }

    .logo {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-size: 1.75rem;
        font-weight: 800;
        color: var(--primary-blue);
        text-decoration: none;
        flex-shrink: 0;
    }

    .logo i {
        font-size: 2rem;
        background: var(--gradient-primary);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .search-bar {
        flex: 1;
        max-width: 600px;
    }

    .search-form {
        display: flex;
        background: var(--light-gray);
        border-radius: 50px;
        overflow: hidden;
        border: 2px solid transparent;
        transition: var(--transition-base);
    }

    .search-form:focus-within {
        border-color: var(--primary-blue);
    }

    .search-input {
        flex: 1;
        padding: 1rem 1.5rem;
        border: none;
        background: transparent;
        font-family: var(--font-primary);
        font-size: 1rem;
        outline: none;
    }

    .search-btn {
        padding: 1rem 2rem;
        background: var(--gradient-primary);
        color: var(--white);
        border: none;
        font-weight: 600;
        cursor: pointer;
    }

    .header-actions {
        display: flex;
        gap: 1.5rem;
        align-items: center;
    }

    .header-btn {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--dark-gray);
        text-decoration: none;
        font-weight: 600;
        position: relative;
    }

    .header-btn:hover {
        color: var(--primary-blue);
    }

    .cart-badge {
        position: absolute;
        top: -8px;
        right: -10px;
        background: var(--primary-red);
        color: var(--white);
        border-radius: 50%;
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.7rem;
        font-weight: 700;
    }

    /* ===========================
           CONTAINER
        =========================== */
    .container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .breadcrumb {
        padding: 2rem 0 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.875rem;
        color: var(--medium-gray);
    }

    .breadcrumb a {
        color: var(--medium-gray);
        text-decoration: none;
    }

    .breadcrumb a:hover {
        color: var(--primary-blue);
    }

    /* ===========================
           PAGE HEADER
        =========================== */
    .page-header {
        padding: 2rem 0;
    }

    .page-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--dark-gray);
        margin-bottom: 0.5rem;
    }

    .page-subtitle {
        color: var(--medium-gray);
        font-size: 1.125rem;
    }

    /* ===========================
           PRODUCTS LAYOUT
        =========================== */
    .products-layout {
        display: grid;
        grid-template-columns: 280px 1fr;
        gap: 2rem;
        padding: 2rem 0 4rem;
    }

    /* ===========================
           SIDEBAR FILTERS
        =========================== */
    .filters-sidebar {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .filter-section {
        background: var(--white);
        border-radius: 15px;
        padding: 1.5rem;
        box-shadow: var(--shadow-sm);
    }

    .filter-title {
        font-size: 1.125rem;
        font-weight: 700;
        color: var(--dark-gray);
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .filter-title i {
        color: var(--primary-blue);
    }

    .filter-options {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .filter-option {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        cursor: pointer;
        padding: 0.5rem;
        border-radius: 8px;
        transition: var(--transition-base);
    }

    .filter-option:hover {
        background: var(--light-gray);
    }

    .filter-option input[type="checkbox"] {
        width: 18px;
        height: 18px;
        cursor: pointer;
        accent-color: var(--primary-blue);
    }

    .filter-option label {
        flex: 1;
        cursor: pointer;
        font-size: 0.875rem;
        color: var(--dark-gray);
    }

    .filter-count {
        font-size: 0.75rem;
        color: var(--medium-gray);
    }

    /* Price Range */
    .price-range {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .price-inputs {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0.5rem;
    }

    .price-input {
        padding: 0.75rem;
        border: 2px solid var(--light-gray);
        border-radius: 8px;
        font-family: var(--font-primary);
        font-size: 0.875rem;
        outline: none;
    }

    .price-input:focus {
        border-color: var(--primary-blue);
    }

    .price-slider {
        width: 100%;
        height: 6px;
        background: var(--light-gray);
        border-radius: 10px;
        outline: none;
        -webkit-appearance: none;
    }

    .price-slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        width: 18px;
        height: 18px;
        background: var(--primary-blue);
        border-radius: 50%;
        cursor: pointer;
    }

    .apply-filters-btn {
        width: 100%;
        padding: 0.875rem;
        background: var(--gradient-primary);
        color: var(--white);
        border: none;
        border-radius: 10px;
        font-weight: 700;
        cursor: pointer;
        margin-top: 0.5rem;
    }

    .apply-filters-btn:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .clear-filters {
        text-align: center;
        padding: 1rem;
        color: var(--primary-red);
        font-size: 0.875rem;
        font-weight: 600;
        cursor: pointer;
    }



    /* ===========================
           PRODUCTS MAIN
        =========================== */
    .products-main {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    /* Toolbar */
    .products-toolbar {
        background: var(--white);
        border-radius: 15px;
        padding: 1.5rem;
        box-shadow: var(--shadow-sm);
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .results-count {
        color: var(--medium-gray);
        font-size: 0.875rem;
    }

    .results-count strong {
        color: var(--dark-gray);
        font-size: 1.125rem;
    }

    .toolbar-actions {
        display: flex;
        gap: 1rem;
        align-items: center;
    }

    .view-toggle {
        display: flex;
        gap: 0.5rem;
    }

    .view-btn {
        width: 40px;
        height: 40px;
        background: var(--light-gray);
        border: none;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: var(--transition-base);
    }

    .view-btn.active {
        background: var(--primary-blue);
        color: var(--white);
    }

    .sort-select {
        padding: 0.75rem 1rem;
        border: 2px solid var(--light-gray);
        border-radius: 10px;
        font-family: var(--font-primary);
        font-size: 0.875rem;
        outline: none;
        cursor: pointer;
        background: var(--white);
    }

    .sort-select:focus {
        border-color: var(--primary-blue);
    }

    /* Active Filters */
    .active-filters {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }

    .filter-tag {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        background: var(--light-gray);
        border-radius: 50px;
        font-size: 0.875rem;
        color: var(--dark-gray);
    }

    .filter-tag button {
        background: none;
        border: none;
        color: var(--primary-red);
        cursor: pointer;
        font-size: 1rem;
    }

    /* Products Grid */
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 2rem;
    }

    .product-card {
        background: var(--white);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: var(--shadow-sm);
        transition: var(--transition-base);
        cursor: pointer;
        position: relative;
    }

    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-lg);
    }

    .product-badge {
        position: absolute;
        top: 1rem;
        right: 1rem;
        padding: 0.5rem 1rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        z-index: 10;
    }

    .badge-sale {
        background: var(--primary-red);
        color: var(--white);
    }

    .badge-new {
        background: var(--primary-yellow);
        color: var(--white);
    }

    .badge-bestseller {
        background: var(--primary-blue);
        color: var(--white);
    }

    .product-image {
        position: relative;
        height: 280px;
        background: var(--light-gray);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .product-image i {
        font-size: 5rem;
        color: var(--medium-gray);
    }

    .quick-actions {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        gap: 0.75rem;
        opacity: 0;
        transition: var(--transition-base);
    }

    .product-card:hover .quick-actions {
        opacity: 1;
    }

    .quick-btn {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: var(--white);
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: var(--shadow-md);
        transition: var(--transition-base);
    }

    .quick-btn:hover {
        background: var(--primary-blue);
        color: var(--white);
        transform: scale(1.1);
    }

    .product-info {
        padding: 1.5rem;
    }

    .product-category {
        color: var(--primary-orange);
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 0.5rem;
    }

    .product-name {
        font-size: 1.125rem;
        font-weight: 700;
        color: var(--dark-gray);
        margin-bottom: 0.75rem;
        line-height: 1.4;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .product-rating {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: 1rem;
    }

    .stars {
        display: flex;
        gap: 0.125rem;
        color: var(--primary-yellow);
        font-size: 0.875rem;
    }

    .rating-count {
        color: var(--medium-gray);
        font-size: 0.75rem;
    }

    .product-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 1rem;
        border-top: 2px solid var(--light-gray);
    }

    .product-price {
        display: flex;
        flex-direction: column;
    }

    .price-old {
        font-size: 0.875rem;
        color: var(--medium-gray);
        text-decoration: line-through;
    }

    .price-current {
        font-size: 1.75rem;
        font-weight: 800;
        color: var(--primary-blue);
    }

    .add-cart-btn {
        width: 45px;
        height: 45px;
        background: var(--gradient-primary);
        color: var(--white);
        border: none;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-size: 1.125rem;
        transition: var(--transition-base);
    }

    .add-cart-btn:hover {
        transform: scale(1.1);
        box-shadow: var(--shadow-md);
    }

    /* Pagination */
    .pagination {
        display: flex;
        justify-content: center;
        gap: 0.5rem;
        margin-top: 2rem;
    }

    .page-btn {
        min-width: 45px;
        height: 45px;
        padding: 0 1rem;
        background: var(--white);
        border: 2px solid var(--light-gray);
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition-base);
    }

    .page-btn:hover {
        border-color: var(--primary-blue);
        color: var(--primary-blue);
    }

    .page-btn.active {
        background: var(--gradient-primary);
        color: var(--white);
        border-color: transparent;
    }

    /* ===========================
           RESPONSIVO
        =========================== */
    @media (max-width: 1024px) {
        .products-layout {
            grid-template-columns: 1fr;
        }

        .filters-sidebar {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        }
    }

    @media (max-width: 768px) {
        .container {
            padding: 0 1rem;
        }

        .header-container {
            flex-wrap: wrap;
        }

        .search-bar {
            order: 3;
            width: 100%;
            max-width: none;
        }

        .products-toolbar {
            flex-direction: column;
            align-items: stretch;
        }

        .toolbar-actions {
            justify-content: space-between;
        }

        .products-grid {
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            gap: 1rem;
        }
    }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="header">
        <div class="header-container">
            <a href="index.php" class="logo">
                <i class="fas fa-hard-hat"></i>
                <span>ConstruMax</span>
            </a>

            <div class="search-bar">
                <form class="search-form" action="produtos.php" method="GET">
                    <input type="text" class="search-input" name="busca" placeholder="Buscar produtos...">
                    <button type="submit" class="search-btn">
                        <i class="fas fa-search"></i> Buscar
                    </button>
                </form>
            </div>

            <div class="header-actions">
                <a href="login.php" class="header-btn">
                    <i class="fas fa-user"></i>
                    <span>Entrar</span>
                </a>
                <a href="carrinho.php" class="header-btn">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Carrinho</span>
                    <span class="cart-badge" id="cartCount">0</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container">

        <!-- Breadcrumb -->
        <nav class="breadcrumb">
            <a href="index.php"><i class="fas fa-home"></i> Início</a>
            <span>/</span>
            <span>Produtos</span>
        </nav>

        <!-- Page Header -->
        <div class="page-header">
            <h1 class="page-title">Todos os Produtos</h1>
            <p class="page-subtitle">Encontre os melhores materiais de construção</p>
        </div>

        <!-- Products Layout -->
        <div class="products-layout">

            <!-- Sidebar Filters -->
            <aside class="filters-sidebar">

                <!-- Categories Filter -->
                <div class="filter-section">
                    <h3 class="filter-title">
                        <i class="fas fa-th-large"></i>
                        Categorias
                    </h3>
                    <div class="filter-options">
                        <label class="filter-option">
                            <input type="checkbox" name="categoria" value="cimento">
                            <span>Cimento & Argamassa</span>
                            <span class="filter-count">(45)</span>
                        </label>
                        <label class="filter-option">
                            <input type="checkbox" name="categoria" value="tintas">
                            <span>Tintas & Vernizes</span>
                            <span class="filter-count">(89)</span>
                        </label>
                        <label class="filter-option">
                            <input type="checkbox" name="categoria" value="ferramentas">
                            <span>Ferramentas</span>
                            <span class="filter-count">(132)</span>
                        </label>
                        <label class="filter-option">
                            <input type="checkbox" name="categoria" value="eletrica">
                            <span>Elétrica</span>
                            <span class="filter-count">(76)</span>
                        </label>
                        <label class="filter-option">
                            <input type="checkbox" name="categoria" value="hidraulica">
                            <span>Hidráulica</span>
                            <span class="filter-count">(98)</span>
                        </label>
                        <label class="filter-option">
                            <input type="checkbox" name="categoria" value="pisos">
                            <span>Pisos & Revestimentos</span>
                            <span class="filter-count">(67)</span>
                        </label>
                    </div>
                </div>

                <!-- Price Filter -->
                <div class="filter-section">
                    <h3 class="filter-title">
                        <i class="fas fa-dollar-sign"></i>
                        Faixa de Preço
                    </h3>
                    <div class="price-range">
                        <div class="price-inputs">
                            <!-- <input type="number" class="price-input" placeholder="Mín" id="priceMin" value="0"> 
                             se for o caso de adicionar depois.
                            -->
                            <input type="number" class="price-input" placeholder="Máx" id="priceMax" value="1000">
                        </div>
                        <input type="range" class="price-slider" min="0" max="1000" value="500" id="priceSlider">
                        <button class="apply-filters-btn">Aplicar Filtro</button>
                    </div>
                </div>

                <!-- Brand Filter -->
                <div class="filter-section">
                    <h3 class="filter-title">
                        <i class="fas fa-tag"></i>
                        Marcas
                    </h3>
                    <div class="filter-options">
                        <label class="filter-option">
                            <input type="checkbox" name="marca" value="votoran">
                            <span>Votoran</span>
                            <span class="filter-count">(23)</span>
                        </label>
                        <label class="filter-option">
                            <input type="checkbox" name="marca" value="coral">
                            <span>Coral</span>
                            <span class="filter-count">(18)</span>
                        </label>
                        <label class="filter-option">
                            <input type="checkbox" name="marca" value="dewalt">
                            <span>DeWalt</span>
                            <span class="filter-count">(34)</span>
                        </label>
                        <label class="filter-option">
                            <input type="checkbox" name="marca" value="tramontina">
                            <span>Tramontina</span>
                            <span class="filter-count">(42)</span>
                        </label>
                    </div>
                </div>

                <!-- Rating Filter -->
                <div class="filter-section">
                    <h3 class="filter-title">
                        <i class="fas fa-star"></i>
                        Avaliação
                    </h3>
                    <div class="filter-options">
                        <label class="filter-option">
                            <input type="checkbox" name="rating" value="5">
                            <span>⭐⭐⭐⭐⭐</span>
                            <span class="filter-count">(45)</span>
                        </label>
                        <label class="filter-option">
                            <input type="checkbox" name="rating" value="4">
                            <span>⭐⭐⭐⭐</span>
                            <span class="filter-count">(89)</span>
                        </label>
                        <label class="filter-option">
                            <input type="checkbox" name="rating" value="3">
                            <span>⭐⭐⭐</span>
                            <span class="filter-count">(23)</span>
                        </label>
                    </div>
                </div>

                <div class="clear-filters" onclick="clearFilters()">
                    <i class="fas fa-times-circle"></i> Limpar Filtros
                </div>

            </aside>

            <!-- Products Main -->
            <div class="products-main">

                <!-- Toolbar -->
                <div class="products-toolbar">
                    <div class="results-count">
                        Mostrando <strong id="productCount">24</strong> de <strong>507</strong> produtos
                    </div>

                    <div class="toolbar-actions">
                        <div class="view-toggle">
                            <button class="view-btn active" title="Grade">
                                <i class="fas fa-th"></i>
                            </button>
                            <button class="view-btn" title="Lista">
                                <i class="fas fa-list"></i>
                            </button>
                        </div>

                        <select class="sort-select" id="sortSelect">
                            <option value="relevance">Mais Relevantes</option>
                            <option value="price-asc">Menor Preço</option>
                            <option value="price-desc">Maior Preço</option>
                            <option value="name-asc">A-Z</option>
                            <option value="name-desc">Z-A</option>
                            <option value="newest">Mais Recentes</option>
                            <option value="bestseller">Mais Vendidos</option>
                        </select>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="products-grid" id="productsGrid">

                    <!-- Produto 1 -->
                    <div class="product-card" onclick="window.location.href='produto.php?id=1'">
                        <span class="product-badge badge-bestseller">Mais Vendido</span>
                        <div class="product-image">
                            <i class="fas fa-cube"></i>
                            <div class="quick-actions">
                                <button class="quick-btn" onclick="event.stopPropagation(); quickView(1)"
                                    title="Visualizar">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="quick-btn" onclick="event.stopPropagation(); addToCart(1)"
                                    title="Adicionar">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-category">Cimento</div>
                            <h3 class="product-name">Cimento CP-II 50kg Votoran</h3>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="rating-count">(234)</span>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">
                                    <span class="price-old">R$ 39,90</span>
                                    <span class="price-current">R$ 32,90</span>
                                </div>
                                <button class="add-cart-btn" onclick="event.stopPropagation(); addToCart(1)">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Produto 2 -->
                    <div class="product-card" onclick="window.location.href='produto.php?id=2'">
                        <span class="product-badge badge-sale">-20%</span>
                        <div class="product-image">
                            <i class="fas fa-paint-roller"></i>
                            <div class="quick-actions">
                                <button class="quick-btn" onclick="event.stopPropagation(); quickView(2)">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="quick-btn" onclick="event.stopPropagation(); addToCart(2)">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-category">Tintas</div>
                            <h3 class="product-name">Tinta Látex Premium 18L Branco Coral</h3>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-count">(189)</span>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">
                                    <span class="price-old">R$ 249,90</span>
                                    <span class="price-current">R$ 199,90</span>
                                </div>
                                <button class="add-cart-btn" onclick="event.stopPropagation(); addToCart(2)">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Produto 3 -->
                    <div class="product-card" onclick="window.location.href='produto.php?id=3'">
                        <span class="product-badge badge-new">Novo</span>
                        <div class="product-image">
                            <i class="fas fa-toolbox"></i>
                            <div class="quick-actions">
                                <button class="quick-btn" onclick="event.stopPropagation(); quickView(3)">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="quick-btn" onclick="event.stopPropagation(); addToCart(3)">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-category">Ferramentas</div>
                            <h3 class="product-name">Kit Ferramentas Completo 100 Peças</h3>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="rating-count">(67)</span>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">
                                    <span class="price-current">R$ 389,90</span>
                                </div>
                                <button class="add-cart-btn" onclick="event.stopPropagation(); addToCart(3)">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Produtos adicionais (repetir estrutura) -->
                    <!-- Você pode gerar esses produtos dinamicamente com PHP -->

                </div>

                <!-- Pagination -->
                <div class="pagination">
                    <button class="page-btn">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="page-btn active">1</button>
                    <button class="page-btn">2</button>
                    <button class="page-btn">3</button>
                    <button class="page-btn">4</button>
                    <button class="page-btn">5</button>
                    <button class="page-btn">...</button>
                    <button class="page-btn">21</button>
                    <button class="page-btn">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>

            </div>

        </div>

    </main>

    <!-- JavaScript -->
    <script>
    // ===========================
    // SISTEMA DE CARRINHO (localStorage)
    // ===========================

    // Inicializar carrinho
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Atualizar badge do carrinho
    function updateCartBadge() {
        const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
        document.getElementById('cartCount').textContent = totalItems;
    }

    // Adicionar ao carrinho
    function addToCart(productId) {
        // Dados do produto (em produção viriam do backend)
        const products = {
            1: {
                id: 1,
                name: 'Cimento CP-II 50kg Votoran',
                price: 32.90,
                image: 'cube'
            },
            2: {
                id: 2,
                name: 'Tinta Látex Premium 18L',
                price: 199.90,
                image: 'paint-roller'
            },
            3: {
                id: 3,
                name: 'Kit Ferramentas 100 Peças',
                price: 389.90,
                image: 'toolbox'
            }
        };

        const product = products[productId];

        // Verificar se já existe no carrinho
        const existingItem = cart.find(item => item.id === productId);

        if (existingItem) {
            existingItem.quantity++;
        } else {
            cart.push({
                ...product,
                quantity: 1
            });
        }

        // Salvar no localStorage
        localStorage.setItem('cart', JSON.stringify(cart));

        // Atualizar badge
        updateCartBadge();

        // Feedback visual
        alert(`${product.name} adicionado ao carrinho!`);
    }

    // Quick View
    function quickView(productId) {
        alert(`Abrindo visualização rápida do produto ${productId}`);
        // Aqui você abriria um modal com detalhes do produto
    }

    // Clear Filters
    function clearFilters() {
        document.querySelectorAll('input[type="checkbox"]').forEach(cb => {
            cb.checked = false;
        });
        document.getElementById('priceMin').value = 0;
        document.getElementById('priceMax').value = 1000;
        alert('Filtros limpos!');
    }

    // Sort Products
    document.getElementById('sortSelect').addEventListener('change', function() {
        const sortValue = this.value;
        alert(`Ordenando por: ${sortValue}`);
        // Aqui você implementaria a lógica de ordenação
    });

    // View Toggle
    document.querySelectorAll('.view-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.view-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const isGridView = this.querySelector('.fa-th') !== null;
            const grid = document.getElementById('productsGrid');

            if (isGridView) {
                grid.style.gridTemplateColumns = 'repeat(auto-fill, minmax(280px, 1fr))';
            } else {
                grid.style.gridTemplateColumns = '1fr';
            }
        });
    });

    // Price Range Slider
    const priceSlider = document.getElementById('priceSlider');
    const priceMax = document.getElementById('priceMax');

    priceSlider.addEventListener('input', function() {
        priceMax.value = this.value;
    });

    // Inicializar
    updateCartBadge();
    </script>

</body>

</html>