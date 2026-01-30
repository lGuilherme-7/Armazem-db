<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras - ConstruMax | Materiais de Construção</title>
    <meta name="description" content="Finalize sua compra na ConstruMax">

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
        /* Cores Principais - Paleta Moderno Industrial */
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

    /* ===========================
           RESET & BASE
        =========================== */
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
        overflow-x: hidden;
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

    .back-shopping {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--primary-blue);
        text-decoration: none;
        font-weight: 600;
        transition: var(--transition-base);
    }

    .back-shopping:hover {
        color: var(--primary-orange);
        gap: 0.75rem;
    }

    /* ===========================
           MAIN CONTENT
        =========================== */
    .cart-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 3rem 2rem;
    }

    .page-header {
        margin-bottom: 3rem;
    }

    .breadcrumb {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.875rem;
        color: var(--medium-gray);
        margin-bottom: 1.5rem;
    }

    .breadcrumb a {
        color: var(--medium-gray);
        text-decoration: none;
        transition: var(--transition-base);
    }

    .breadcrumb a:hover {
        color: var(--primary-blue);
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

    /* Progress Steps */
    .checkout-steps {
        display: flex;
        justify-content: center;
        gap: 2rem;
        margin-bottom: 3rem;
        padding: 2rem;
        background: var(--white);
        border-radius: 20px;
        box-shadow: var(--shadow-sm);
    }

    .checkout-step {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.75rem;
        position: relative;
        flex: 1;
        max-width: 200px;
    }

    .checkout-step::after {
        content: '';
        position: absolute;
        top: 25px;
        left: 50%;
        width: 100%;
        height: 2px;
        background: var(--light-gray);
        z-index: 0;
    }

    .checkout-step:last-child::after {
        display: none;
    }

    .step-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: var(--light-gray);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        color: var(--medium-gray);
        position: relative;
        z-index: 1;
        transition: var(--transition-base);
    }

    .checkout-step.active .step-icon {
        background: var(--gradient-primary);
        color: var(--white);
        box-shadow: var(--shadow-md);
    }

    .checkout-step.completed .step-icon {
        background: var(--primary-green);
        color: var(--white);
    }

    .step-label {
        font-size: 0.875rem;
        font-weight: 600;
        color: var(--medium-gray);
        text-align: center;
    }

    .checkout-step.active .step-label {
        color: var(--primary-blue);
    }

    /* Cart Layout */
    .cart-layout {
        display: grid;
        grid-template-columns: 1fr 400px;
        gap: 2rem;
        align-items: start;
    }

    /* ===========================
           CART ITEMS
        =========================== */
    .cart-items {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .cart-item {
        background: var(--white);
        border-radius: 20px;
        padding: 2rem;
        box-shadow: var(--shadow-sm);
        display: flex;
        gap: 2rem;
        position: relative;
        transition: var(--transition-base);
    }

    .cart-item:hover {
        box-shadow: var(--shadow-md);
    }

    .item-image {
        width: 150px;
        height: 150px;
        background: var(--light-gray);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        overflow: hidden;
    }

    .item-image i {
        font-size: 3.5rem;
        color: var(--medium-gray);
    }

    .item-details {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .item-category {
        color: var(--primary-orange);
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .item-name {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--dark-gray);
        line-height: 1.4;
    }

    .item-specs {
        display: flex;
        gap: 1.5rem;
        flex-wrap: wrap;
    }

    .spec-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.875rem;
        color: var(--medium-gray);
    }

    .spec-item i {
        color: var(--primary-blue);
    }

    .item-actions {
        display: flex;
        gap: 1rem;
        align-items: center;
        margin-top: auto;
    }

    .quantity-control {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background: var(--light-gray);
        border-radius: 50px;
        padding: 0.25rem;
    }

    .qty-btn {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: var(--white);
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: var(--transition-base);
        color: var(--dark-gray);
        font-weight: 700;
    }

    .qty-btn:hover {
        background: var(--primary-blue);
        color: var(--white);
    }

    .qty-input {
        width: 50px;
        text-align: center;
        border: none;
        background: transparent;
        font-weight: 700;
        font-size: 1rem;
        color: var(--dark-gray);
    }

    .remove-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--primary-red);
        background: none;
        border: none;
        cursor: pointer;
        font-family: var(--font-primary);
        font-weight: 600;
        font-size: 0.875rem;
        transition: var(--transition-base);
    }

    .remove-item:hover {
        opacity: 0.7;
    }

    .item-price-section {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 0.5rem;
        padding-left: 2rem;
        border-left: 2px solid var(--light-gray);
    }

    .item-unit-price {
        font-size: 0.875rem;
        color: var(--medium-gray);
    }

    .item-total-price {
        font-size: 2rem;
        font-weight: 800;
        color: var(--primary-blue);
    }

    .item-savings {
        font-size: 0.875rem;
        color: var(--primary-green);
        font-weight: 600;
    }

    /* Empty Cart */
    .empty-cart {
        background: var(--white);
        border-radius: 20px;
        padding: 4rem 2rem;
        text-align: center;
        box-shadow: var(--shadow-sm);
    }

    .empty-cart-icon {
        font-size: 5rem;
        color: var(--medium-gray);
        margin-bottom: 1.5rem;
    }

    .empty-cart h2 {
        font-size: 2rem;
        font-weight: 800;
        color: var(--dark-gray);
        margin-bottom: 1rem;
    }

    .empty-cart p {
        color: var(--medium-gray);
        font-size: 1.125rem;
        margin-bottom: 2rem;
    }

    /* ===========================
           CART SUMMARY (SIDEBAR)
        =========================== */
    .cart-summary {
        background: var(--white);
        border-radius: 20px;
        padding: 2rem;
        box-shadow: var(--shadow-md);
        position: sticky;
        top: 100px;
    }

    .summary-title {
        font-size: 1.5rem;
        font-weight: 800;
        color: var(--dark-gray);
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid var(--light-gray);
    }

    /* Coupon */
    .coupon-section {
        margin-bottom: 1.5rem;
    }

    .coupon-form {
        display: flex;
        gap: 0.5rem;
    }

    .coupon-input {
        flex: 1;
        padding: 0.875rem 1rem;
        border: 2px solid var(--light-gray);
        border-radius: 12px;
        font-family: var(--font-primary);
        font-size: 0.9rem;
        outline: none;
        transition: var(--transition-base);
    }

    .coupon-input:focus {
        border-color: var(--primary-blue);
    }

    .coupon-btn {
        padding: 0.875rem 1.5rem;
        background: var(--primary-graphite);
        color: var(--white);
        border: none;
        border-radius: 12px;
        font-weight: 700;
        cursor: pointer;
        transition: var(--transition-base);
        white-space: nowrap;
    }

    .coupon-btn:hover {
        background: var(--primary-blue);
    }

    /* Summary Items */
    .summary-items {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin-bottom: 1.5rem;
        padding-bottom: 1.5rem;
        border-bottom: 2px solid var(--light-gray);
    }

    .summary-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 1rem;
    }

    .summary-label {
        color: var(--medium-gray);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .summary-label i {
        font-size: 0.875rem;
    }

    .summary-value {
        font-weight: 700;
        color: var(--dark-gray);
    }

    .summary-value.discount {
        color: var(--primary-green);
    }

    .summary-value.shipping {
        color: var(--primary-blue);
    }

    .summary-total {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.5rem 0;
        margin-bottom: 1.5rem;
        border-bottom: 2px solid var(--light-gray);
    }

    .total-label {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--dark-gray);
    }

    .total-value {
        font-size: 2rem;
        font-weight: 800;
        background: var(--gradient-primary);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Installments */
    .installments {
        text-align: center;
        color: var(--medium-gray);
        font-size: 0.875rem;
        margin-bottom: 1.5rem;
        padding: 1rem;
        background: var(--light-gray);
        border-radius: 12px;
    }

    .installments strong {
        color: var(--primary-green);
        display: block;
        font-size: 1rem;
        margin-top: 0.25rem;
    }

    /* Checkout Button */
    .checkout-btn {
        width: 100%;
        padding: 1.25rem;
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
        margin-bottom: 1rem;
    }

    .checkout-btn:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-hover);
    }

    .continue-shopping-btn {
        width: 100%;
        padding: 1rem;
        background: var(--light-gray);
        color: var(--dark-gray);
        border: 2px solid var(--light-gray);
        border-radius: 12px;
        font-family: var(--font-primary);
        font-size: 1rem;
        font-weight: 700;
        cursor: pointer;
        transition: var(--transition-base);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
    }

    .continue-shopping-btn:hover {
        border-color: var(--primary-blue);
        background: rgba(46, 134, 222, 0.05);
    }

    /* Payment Methods */
    .payment-methods {
        margin-top: 1.5rem;
        padding-top: 1.5rem;
        border-top: 2px solid var(--light-gray);
    }

    .payment-title {
        font-size: 0.875rem;
        color: var(--medium-gray);
        margin-bottom: 1rem;
        text-align: center;
    }

    .payment-icons {
        display: flex;
        justify-content: center;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .payment-icons i {
        font-size: 2rem;
        color: var(--medium-gray);
        opacity: 0.5;
    }

    /* Trust Badges */
    .trust-badges {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        margin-top: 2rem;
    }

    .trust-badge {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.5rem;
        padding: 1rem;
        background: var(--light-gray);
        border-radius: 12px;
        text-align: center;
    }

    .trust-badge i {
        font-size: 1.5rem;
        color: var(--primary-green);
    }

    .trust-badge span {
        font-size: 0.75rem;
        color: var(--dark-gray);
        font-weight: 600;
    }

    /* ===========================
           RELATED PRODUCTS
        =========================== */
    .related-products {
        margin-top: 4rem;
    }

    .related-header {
        margin-bottom: 2rem;
    }

    .related-title {
        font-size: 2rem;
        font-weight: 800;
        color: var(--dark-gray);
        margin-bottom: 0.5rem;
    }

    .related-subtitle {
        color: var(--medium-gray);
    }

    .related-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1.5rem;
    }

    .related-product {
        background: var(--white);
        border-radius: 15px;
        padding: 1.5rem;
        box-shadow: var(--shadow-sm);
        transition: var(--transition-base);
        cursor: pointer;
    }

    .related-product:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-md);
    }

    .related-product-image {
        width: 100%;
        aspect-ratio: 1;
        background: var(--light-gray);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
    }

    .related-product-image i {
        font-size: 3rem;
        color: var(--medium-gray);
    }

    .related-product-name {
        font-size: 1rem;
        font-weight: 700;
        color: var(--dark-gray);
        margin-bottom: 0.5rem;
    }

    .related-product-price {
        font-size: 1.5rem;
        font-weight: 800;
        color: var(--primary-blue);
    }

    .add-to-cart-small {
        width: 100%;
        padding: 0.75rem;
        background: var(--gradient-primary);
        color: var(--white);
        border: none;
        border-radius: 8px;
        font-weight: 700;
        cursor: pointer;
        margin-top: 1rem;
        transition: var(--transition-base);
    }

    .add-to-cart-small:hover {
        transform: scale(1.02);
    }

    /* ===========================
           RESPONSIVO
        =========================== */
    @media (max-width: 1024px) {
        .cart-layout {
            grid-template-columns: 1fr;
        }

        .cart-summary {
            position: static;
        }

        .related-grid {
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        }
    }

    @media (max-width: 768px) {
        .cart-container {
            padding: 2rem 1rem;
        }

        .page-title {
            font-size: 2rem;
        }

        .checkout-steps {
            gap: 1rem;
            padding: 1.5rem;
        }

        .checkout-step {
            max-width: none;
        }

        .step-label {
            font-size: 0.75rem;
        }

        .cart-item {
            flex-direction: column;
            padding: 1.5rem;
        }

        .item-image {
            width: 100%;
            height: 200px;
        }

        .item-price-section {
            flex-direction: row;
            justify-content: space-between;
            width: 100%;
            padding-left: 0;
            padding-top: 1rem;
            border-left: none;
            border-top: 2px solid var(--light-gray);
        }

        .trust-badges {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        .checkout-steps {
            gap: 0.5rem;
            padding: 1rem;
        }

        .step-icon {
            width: 40px;
            height: 40px;
            font-size: 1rem;
        }

        .step-label {
            font-size: 0.7rem;
        }

        .item-name {
            font-size: 1.1rem;
        }

        .item-total-price {
            font-size: 1.5rem;
        }

        .related-grid {
            grid-template-columns: 1fr;
        }
    }
    </style>
</head>

<body>

    <!-- Header Simplificado -->
    <header class="header">
        <div class="header-container">
            <a href="index.php" class="logo">
                <i class="fas fa-hard-hat"></i>
                <span>ConstruMax</span>
            </a>
            <a href="produtos.php" class="back-shopping">
                <i class="fas fa-arrow-left"></i>
                <span>Continuar Comprando</span>
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="cart-container">

        <!-- Page Header -->
        <div class="page-header">
            <nav class="breadcrumb">
                <a href="index.php"><i class="fas fa-home"></i> Início</a>
                <span>/</span>
                <span>Carrinho de Compras</span>
            </nav>
            <h1 class="page-title">Meu Carrinho</h1>
            <p class="page-subtitle">Revise seus produtos antes de finalizar a compra</p>
        </div>

        <!-- Checkout Steps -->
        <div class="checkout-steps">
            <div class="checkout-step active">
                <div class="step-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <span class="step-label">Carrinho</span>
            </div>
            <div class="checkout-step">
                <div class="step-icon">
                    <i class="fas fa-shipping-fast"></i>
                </div>
                <span class="step-label">Entrega</span>
            </div>
            <div class="checkout-step">
                <div class="step-icon">
                    <i class="fas fa-credit-card"></i>
                </div>
                <span class="step-label">Pagamento</span>
            </div>
            <div class="checkout-step">
                <div class="step-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <span class="step-label">Confirmação</span>
            </div>
        </div>

        <!-- Cart Layout -->
        <div class="cart-layout" id="cartLayout">

            <!-- Cart Items -->
            <div class="cart-items" id="cartItems">

                <!-- Item 1 -->
                <div class="cart-item" data-id="1" data-price="32.90">
                    <div class="item-image">
                        <i class="fas fa-cube"></i>
                    </div>

                    <div class="item-details">
                        <div class="item-category">Cimento</div>
                        <h3 class="item-name">Cimento CP-II 50kg Votoran</h3>

                        <div class="item-specs">
                            <div class="spec-item">
                                <i class="fas fa-box"></i>
                                <span>50kg</span>
                            </div>
                            <div class="spec-item">
                                <i class="fas fa-truck"></i>
                                <span>Disponível</span>
                            </div>
                            <div class="spec-item">
                                <i class="fas fa-star"></i>
                                <span>4.5/5</span>
                            </div>
                        </div>

                        <div class="item-actions">
                            <div class="quantity-control">
                                <button class="qty-btn qty-decrease" onclick="updateQuantity(1, -1)">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <input type="number" class="qty-input" value="2" min="1" readonly>
                                <button class="qty-btn qty-increase" onclick="updateQuantity(1, 1)">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>

                            <button class="remove-item" onclick="removeItem(1)">
                                <i class="fas fa-trash"></i>
                                <span>Remover</span>
                            </button>
                        </div>
                    </div>

                    <div class="item-price-section">
                        <span class="item-unit-price">R$ 32,90 / unidade</span>
                        <span class="item-total-price">R$ 65,80</span>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="cart-item" data-id="2" data-price="199.90">
                    <div class="item-image">
                        <i class="fas fa-paint-roller"></i>
                    </div>

                    <div class="item-details">
                        <div class="item-category">Tintas</div>
                        <h3 class="item-name">Tinta Látex Premium 18L Branco Coral</h3>

                        <div class="item-specs">
                            <div class="spec-item">
                                <i class="fas fa-box"></i>
                                <span>18 Litros</span>
                            </div>
                            <div class="spec-item">
                                <i class="fas fa-truck"></i>
                                <span>Disponível</span>
                            </div>
                            <div class="spec-item">
                                <i class="fas fa-percentage"></i>
                                <span>20% OFF</span>
                            </div>
                        </div>

                        <div class="item-actions">
                            <div class="quantity-control">
                                <button class="qty-btn qty-decrease" onclick="updateQuantity(2, -1)">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <input type="number" class="qty-input" value="1" min="1" readonly>
                                <button class="qty-btn qty-increase" onclick="updateQuantity(2, 1)">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>

                            <button class="remove-item" onclick="removeItem(2)">
                                <i class="fas fa-trash"></i>
                                <span>Remover</span>
                            </button>
                        </div>
                    </div>

                    <div class="item-price-section">
                        <span class="item-unit-price">De R$ 249,90 por</span>
                        <span class="item-total-price">R$ 199,90</span>
                        <span class="item-savings">Economize R$ 50,00</span>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="cart-item" data-id="3" data-price="389.90">
                    <div class="item-image">
                        <i class="fas fa-toolbox"></i>
                    </div>

                    <div class="item-details">
                        <div class="item-category">Ferramentas</div>
                        <h3 class="item-name">Kit Ferramentas Completo 100 Peças</h3>

                        <div class="item-specs">
                            <div class="spec-item">
                                <i class="fas fa-box"></i>
                                <span>100 peças</span>
                            </div>
                            <div class="spec-item">
                                <i class="fas fa-truck"></i>
                                <span>Disponível</span>
                            </div>
                            <div class="spec-item">
                                <i class="fas fa-award"></i>
                                <span>Premium</span>
                            </div>
                        </div>

                        <div class="item-actions">
                            <div class="quantity-control">
                                <button class="qty-btn qty-decrease" onclick="updateQuantity(3, -1)">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <input type="number" class="qty-input" value="1" min="1" readonly>
                                <button class="qty-btn qty-increase" onclick="updateQuantity(3, 1)">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>

                            <button class="remove-item" onclick="removeItem(3)">
                                <i class="fas fa-trash"></i>
                                <span>Remover</span>
                            </button>
                        </div>
                    </div>

                    <div class="item-price-section">
                        <span class="item-unit-price">R$ 389,90 / unidade</span>
                        <span class="item-total-price">R$ 389,90</span>
                    </div>
                </div>

            </div>

            <!-- Cart Summary Sidebar -->
            <aside class="cart-summary">
                <h2 class="summary-title">Resumo do Pedido</h2>

                <!-- Coupon -->
                <div class="coupon-section">
                    <form class="coupon-form" onsubmit="applyCoupon(event)">
                        <input type="text" class="coupon-input" placeholder="Código do cupom" id="couponInput">
                        <button type="submit" class="coupon-btn">
                            Aplicar
                        </button>
                    </form>
                </div>

                <!-- Summary Items -->
                <div class="summary-items">
                    <div class="summary-item">
                        <span class="summary-label">
                            <i class="fas fa-shopping-bag"></i>
                            Subtotal (<span id="itemCount">4</span> itens)
                        </span>
                        <span class="summary-value" id="subtotal">R$ 655,60</span>
                    </div>

                    <div class="summary-item">
                        <span class="summary-label">
                            <i class="fas fa-truck"></i>
                            Frete
                        </span>
                        <span class="summary-value shipping" id="shipping">Grátis</span>
                    </div>

                    <div class="summary-item" id="discountRow" style="display: none;">
                        <span class="summary-label">
                            <i class="fas fa-tag"></i>
                            Desconto
                        </span>
                        <span class="summary-value discount" id="discount">-R$ 0,00</span>
                    </div>
                </div>

                <!-- Total -->
                <div class="summary-total">
                    <span class="total-label">Total</span>
                    <span class="total-value" id="total">R$ 655,60</span>
                </div>

                <!-- Installments -->
                <div class="installments">
                    <span>ou em até</span>
                    <strong id="installmentInfo">10x de R$ 65,56 sem juros</strong>
                </div>

                <!-- Buttons -->
                <button class="checkout-btn" onclick="goToCheckout()">
                    <span>Finalizar Compra</span>
                    <i class="fas fa-arrow-right"></i>
                </button>

                <button class="continue-shopping-btn" onclick="window.location.href='produtos.php'">
                    <i class="fas fa-shopping-bag"></i>
                    <span>Continuar Comprando</span>
                </button>

                <!-- Payment Methods -->
                <div class="payment-methods">
                    <p class="payment-title">Formas de Pagamento</p>
                    <div class="payment-icons">
                        <i class="fab fa-cc-visa"></i>
                        <i class="fab fa-cc-mastercard"></i>
                        <i class="fab fa-cc-amex"></i>
                        <i class="fab fa-pix"></i>
                        <i class="fas fa-barcode"></i>
                    </div>
                </div>

                <!-- Trust Badges -->
                <div class="trust-badges">
                    <div class="trust-badge">
                        <i class="fas fa-shield-alt"></i>
                        <span>Compra Segura</span>
                    </div>
                    <div class="trust-badge">
                        <i class="fas fa-undo"></i>
                        <span>Troca Grátis</span>
                    </div>
                    <div class="trust-badge">
                        <i class="fas fa-truck"></i>
                        <span>Entrega Rápida</span>
                    </div>
                </div>
            </aside>

        </div>

        <!-- Related Products -->
        <section class="related-products">
            <div class="related-header">
                <h2 class="related-title">Produtos Relacionados</h2>
                <p class="related-subtitle">Clientes que compraram esses itens também levaram</p>
            </div>

            <div class="related-grid">
                <div class="related-product">
                    <div class="related-product-image">
                        <i class="fas fa-hammer"></i>
                    </div>
                    <h3 class="related-product-name">Martelo Profissional 500g</h3>
                    <p class="related-product-price">R$ 45,90</p>
                    <button class="add-to-cart-small">
                        <i class="fas fa-cart-plus"></i> Adicionar
                    </button>
                </div>

                <div class="related-product">
                    <div class="related-product-image">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h3 class="related-product-name">Capacete de Segurança</h3>
                    <p class="related-product-price">R$ 35,90</p>
                    <button class="add-to-cart-small">
                        <i class="fas fa-cart-plus"></i> Adicionar
                    </button>
                </div>

                <div class="related-product">
                    <div class="related-product-image">
                        <i class="fas fa-screwdriver"></i>
                    </div>
                    <h3 class="related-product-name">Jogo Chaves Phillips 6 Peças</h3>
                    <p class="related-product-price">R$ 28,90</p>
                    <button class="add-to-cart-small">
                        <i class="fas fa-cart-plus"></i> Adicionar
                    </button>
                </div>

                <div class="related-product">
                    <div class="related-product-image">
                        <i class="fas fa-tape"></i>
                    </div>
                    <h3 class="related-product-name">Trena 5m Profissional</h3>
                    <p class="related-product-price">R$ 22,90</p>
                    <button class="add-to-cart-small">
                        <i class="fas fa-cart-plus"></i> Adicionar
                    </button>
                </div>
            </div>
        </section>

    </main>

    <!-- JavaScript -->
    <script>
    // Calcular totais
    function calculateTotals() {
        const items = document.querySelectorAll('.cart-item');
        let subtotal = 0;
        let itemCount = 0;

        items.forEach(item => {
            const price = parseFloat(item.getAttribute('data-price'));
            const qty = parseInt(item.querySelector('.qty-input').value);
            subtotal += price * qty;
            itemCount += qty;
        });

        // Atualizar valores
        document.getElementById('subtotal').textContent = `R$ ${subtotal.toFixed(2).replace('.', ',')}`;
        document.getElementById('itemCount').textContent = itemCount;

        // Frete grátis acima de 500
        const shipping = subtotal >= 500 ? 0 : 25;
        document.getElementById('shipping').textContent = shipping === 0 ? 'Grátis' :
            `R$ ${shipping.toFixed(2).replace('.', ',')}`;

        // Total
        const total = subtotal + shipping;
        document.getElementById('total').textContent = `R$ ${total.toFixed(2).replace('.', ',')}`;

        // Parcelamento
        const installmentValue = total / 10;
        document.getElementById('installmentInfo').textContent =
            `10x de R$ ${installmentValue.toFixed(2).replace('.', ',')} sem juros`;

        // Verificar se carrinho está vazio
        if (items.length === 0) {
            showEmptyCart();
        }
    }

    // Atualizar quantidade
    function updateQuantity(itemId, change) {
        const item = document.querySelector(`.cart-item[data-id="${itemId}"]`);
        const qtyInput = item.querySelector('.qty-input');
        const currentQty = parseInt(qtyInput.value);
        const newQty = currentQty + change;

        if (newQty > 0) {
            qtyInput.value = newQty;

            // Atualizar preço do item
            const price = parseFloat(item.getAttribute('data-price'));
            const totalPrice = price * newQty;
            item.querySelector('.item-total-price').textContent = `R$ ${totalPrice.toFixed(2).replace('.', ',')}`;

            // Recalcular totais
            calculateTotals();

            // Feedback visual
            item.style.transform = 'scale(0.98)';
            setTimeout(() => {
                item.style.transform = 'scale(1)';
            }, 200);
        }
    }

    // Remover item
    function removeItem(itemId) {
        if (confirm('Deseja realmente remover este item do carrinho?')) {
            const item = document.querySelector(`.cart-item[data-id="${itemId}"]`);

            // Animação de saída
            item.style.opacity = '0';
            item.style.transform = 'translateX(-20px)';

            setTimeout(() => {
                item.remove();
                calculateTotals();
            }, 300);
        }
    }

    // Mostrar carrinho vazio
    function showEmptyCart() {
        const cartLayout = document.getElementById('cartLayout');
        cartLayout.innerHTML = `
                <div class="empty-cart" style="grid-column: 1 / -1;">
                    <i class="fas fa-shopping-cart empty-cart-icon"></i>
                    <h2>Seu carrinho está vazio</h2>
                    <p>Adicione produtos para continuar comprando</p>
                    <button class="checkout-btn" onclick="window.location.href='produtos.php'" style="max-width: 300px; margin: 0 auto;">
                        <i class="fas fa-shopping-bag"></i>
                        <span>Ver Produtos</span>
                    </button>
                </div>
            `;
    }

    // Aplicar cupom
    function applyCoupon(event) {
        event.preventDefault();
        const couponInput = document.getElementById('couponInput');
        const coupon = couponInput.value.trim().toUpperCase();

        // Cupons de exemplo
        const validCoupons = {
            'CONSTRUMAX10': 10,
            'PRIMEIRACOMPRA': 15,
            'FRETE20': 20
        };

        if (validCoupons[coupon]) {
            const discountPercent = validCoupons[coupon];
            const subtotal = parseFloat(document.getElementById('subtotal').textContent.replace('R$ ', '').replace(',',
                '.'));
            const discountValue = subtotal * (discountPercent / 100);

            // Mostrar desconto
            document.getElementById('discountRow').style.display = 'flex';
            document.getElementById('discount').textContent = `-R$ ${discountValue.toFixed(2).replace('.', ',')}`;

            // Recalcular total
            const shipping = document.getElementById('shipping').textContent === 'Grátis' ? 0 : 25;
            const total = subtotal - discountValue + shipping;
            document.getElementById('total').textContent = `R$ ${total.toFixed(2).replace('.', ',')}`;

            // Feedback
            alert(`Cupom "${coupon}" aplicado! Desconto de ${discountPercent}%`);
            couponInput.value = '';
            couponInput.disabled = true;
        } else {
            alert('Cupom inválido!');
        }
    }

    // Ir para checkout
    function goToCheckout() {
        // Aqui você redirecionaria para a página de checkout
        window.location.href = 'checkout.php';
    }

    // Inicializar
    calculateTotals();

    // Salvar carrinho no localStorage (exemplo)
    function saveCart() {
        const items = [];
        document.querySelectorAll('.cart-item').forEach(item => {
            items.push({
                id: item.getAttribute('data-id'),
                quantity: parseInt(item.querySelector('.qty-input').value)
            });
        });
        localStorage.setItem('cart', JSON.stringify(items));
    }

    // Chamar saveCart ao modificar carrinho
    document.querySelectorAll('.qty-btn, .remove-item').forEach(btn => {
        btn.addEventListener('click', () => {
            setTimeout(saveCart, 500);
        });
    });
    </script>

</body>

</html>