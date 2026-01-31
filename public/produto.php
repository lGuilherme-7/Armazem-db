<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cimento CP-II 50kg Votoran - ConstruMax</title>
    <meta name="description" content="Compre Cimento CP-II 50kg Votoran com o melhor preço. Entrega rápida e segura.">

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
        /* Cores Principais */
        --primary-blue: #2E86DE;
        --primary-orange: #FF8C42;
        --primary-red: #C0392B;
        --primary-graphite: #34495E;
        --primary-yellow: #F39C12;
        --primary-green: #27AE60;

        /* Cores Neutras */
        --white: #FFFFFF;
        --light-gray: #ECF0F1;
        --medium-gray: #BDC3C7;
        --dark-gray: #2C3E50;
        --black: #1A1A1A;

        /* Gradientes */
        --gradient-primary: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-orange) 100%);

        /* Sombras */
        --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.08);
        --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.12);
        --shadow-lg: 0 8px 32px rgba(0, 0, 0, 0.16);
        --shadow-hover: 0 12px 40px rgba(46, 134, 222, 0.25);

        /* Tipografia */
        --font-primary: 'Poppins', sans-serif;

        /* Transições */
        --transition-fast: 0.2s ease;
        --transition-base: 0.3s ease;
        --transition-slow: 0.5s ease;
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
           HEADER SIMPLIFICADO
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
    }

    .logo {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-size: 1.75rem;
        font-weight: 800;
        color: var(--primary-blue);
        text-decoration: none;
    }

    .logo i {
        font-size: 2rem;
        background: var(--gradient-primary);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
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
        transition: var(--transition-base);
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

    /* Breadcrumb */
    .breadcrumb {
        padding: 2rem 0 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.875rem;
        color: var(--medium-gray);
        flex-wrap: wrap;
    }

    .breadcrumb a {
        color: var(--medium-gray);
        text-decoration: none;
        transition: var(--transition-base);
    }

    .breadcrumb a:hover {
        color: var(--primary-blue);
    }

    /* ===========================
           PRODUCT LAYOUT
        =========================== */
    .product-container {
        padding: 2rem 0 4rem;
    }

    .product-main {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3rem;
        background: var(--white);
        border-radius: 20px;
        padding: 3rem;
        box-shadow: var(--shadow-sm);
        margin-bottom: 3rem;
    }

    /* ===========================
           GALERIA DE IMAGENS
        =========================== */
    .product-gallery {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .main-image {
        width: 100%;
        aspect-ratio: 1;
        background: var(--light-gray);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        position: relative;
        cursor: zoom-in;
    }

    .main-image i {
        font-size: 8rem;
        color: var(--medium-gray);
    }

    .image-badge {
        position: absolute;
        top: 1.5rem;
        left: 1.5rem;
        display: flex;
        gap: 0.5rem;
    }

    .badge {
        padding: 0.5rem 1rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 700;
        color: var(--white);
    }

    .badge-sale {
        background: var(--primary-red);
    }

    .badge-bestseller {
        background: var(--primary-blue);
    }

    .badge-new {
        background: var(--primary-yellow);
    }

    .gallery-actions {
        position: absolute;
        top: 1.5rem;
        right: 1.5rem;
        display: flex;
        gap: 1rem;

    }

    .gallery-btn i {
        font-size: 1rem;
    }

    .gallery-btn {
        width: 45px;
        height: 45px;
        background: var(--white);
        border: none;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: var(--transition-base);
        box-shadow: var(--shadow-sm);
    }

    .gallery-btn:hover {
        background: var(--primary-blue);
        color: var(--white);
        transform: scale(1.1);
    }

    .gallery-thumbnails {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1rem;
    }

    .thumbnail {
        aspect-ratio: 1;
        background: var(--light-gray);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: var(--transition-base);
        border: 3px solid transparent;
    }

    .thumbnail:hover {
        border-color: var(--primary-blue);
    }

    .thumbnail.active {
        border-color: var(--primary-blue);
        background: rgba(46, 134, 222, 0.1);
    }

    .thumbnail i {
        font-size: 2rem;
        color: var(--medium-gray);
    }

    /* ===========================
           PRODUCT INFO
        =========================== */
    .product-info {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .product-header {
        padding-bottom: 1.5rem;
        border-bottom: 2px solid var(--light-gray);
    }

    .product-category {
        color: var(--primary-orange);
        font-size: 0.875rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 0.5rem;
    }

    .product-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--dark-gray);
        margin-bottom: 1rem;
        line-height: 1.2;
    }

    .product-rating {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .stars {
        display: flex;
        gap: 0.25rem;
        color: var(--primary-yellow);
        font-size: 1.125rem;
    }

    .rating-score {
        font-weight: 700;
        color: var(--dark-gray);
    }

    .rating-count {
        color: var(--medium-gray);
        font-size: 0.875rem;
    }

    .rating-count a {
        color: var(--primary-blue);
        text-decoration: none;
    }

    /* Pricing */
    .product-pricing {
        padding: 1.5rem 0;
        border-bottom: 2px solid var(--light-gray);
    }

    .price-old {
        font-size: 1.25rem;
        color: var(--medium-gray);
        text-decoration: line-through;
        margin-bottom: 0.5rem;
    }

    .price-current {
        font-size: 3.5rem;
        font-weight: 800;
        background: var(--gradient-primary);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 0.5rem;
    }

    .price-installments {
        color: var(--medium-gray);
        font-size: 1rem;
    }

    .price-installments strong {
        color: var(--primary-green);
    }

    .savings {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(39, 174, 96, 0.1);
        color: var(--primary-green);
        padding: 0.5rem 1rem;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.875rem;
        margin-top: 1rem;
    }

    /* Quick Info */
    .quick-info {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        padding: 1.5rem 0;
        border-bottom: 2px solid var(--light-gray);
    }

    .info-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 1rem;
        background: var(--light-gray);
        border-radius: 12px;
    }

    .info-item i {
        font-size: 1.5rem;
        color: var(--primary-blue);
    }

    .info-text {
        display: flex;
        flex-direction: column;
    }

    .info-label {
        font-size: 0.75rem;
        color: var(--medium-gray);
    }

    .info-value {
        font-weight: 700;
        color: var(--dark-gray);
        font-size: 0.875rem;
    }

    /* Quantity & Actions */
    .product-actions {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .quantity-wrapper {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .quantity-label {
        font-weight: 700;
        color: var(--dark-gray);
    }

    .quantity-control {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background: var(--light-gray);
        border-radius: 50px;
        padding: 0.5rem;
    }

    .qty-btn {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: var(--white);
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: var(--transition-base);
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--dark-gray);
    }

    .qty-btn:hover {
        background: var(--primary-blue);
        color: var(--white);
    }

    .qty-input {
        width: 60px;
        text-align: center;
        border: none;
        background: transparent;
        font-weight: 700;
        font-size: 1.25rem;
        color: var(--dark-gray);
    }

    .stock-info {
        color: var(--primary-green);
        font-size: 0.875rem;
        font-weight: 600;
    }

    .action-buttons {
        display: flex;
        gap: 1rem;
    }

    .btn-add-cart {
        flex: 1;
        padding: 1.25rem 2rem;
        background: var(--gradient-primary);
        color: var(--white);
        border: none;
        border-radius: 12px;
        font-family: var(--font-primary);
        font-size: 1.125rem;
        font-weight: 800;
        cursor: pointer;
        transition: var(--transition-base);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
    }

    .btn-add-cart:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-hover);
    }

    .btn-favorite {
        width: 60px;
        height: 60px;
        background: var(--light-gray);
        border: none;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: var(--transition-base);
        font-size: 1.5rem;
        color: var(--medium-gray);
    }

    .btn-favorite:hover,
    .btn-favorite.active {
        background: var(--primary-red);
        color: var(--white);
    }

    .btn-buy-now {
        width: 100%;
        padding: 1.25rem 2rem;
        background: var(--primary-graphite);
        color: var(--white);
        border: none;
        border-radius: 12px;
        font-family: var(--font-primary);
        font-size: 1.125rem;
        font-weight: 800;
        cursor: pointer;
        transition: var(--transition-base);
    }

    .btn-buy-now:hover {
        background: var(--dark-gray);
        transform: translateY(-2px);
    }

    /* Trust Badges */
    .trust-section {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        padding: 1.5rem;
        background: var(--light-gray);
        border-radius: 15px;
    }

    .trust-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 0.5rem;
    }

    .trust-item i {
        font-size: 2rem;
        color: var(--primary-green);
    }

    .trust-item span {
        font-size: 0.875rem;
        font-weight: 600;
        color: var(--dark-gray);
    }

    /* ===========================
           TABS SECTION
        =========================== */
    .product-tabs {
        background: var(--white);
        border-radius: 20px;
        padding: 2rem 3rem 3rem;
        box-shadow: var(--shadow-sm);
        margin-bottom: 3rem;
    }

    .tabs-header {
        display: flex;
        gap: 0.5rem;
        border-bottom: 2px solid var(--light-gray);
        margin-bottom: 2rem;
    }

    .tab-btn {
        padding: 1rem 2rem;
        background: none;
        border: none;
        font-family: var(--font-primary);
        font-size: 1rem;
        font-weight: 700;
        color: var(--medium-gray);
        cursor: pointer;
        transition: var(--transition-base);
        position: relative;
    }

    .tab-btn:hover {
        color: var(--primary-blue);
    }

    .tab-btn.active {
        color: var(--primary-blue);
    }

    .tab-btn.active::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        right: 0;
        height: 2px;
        background: var(--gradient-primary);
    }

    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
        animation: fadeIn 0.3s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Description Tab */
    .description-content {
        color: var(--dark-gray);
        font-size: 1rem;
        line-height: 1.8;
    }

    .description-content h3 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
        color: var(--dark-gray);
    }

    .description-content p {
        margin-bottom: 1rem;
    }

    .description-content ul {
        margin-left: 1.5rem;
        margin-bottom: 1rem;
    }

    .description-content li {
        margin-bottom: 0.5rem;
    }

    /* Specifications Tab */
    .specs-table {
        width: 100%;
        border-collapse: collapse;
    }

    .specs-table tr {
        border-bottom: 1px solid var(--light-gray);
    }

    .specs-table td {
        padding: 1.25rem 1rem;
    }

    .specs-table td:first-child {
        font-weight: 700;
        color: var(--dark-gray);
        width: 40%;
    }

    .specs-table td:last-child {
        color: var(--medium-gray);
    }

    .specs-table tr:hover {
        background: var(--light-gray);
    }

    /* Reviews Tab */
    .reviews-summary {
        display: grid;
        grid-template-columns: 300px 1fr;
        gap: 3rem;
        margin-bottom: 3rem;
        padding-bottom: 2rem;
        border-bottom: 2px solid var(--light-gray);
    }

    .rating-overview {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 2rem;
        background: var(--light-gray);
        border-radius: 15px;
    }

    .avg-rating {
        font-size: 4rem;
        font-weight: 800;
        color: var(--primary-blue);
        margin-bottom: 0.5rem;
    }

    .rating-bars {
        width: 100%;
    }

    .rating-bar {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 0.75rem;
    }

    .rating-bar-label {
        display: flex;
        align-items: center;
        gap: 0.25rem;
        font-size: 0.875rem;
        color: var(--dark-gray);
        width: 60px;
    }

    .rating-bar-track {
        flex: 1;
        height: 8px;
        background: var(--light-gray);
        border-radius: 10px;
        overflow: hidden;
    }

    .rating-bar-fill {
        height: 100%;
        background: var(--gradient-primary);
        transition: width 0.5s ease;
    }

    .rating-bar-count {
        font-size: 0.875rem;
        color: var(--medium-gray);
        width: 40px;
        text-align: right;
    }

    .reviews-list {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .review-item {
        padding-bottom: 2rem;
        border-bottom: 1px solid var(--light-gray);
    }

    .review-header {
        display: flex;
        justify-content: space-between;
        align-items: start;
        margin-bottom: 1rem;
    }

    .reviewer-info {
        display: flex;
        gap: 1rem;
    }

    .reviewer-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: var(--gradient-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--white);
        font-weight: 700;
        font-size: 1.25rem;
    }

    .reviewer-details h4 {
        color: var(--dark-gray);
        font-weight: 700;
        margin-bottom: 0.25rem;
    }

    .review-date {
        font-size: 0.875rem;
        color: var(--medium-gray);
    }

    .review-rating {
        display: flex;
        gap: 0.25rem;
        color: var(--primary-yellow);
    }

    .review-text {
        color: var(--dark-gray);
        line-height: 1.8;
        margin-bottom: 1rem;
    }

    .review-helpful {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--medium-gray);
        font-size: 0.875rem;
    }

    .helpful-btn {
        background: none;
        border: 1px solid var(--medium-gray);
        padding: 0.5rem 1rem;
        border-radius: 50px;
        cursor: pointer;
        transition: var(--transition-base);
        font-size: 0.875rem;
        color: var(--medium-gray);
    }

    .helpful-btn:hover {
        border-color: var(--primary-blue);
        color: var(--primary-blue);
    }

    /* ===========================
           RELATED PRODUCTS
        =========================== */
    .related-products {
        margin-bottom: 4rem;
    }

    .section-header {
        margin-bottom: 1rem;
    }

    .section-title {
        font-size: 2rem;
        font-weight: 800;
        color: var(--dark-gray);
        margin-bottom: 0.5rem;
    }

    .section-subtitle {
        color: var(--medium-gray);
    }

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
    }

    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-lg);
    }

    .product-card-image {
        position: relative;
        height: 280px;
        background: var(--light-gray);
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .product-card-image i {
        font-size: 5rem;
        color: var(--medium-gray);
    }

    .product-card-badge {
        position: absolute;
        top: 1rem;
        right: 1rem;
    }

    .product-card-info {
        padding: 1.5rem;
    }

    .product-card-category {
        color: var(--primary-orange);
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 0.5rem;
    }

    .product-card-name {
        font-size: 1.125rem;
        font-weight: 700;
        color: var(--dark-gray);
        margin-bottom: 0.75rem;
        line-height: 1.4;
    }

    .product-card-rating {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: 1rem;
    }

    .product-card-price {
        font-size: 1.75rem;
        font-weight: 800;
        color: var(--primary-blue);
    }

    /* ===========================
           RESPONSIVO
        =========================== */
    @media (max-width: 1024px) {
        .product-main {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .quick-info {
            grid-template-columns: 1fr;
        }

        .reviews-summary {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .container {
            padding: 0 1rem;
        }

        .product-main {
            padding: 2rem;
        }

        .product-tabs {
            padding: 1.5rem;
        }

        .product-title {
            font-size: 2rem;
        }

        .price-current {
            font-size: 2.5rem;
        }

        .action-buttons {
            flex-direction: column;
        }

        .btn-favorite {
            width: 100%;
        }

        .trust-section {
            grid-template-columns: 1fr;
        }

        .tabs-header {
            overflow-x: auto;
        }

        .products-grid {
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
        }
    }

    @media (max-width: 480px) {
        .product-main {
            padding: 1.5rem;
        }

        .gallery-thumbnails {
            grid-template-columns: repeat(3, 1fr);
        }

        .product-title {
            font-size: 1.5rem;
        }

        .price-current {
            font-size: 2rem;
        }

        .quick-info {
            grid-template-columns: 1fr;
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
            <div class="header-actions">
                <a href="produtos.php" class="header-btn">
                    <i class="fas fa-search"></i>
                    <span>Buscar</span>
                </a>
                <a href="carrinho.php" class="header-btn">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Carrinho</span>
                    <span class="cart-badge">3</span>
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
            <a href="produtos.php">Produtos</a>
            <span>/</span>
            <a href="produtos.php?categoria=cimento">Cimento & Argamassa</a>
            <span>/</span>
            <span>Cimento CP-II 50kg Votoran</span>
        </nav>

        <!-- Product Main Section -->
        <div class="product-container">
            <div class="product-main">

                <!-- Product Gallery -->
                <div class="product-gallery">
                    <div class="main-image">
                        <div class="image-badge">
                            <span class="badge badge-bestseller">MAIS VENDIDO</span>
                        </div>
                        <div class="gallery-actions">
                            <button class="gallery-btn" title="Favoritar">
                                <i class="far fa-heart"></i>
                            </button>
                            <button class="gallery-btn" title="Compartilhar">
                                <i class="fas fa-share-alt"></i>
                            </button>
                        </div>
                        <i class="fas fa-cube"></i>
                    </div>

                    <div class="gallery-thumbnails">
                        <div class="thumbnail active">
                            <i class="fas fa-cube"></i>
                        </div>
                        <div class="thumbnail">
                            <i class="fas fa-cube"></i>
                        </div>
                        <div class="thumbnail">
                            <i class="fas fa-cube"></i>
                        </div>
                        <div class="thumbnail">
                            <i class="fas fa-cube"></i>
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="product-info">

                    <div class="product-header">
                        <div class="product-category">Cimento & Argamassa</div>
                        <h1 class="product-title">Cimento CP-II 50kg Votoran</h1>

                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="rating-score">4.5</span>
                            <span class="rating-count">(234 <a href="#reviews">avaliações</a>)</span>
                        </div>
                    </div>

                    <div class="product-pricing">
                        <div class="price-old">De R$ 39,90 por</div>
                        <div class="price-current">R$ 32,90</div>
                        <div class="price-installments">
                            ou em até <strong>3x de R$ 10,97 sem juros</strong>
                        </div>
                        <div class="savings">
                            <i class="fas fa-tag"></i>
                            <span>Economize R$ 7,00 (17%)</span>
                        </div>
                    </div>

                    <div class="quick-info">
                        <div class="info-item">
                            <i class="fas fa-truck"></i>
                            <div class="info-text">
                                <span class="info-label">Entrega</span>
                                <span class="info-value">24-48h</span>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-box"></i>
                            <div class="info-text">
                                <span class="info-label">Estoque</span>
                                <span class="info-value">Disponível</span>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-award"></i>
                            <div class="info-text">
                                <span class="info-label">Garantia</span>
                                <span class="info-value">30 dias</span>
                            </div>
                        </div>
                    </div>

                    <div class="product-actions">
                        <div class="quantity-wrapper">
                            <span class="quantity-label">Quantidade:</span>
                            <div class="quantity-control">
                                <button class="qty-btn" onclick="updateQty(-1)">-</button>
                                <input type="number" class="qty-input" id="qty" value="1" min="1" readonly>
                                <button class="qty-btn" onclick="updateQty(1)">+</button>
                            </div>
                            <span class="stock-info">
                                <i class="fas fa-check-circle"></i> 45 unidades disponíveis
                            </span>
                        </div>

                        <div class="action-buttons">
                            <button class="btn-add-cart" onclick="addToCart()">
                                <i class="fas fa-shopping-cart"></i>
                                <span>Adicionar ao Carrinho</span>
                            </button>
                            <button class="btn-favorite" id="favoriteBtn" onclick="toggleFavorite()">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>

                        <button class="btn-buy-now" onclick="buyNow()">
                            <i class="fas fa-bolt"></i> Comprar Agora
                        </button>
                    </div>

                    <div class="trust-section">
                        <div class="trust-item">
                            <i class="fas fa-shield-alt"></i>
                            <span>Compra Segura</span>
                        </div>
                        <div class="trust-item">
                            <i class="fas fa-undo"></i>
                            <span>Troca Grátis</span>
                        </div>
                        <div class="trust-item">
                            <i class="fas fa-truck-fast"></i>
                            <span>Entrega Rápida</span>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Product Tabs -->
            <div class="product-tabs">
                <div class="tabs-header">
                    <button class="tab-btn active" onclick="switchTab('description')">
                        Descrição
                    </button>
                    <button class="tab-btn" onclick="switchTab('specifications')">
                        Especificações
                    </button>
                    <button class="tab-btn" onclick="switchTab('reviews')">
                        Avaliações (234)
                    </button>
                </div>

                <!-- Description Tab -->
                <div class="tab-content active" id="description">
                    <div class="description-content">
                        <h3>Sobre o Produto</h3>
                        <p>
                            O Cimento CP-II 50kg Votoran é ideal para obras de grande porte, oferecendo
                            alta resistência e durabilidade. Produzido com matéria-prima de primeira
                            qualidade, garante acabamento perfeito e maior vida útil para sua construção.
                        </p>

                        <h3>Características Principais</h3>
                        <ul>
                            <li>Alta resistência mecânica</li>
                            <li>Ideal para estruturas de concreto armado</li>
                            <li>Maior durabilidade e acabamento superior</li>
                            <li>Secagem rápida e uniforme</li>
                            <li>Produto certificado pelo INMETRO</li>
                            <li>Embalagem resistente e prática</li>
                        </ul>

                        <h3>Aplicações</h3>
                        <p>
                            Recomendado para uso em fundações, pilares, vigas, lajes, pisos industriais,
                            pavimentação e demais elementos estruturais. Pode ser utilizado em obras
                            residenciais, comerciais e industriais.
                        </p>

                        <h3>Rendimento</h3>
                        <p>
                            Um saco de 50kg rende aproximadamente 25 litros de argamassa ou concreto,
                            dependendo do traço utilizado. Consulte um profissional para definir o
                            melhor traço para sua obra.
                        </p>
                    </div>
                </div>

                <!-- Specifications Tab -->
                <div class="tab-content" id="specifications">
                    <table class="specs-table">
                        <tr>
                            <td>Marca</td>
                            <td>Votoran</td>
                        </tr>
                        <tr>
                            <td>Tipo</td>
                            <td>CP-II (Cimento Portland Composto)</td>
                        </tr>
                        <tr>
                            <td>Peso</td>
                            <td>50kg</td>
                        </tr>
                        <tr>
                            <td>Embalagem</td>
                            <td>Saco de papel multifolhado</td>
                        </tr>
                        <tr>
                            <td>Rendimento</td>
                            <td>Aproximadamente 25 litros</td>
                        </tr>
                        <tr>
                            <td>Resistência aos 28 dias</td>
                            <td>32 MPa</td>
                        </tr>
                        <tr>
                            <td>Tempo de pega inicial</td>
                            <td>≥ 60 minutos</td>
                        </tr>
                        <tr>
                            <td>Finura</td>
                            <td>≤ 12% (Resíduo na peneira 75 μm)</td>
                        </tr>
                        <tr>
                            <td>Aplicações</td>
                            <td>Estruturas, fundações, pisos, pavimentação</td>
                        </tr>
                        <tr>
                            <td>Certificação</td>
                            <td>INMETRO, ABNT NBR 11578</td>
                        </tr>
                        <tr>
                            <td>Validade</td>
                            <td>90 dias a partir da data de fabricação</td>
                        </tr>
                        <tr>
                            <td>Armazenamento</td>
                            <td>Local seco e protegido da umidade</td>
                        </tr>
                        <tr>
                            <td>País de Origem</td>
                            <td>Brasil</td>
                        </tr>
                        <tr>
                            <td>Código de Barras</td>
                            <td>7891234567890</td>
                        </tr>
                    </table>
                </div>

                <!-- Reviews Tab -->
                <div class="tab-content" id="reviews">
                    <div class="reviews-summary">
                        <div class="rating-overview">
                            <div class="avg-rating">4.5</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p style="margin-top: 0.5rem; color: var(--medium-gray);">
                                Baseado em 234 avaliações
                            </p>
                        </div>

                        <div class="rating-bars">
                            <div class="rating-bar">
                                <div class="rating-bar-label">
                                    <span>5</span>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="rating-bar-track">
                                    <div class="rating-bar-fill" style="width: 75%;"></div>
                                </div>
                                <div class="rating-bar-count">175</div>
                            </div>
                            <div class="rating-bar">
                                <div class="rating-bar-label">
                                    <span>4</span>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="rating-bar-track">
                                    <div class="rating-bar-fill" style="width: 15%;"></div>
                                </div>
                                <div class="rating-bar-count">35</div>
                            </div>
                            <div class="rating-bar">
                                <div class="rating-bar-label">
                                    <span>3</span>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="rating-bar-track">
                                    <div class="rating-bar-fill" style="width: 7%;"></div>
                                </div>
                                <div class="rating-bar-count">16</div>
                            </div>
                            <div class="rating-bar">
                                <div class="rating-bar-label">
                                    <span>2</span>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="rating-bar-track">
                                    <div class="rating-bar-fill" style="width: 2%;"></div>
                                </div>
                                <div class="rating-bar-count">5</div>
                            </div>
                            <div class="rating-bar">
                                <div class="rating-bar-label">
                                    <span>1</span>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="rating-bar-track">
                                    <div class="rating-bar-fill" style="width: 1%;"></div>
                                </div>
                                <div class="rating-bar-count">3</div>
                            </div>
                        </div>
                    </div>

                    <div class="reviews-list">
                        <div class="review-item">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">JP</div>
                                    <div class="reviewer-details">
                                        <h4>João Paulo Silva</h4>
                                        <div class="review-date">15 de Janeiro, 2026</div>
                                    </div>
                                </div>
                                <div class="review-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="review-text">
                                Excelente produto! Utilizei na construção da minha casa e o resultado
                                foi perfeito. O cimento tem ótima qualidade, não empelota e o acabamento
                                ficou impecável. Recomendo!
                            </p>
                            <div class="review-helpful">
                                <span>Esta avaliação foi útil?</span>
                                <button class="helpful-btn">
                                    <i class="far fa-thumbs-up"></i> Sim (12)
                                </button>
                                <button class="helpful-btn">
                                    <i class="far fa-thumbs-down"></i> Não (0)
                                </button>
                            </div>
                        </div>

                        <div class="review-item">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">MS</div>
                                    <div class="reviewer-details">
                                        <h4>Maria Santos</h4>
                                        <div class="review-date">10 de Janeiro, 2026</div>
                                    </div>
                                </div>
                                <div class="review-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <p class="review-text">
                                Produto de boa qualidade. Comprei para fazer um contrapiso e atendeu
                                perfeitamente. A entrega foi rápida e o preço estava ótimo. Única
                                observação é que uma das sacas veio com um pequeno furo, mas nada
                                que comprometesse o uso.
                            </p>
                            <div class="review-helpful">
                                <span>Esta avaliação foi útil?</span>
                                <button class="helpful-btn">
                                    <i class="far fa-thumbs-up"></i> Sim (8)
                                </button>
                                <button class="helpful-btn">
                                    <i class="far fa-thumbs-down"></i> Não (1)
                                </button>
                            </div>
                        </div>

                        <div class="review-item">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">RC</div>
                                    <div class="reviewer-details">
                                        <h4>Roberto Costa</h4>
                                        <div class="review-date">5 de Janeiro, 2026</div>
                                    </div>
                                </div>
                                <div class="review-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="review-text">
                                Sou pedreiro há 20 anos e sempre uso Votoran nas minhas obras.
                                É sinônimo de qualidade e confiança. O produto tem excelente
                                trabalhabilidade e os clientes sempre ficam satisfeitos com o resultado.
                            </p>
                            <div class="review-helpful">
                                <span>Esta avaliação foi útil?</span>
                                <button class="helpful-btn">
                                    <i class="far fa-thumbs-up"></i> Sim (25)
                                </button>
                                <button class="helpful-btn">
                                    <i class="far fa-thumbs-down"></i> Não (0)
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Products -->
            <section class="related-products">
                <div class="section-header">
                    <h2 class="section-title">Produtos Relacionados</h2>
                    <p class="section-subtitle">Clientes que viram este produto também se interessaram por</p>
                </div>

                <div class="products-grid">
                    <div class="product-card">
                        <div class="product-card-image">
                            <i class="fas fa-cube"></i>
                            <div class="product-card-badge">
                                <span class="badge badge-new">NOVO</span>
                            </div>
                        </div>
                        <div class="product-card-info">
                            <div class="product-card-category">Argamassa</div>
                            <h3 class="product-card-name">Argamassa AC-II 20kg Quartzolit</h3>
                            <div class="product-card-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span>(89)</span>
                            </div>
                            <div class="product-card-price">R$ 24,90</div>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-card-image">
                            <i class="fas fa-toolbox"></i>
                        </div>
                        <div class="product-card-info">
                            <div class="product-card-category">Ferramentas</div>
                            <h3 class="product-card-name">Colher de Pedreiro Profissional 12"</h3>
                            <div class="product-card-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span>(156)</span>
                            </div>
                            <div class="product-card-price">R$ 35,90</div>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-card-image">
                            <i class="fas fa-hard-hat"></i>
                            <div class="product-card-badge">
                                <span class="badge badge-sale">-15%</span>
                            </div>
                        </div>
                        <div class="product-card-info">
                            <div class="product-card-category">Segurança</div>
                            <h3 class="product-card-name">Capacete de Segurança Branco</h3>
                            <div class="product-card-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span>(203)</span>
                            </div>
                            <div class="product-card-price">R$ 42,90</div>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-card-image">
                            <i class="fas fa-bucket"></i>
                        </div>
                        <div class="product-card-info">
                            <div class="product-card-category">Ferramentas</div>
                            <h3 class="product-card-name">Balde de Obra 12L Plástico</h3>
                            <div class="product-card-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span>(67)</span>
                            </div>
                            <div class="product-card-price">R$ 18,90</div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>

    <!-- JavaScript -->
    <script>
    // Quantity Control
    function updateQty(change) {
        const qtyInput = document.getElementById('qty');
        let currentQty = parseInt(qtyInput.value);
        let newQty = currentQty + change;

        if (newQty >= 1 && newQty <= 45) {
            qtyInput.value = newQty;
        }
    }

    // Add to Cart
    function addToCart() {
        const qty = document.getElementById('qty').value;
        const btn = event.target.closest('.btn-add-cart');

        // Animação do botão
        btn.style.transform = 'scale(0.95)';
        setTimeout(() => {
            btn.style.transform = 'scale(1)';
        }, 200);

        // Atualizar badge do carrinho
        const cartBadge = document.querySelector('.cart-badge');
        const currentCount = parseInt(cartBadge.textContent);
        cartBadge.textContent = currentCount + parseInt(qty);

        // Animação do badge
        cartBadge.style.transform = 'scale(1.5)';
        setTimeout(() => {
            cartBadge.style.transform = 'scale(1)';
        }, 300);

        alert(`${qty} unidade(s) adicionada(s) ao carrinho!`);
    }

    // Toggle Favorite
    function toggleFavorite() {
        const btn = document.getElementById('favoriteBtn');
        const icon = btn.querySelector('i');

        btn.classList.toggle('active');

        if (btn.classList.contains('active')) {
            icon.classList.remove('far');
            icon.classList.add('fas');
        } else {
            icon.classList.remove('fas');
            icon.classList.add('far');
        }
    }

    // Buy Now
    function buyNow() {
        const qty = document.getElementById('qty').value;
        // Aqui você adicionaria ao carrinho e redirecionaria
        alert(`Comprando ${qty} unidade(s). Redirecionando para checkout...`);
        setTimeout(() => {
            window.location.href = 'checkout.php';
        }, 1000);
    }

    // Switch Tabs
    function switchTab(tabName) {
        // Remover active de todos os botões e conteúdos
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.classList.remove('active');
        });
        document.querySelectorAll('.tab-content').forEach(content => {
            content.classList.remove('active');
        });

        // Adicionar active ao botão clicado
        event.target.classList.add('active');

        // Mostrar conteúdo correspondente
        document.getElementById(tabName).classList.add('active');

        // Scroll suave até a aba
        if (tabName === 'reviews') {
            document.querySelector('.product-tabs').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    }

    // Gallery Thumbnails
    document.querySelectorAll('.thumbnail').forEach((thumbnail, index) => {
        thumbnail.addEventListener('click', function() {
            document.querySelectorAll('.thumbnail').forEach(t => {
                t.classList.remove('active');
            });
            this.classList.add('active');

            // Aqui você trocaria a imagem principal
            console.log(`Imagem ${index + 1} selecionada`);
        });
    });

    // Gallery Actions
    document.querySelectorAll('.gallery-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const icon = this.querySelector('i');

            if (icon.classList.contains('fa-heart')) {
                toggleFavorite();
            } else if (icon.classList.contains('fa-share-alt')) {
                // Compartilhar
                if (navigator.share) {
                    navigator.share({
                        title: 'Cimento CP-II 50kg Votoran',
                        text: 'Confira este produto na ConstruMax!',
                        url: window.location.href
                    });
                } else {
                    alert('Link copiado para área de transferência!');
                }
            }
        });
    });

    // Scroll to reviews on rating click
    document.querySelector('.rating-count a').addEventListener('click', function(e) {
        e.preventDefault();
        switchTab('reviews');
    });
    </script>

</body>

</html>