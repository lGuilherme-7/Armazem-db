<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Pedido - ConstruMax | Materiais de Construção</title>
    <meta name="description" content="Finalize sua compra com segurança na ConstruMax">

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

    .secure-checkout {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--primary-green);
        font-weight: 600;
    }

    .secure-checkout i {
        font-size: 1.25rem;
    }

    /* ===========================
           PROGRESS BAR
        =========================== */
    .progress-container {
        background: var(--white);
        padding: 2rem 0;
        box-shadow: var(--shadow-sm);
    }

    .checkout-steps {
        max-width: 1000px;
        margin: 0 auto;
        padding: 0 2rem;
        display: flex;
        justify-content: space-between;
        position: relative;
    }

    .checkout-steps::before {
        content: '';
        position: absolute;
        top: 25px;
        left: 15%;
        right: 15%;
        height: 2px;
        background: var(--light-gray);
        z-index: 0;
    }

    .progress-line {
        position: absolute;
        top: 25px;
        left: 15%;
        height: 2px;
        background: var(--gradient-primary);
        z-index: 1;
        transition: width 0.5s ease;
    }

    .checkout-step {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.75rem;
        position: relative;
        z-index: 2;
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
        transition: var(--transition-base);
    }

    .checkout-step.completed .step-icon {
        background: var(--primary-green);
        color: var(--white);
    }

    .checkout-step.active .step-icon {
        background: var(--gradient-primary);
        color: var(--white);
        box-shadow: var(--shadow-md);
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

    /* ===========================
           MAIN CONTENT
        =========================== */
    .checkout-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 3rem 2rem;
    }

    .checkout-layout {
        display: grid;
        grid-template-columns: 1fr 400px;
        gap: 2rem;
        align-items: start;
    }

    /* ===========================
           CHECKOUT FORMS
        =========================== */
    .checkout-main {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .checkout-section {
        background: var(--white);
        border-radius: 20px;
        padding: 2rem;
        box-shadow: var(--shadow-sm);
    }

    .section-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid var(--light-gray);
    }

    .section-title {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-size: 1.5rem;
        font-weight: 800;
        color: var(--dark-gray);
    }

    .section-title i {
        font-size: 1.75rem;
        background: var(--gradient-primary);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .section-badge {
        background: var(--primary-green);
        color: var(--white);
        padding: 0.25rem 0.75rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 700;
    }

    /* Forms */
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .form-group.full-width {
        grid-column: 1 / -1;
    }

    .form-label {
        font-weight: 600;
        color: var(--dark-gray);
        font-size: 0.875rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .required {
        color: var(--primary-red);
    }

    .input-wrapper {
        position: relative;
    }

    .form-input,
    .form-select {
        width: 100%;
        padding: 0.875rem 1rem;
        border: 2px solid var(--light-gray);
        border-radius: 12px;
        font-family: var(--font-primary);
        font-size: 0.9rem;
        outline: none;
        transition: var(--transition-base);
        background: var(--white);
    }

    .form-select {
        cursor: pointer;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23BDC3C7' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 1rem center;
        padding-right: 2.5rem;
    }

    .form-input:focus,
    .form-select:focus {
        border-color: var(--primary-blue);
        box-shadow: 0 0 0 4px rgba(46, 134, 222, 0.1);
    }

    /* Login Prompt */
    .login-prompt {
        background: linear-gradient(135deg, rgba(46, 134, 222, 0.1) 0%, rgba(255, 140, 66, 0.1) 100%);
        border: 2px solid var(--primary-blue);
        border-radius: 15px;
        padding: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1.5rem;
    }

    .login-prompt-text {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .login-prompt-text i {
        font-size: 2rem;
        color: var(--primary-blue);
    }

    .login-prompt-text div h4 {
        color: var(--dark-gray);
        font-size: 1.125rem;
        margin-bottom: 0.25rem;
    }

    .login-prompt-text div p {
        color: var(--medium-gray);
        font-size: 0.875rem;
    }

    .login-btn {
        padding: 0.75rem 2rem;
        background: var(--gradient-primary);
        color: var(--white);
        border: none;
        border-radius: 12px;
        font-weight: 700;
        cursor: pointer;
        transition: var(--transition-base);
        white-space: nowrap;
    }

    .login-btn:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    /* Delivery Options */
    .delivery-options {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .delivery-option {
        display: flex;
        align-items: start;
        gap: 1rem;
        padding: 1.5rem;
        border: 2px solid var(--light-gray);
        border-radius: 15px;
        cursor: pointer;
        transition: var(--transition-base);
    }

    .delivery-option:hover {
        border-color: var(--primary-blue);
        background: rgba(46, 134, 222, 0.03);
    }

    .delivery-option.selected {
        border-color: var(--primary-blue);
        background: rgba(46, 134, 222, 0.08);
    }

    .delivery-option input[type="radio"] {
        width: 20px;
        height: 20px;
        accent-color: var(--primary-blue);
        cursor: pointer;
        margin-top: 0.25rem;
    }

    .delivery-details {
        flex: 1;
    }

    .delivery-name {
        font-weight: 700;
        color: var(--dark-gray);
        margin-bottom: 0.25rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .delivery-badge {
        background: var(--primary-green);
        color: var(--white);
        padding: 0.125rem 0.5rem;
        border-radius: 4px;
        font-size: 0.7rem;
        font-weight: 700;
    }

    .delivery-time {
        color: var(--medium-gray);
        font-size: 0.875rem;
        margin-bottom: 0.5rem;
    }

    .delivery-description {
        color: var(--medium-gray);
        font-size: 0.8rem;
    }

    .delivery-price {
        font-size: 1.25rem;
        font-weight: 800;
        color: var(--primary-blue);
        white-space: nowrap;
    }

    .delivery-price.free {
        color: var(--primary-green);
    }

    /* Payment Methods */
    .payment-methods {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .payment-method {
        border: 2px solid var(--light-gray);
        border-radius: 15px;
        overflow: hidden;
        transition: var(--transition-base);
    }

    .payment-method.selected {
        border-color: var(--primary-blue);
    }

    .payment-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1.5rem;
        cursor: pointer;
        transition: var(--transition-base);
    }

    .payment-header:hover {
        background: rgba(46, 134, 222, 0.03);
    }

    .payment-method.selected .payment-header {
        background: rgba(46, 134, 222, 0.08);
    }

    .payment-header input[type="radio"] {
        width: 20px;
        height: 20px;
        accent-color: var(--primary-blue);
        cursor: pointer;
    }

    .payment-icon {
        width: 50px;
        height: 50px;
        background: var(--light-gray);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
    }

    .payment-icon.pix {
        color: var(--primary-green);
    }

    .payment-icon.credit {
        color: var(--primary-blue);
    }

    .payment-icon.boleto {
        color: var(--primary-orange);
    }

    .payment-info {
        flex: 1;
    }

    .payment-name {
        font-weight: 700;
        color: var(--dark-gray);
        margin-bottom: 0.25rem;
    }

    .payment-desc {
        color: var(--medium-gray);
        font-size: 0.875rem;
    }

    .payment-discount {
        background: var(--primary-green);
        color: var(--white);
        padding: 0.25rem 0.75rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 700;
        white-space: nowrap;
    }

    .payment-details {
        padding: 1.5rem;
        background: var(--light-gray);
        display: none;
    }

    .payment-method.selected .payment-details {
        display: block;
    }

    .card-form {
        display: grid;
        gap: 1rem;
    }

    .installments-select {
        grid-column: 1 / -1;
    }

    /* ===========================
           ORDER SUMMARY
        =========================== */
    .order-summary {
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

    /* Order Items */
    .order-items {
        max-height: 300px;
        overflow-y: auto;
        margin-bottom: 1.5rem;
        padding-right: 0.5rem;
    }

    .order-items::-webkit-scrollbar {
        width: 6px;
    }

    .order-items::-webkit-scrollbar-track {
        background: var(--light-gray);
        border-radius: 10px;
    }

    .order-items::-webkit-scrollbar-thumb {
        background: var(--primary-blue);
        border-radius: 10px;
    }

    .order-item {
        display: flex;
        gap: 1rem;
        padding: 1rem 0;
        border-bottom: 1px solid var(--light-gray);
    }

    .order-item:last-child {
        border-bottom: none;
    }

    .order-item-image {
        width: 60px;
        height: 60px;
        background: var(--light-gray);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .order-item-image i {
        font-size: 1.5rem;
        color: var(--medium-gray);
    }

    .order-item-details {
        flex: 1;
    }

    .order-item-name {
        font-weight: 700;
        font-size: 0.875rem;
        color: var(--dark-gray);
        margin-bottom: 0.25rem;
    }

    .order-item-qty {
        color: var(--medium-gray);
        font-size: 0.75rem;
    }

    .order-item-price {
        font-weight: 800;
        color: var(--primary-blue);
        font-size: 0.9rem;
    }

    /* Summary Totals */
    .summary-totals {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        padding-bottom: 1.5rem;
        border-bottom: 2px solid var(--light-gray);
        margin-bottom: 1.5rem;
    }

    .summary-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .summary-label {
        color: var(--medium-gray);
        font-size: 0.9rem;
    }

    .summary-value {
        font-weight: 700;
        color: var(--dark-gray);
    }

    .summary-value.discount {
        color: var(--primary-green);
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

    /* Place Order Button */
    .place-order-btn {
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

    .place-order-btn:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-hover);
    }

    .place-order-btn.loading {
        opacity: 0.8;
        pointer-events: none;
    }

    .spinner {
        display: none;
        width: 20px;
        height: 20px;
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-top-color: var(--white);
        border-radius: 50%;
        animation: spin 0.6s linear infinite;
    }

    .place-order-btn.loading .spinner {
        display: block;
    }

    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }

    /* Security Info */
    .security-info {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
        padding: 1rem;
        background: var(--light-gray);
        border-radius: 12px;
        margin-top: 1rem;
    }

    .security-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--medium-gray);
        font-size: 0.75rem;
    }

    .security-item i {
        color: var(--primary-green);
        font-size: 1rem;
    }

    /* ===========================
           RESPONSIVO
        =========================== */
    @media (max-width: 1024px) {
        .checkout-layout {
            grid-template-columns: 1fr;
        }

        .order-summary {
            position: static;
        }
    }

    @media (max-width: 768px) {
        .checkout-container {
            padding: 2rem 1rem;
        }

        .checkout-steps {
            padding: 0 1rem;
        }

        .step-label {
            font-size: 0.75rem;
        }

        .form-row {
            grid-template-columns: 1fr;
        }

        .login-prompt {
            flex-direction: column;
            gap: 1rem;
            text-align: center;
        }

        .login-prompt-text {
            flex-direction: column;
        }

        .delivery-option,
        .payment-header {
            flex-direction: column;
            align-items: start;
        }
    }

    @media (max-width: 480px) {
        .checkout-section {
            padding: 1.5rem;
        }

        .section-title {
            font-size: 1.25rem;
        }

        .step-icon {
            width: 40px;
            height: 40px;
            font-size: 1rem;
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
            <div class="secure-checkout">
                <i class="fas fa-shield-alt"></i>
                <span>Checkout Seguro</span>
            </div>
        </div>
    </header>

    <!-- Progress Bar -->
    <div class="progress-container">
        <div class="checkout-steps">
            <div class="progress-line" style="width: 33%;"></div>

            <div class="checkout-step completed">
                <div class="step-icon">
                    <i class="fas fa-check"></i>
                </div>
                <span class="step-label">Carrinho</span>
            </div>
            <div class="checkout-step active">
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
    </div>

    <!-- Main Content -->
    <main class="checkout-container">
        <div class="checkout-layout">

            <!-- Checkout Forms -->
            <div class="checkout-main">

                <!-- Login Prompt (se não logado) -->
                <div class="login-prompt">
                    <div class="login-prompt-text">
                        <i class="fas fa-user-circle"></i>
                        <div>
                            <h4>Já tem uma conta?</h4>
                            <p>Faça login para agilizar seu pedido</p>
                        </div>
                    </div>
                    <button class="login-btn" onclick="window.location.href='login.php'">
                        <i class="fas fa-sign-in-alt"></i> Entrar
                    </button>
                </div>

                <!-- Dados de Entrega -->
                <section class="checkout-section" id="deliverySection">
                    <div class="section-header">
                        <h2 class="section-title">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Endereço de Entrega</span>
                        </h2>
                    </div>

                    <form id="deliveryForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">
                                    Nome Completo <span class="required">*</span>
                                </label>
                                <input type="text" class="form-input" placeholder="Seu nome completo" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    Telefone <span class="required">*</span>
                                </label>
                                <input type="tel" class="form-input" placeholder="(31) 99999-9999" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">
                                    CEP <span class="required">*</span>
                                </label>
                                <input type="text" class="form-input" id="cep" placeholder="00000-000" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    Estado <span class="required">*</span>
                                </label>
                                <select class="form-select" id="estado" required>
                                    <option value="">Selecione</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">
                                    Cidade <span class="required">*</span>
                                </label>
                                <input type="text" class="form-input" id="cidade" placeholder="Sua cidade" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    Bairro <span class="required">*</span>
                                </label>
                                <input type="text" class="form-input" id="bairro" placeholder="Seu bairro" required>
                            </div>
                        </div>

                        <div class="form-group full-width">
                            <label class="form-label">
                                Rua <span class="required">*</span>
                            </label>
                            <input type="text" class="form-input" id="rua" placeholder="Nome da rua" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">
                                    Número <span class="required">*</span>
                                </label>
                                <input type="text" class="form-input" placeholder="Nº" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    Complemento
                                </label>
                                <input type="text" class="form-input" placeholder="Apto, Bloco...">
                            </div>
                        </div>
                    </form>
                </section>

                <!-- Opções de Entrega -->
                <section class="checkout-section">
                    <div class="section-header">
                        <h2 class="section-title">
                            <i class="fas fa-shipping-fast"></i>
                            <span>Método de Entrega</span>
                        </h2>
                    </div>

                    <div class="delivery-options">
                        <label class="delivery-option selected">
                            <input type="radio" name="delivery" value="express" checked>
                            <div class="delivery-details">
                                <div class="delivery-name">
                                    Entrega Expressa
                                    <span class="delivery-badge">RECOMENDADO</span>
                                </div>
                                <div class="delivery-time">Receba em até 24 horas</div>
                                <div class="delivery-description">
                                    Ideal para quem precisa com urgência
                                </div>
                            </div>
                            <div class="delivery-price">R$ 25,00</div>
                        </label>

                        <label class="delivery-option">
                            <input type="radio" name="delivery" value="standard">
                            <div class="delivery-details">
                                <div class="delivery-name">Entrega Padrão</div>
                                <div class="delivery-time">Receba em 3 a 5 dias úteis</div>
                                <div class="delivery-description">
                                    Entrega econômica para compras não urgentes
                                </div>
                            </div>
                            <div class="delivery-price">R$ 15,00</div>
                        </label>

                        <label class="delivery-option">
                            <input type="radio" name="delivery" value="free">
                            <div class="delivery-details">
                                <div class="delivery-name">Entrega Grátis</div>
                                <div class="delivery-time">Receba em 7 a 10 dias úteis</div>
                                <div class="delivery-description">
                                    Válido para compras acima de R$ 500,00
                                </div>
                            </div>
                            <div class="delivery-price free">GRÁTIS</div>
                        </label>

                        <label class="delivery-option">
                            <input type="radio" name="delivery" value="pickup">
                            <div class="delivery-details">
                                <div class="delivery-name">Retirar na Loja</div>
                                <div class="delivery-time">Disponível em 2 horas</div>
                                <div class="delivery-description">
                                    Retire no endereço: Av. Construção, 1234 - Gonçalves/MG

                                </div>
                            </div>
                            <div class="delivery-price free">GRÁTIS</div>
                        </label>
                    </div>
                </section>

                <!-- Forma de Pagamento -->
                <section class="checkout-section">
                    <div class="section-header">
                        <h2 class="section-title">
                            <i class="fas fa-credit-card"></i>
                            <span>Forma de Pagamento</span>
                        </h2>
                    </div>

                    <div class="payment-methods">

                        <!-- PIX -->
                        <div class="payment-method selected">
                            <div class="payment-header" onclick="selectPayment(this)">
                                <input type="radio" name="payment" value="pix" checked>
                                <div class="payment-icon pix">
                                    <i class="fab fa-pix"></i>
                                </div>
                                <div class="payment-info">
                                    <div class="payment-name">PIX</div>
                                    <div class="payment-desc">Aprovação imediata</div>
                                </div>
                                <div class="payment-discount">5% OFF</div>
                            </div>
                            <div class="payment-details">
                                <p style="color: var(--medium-gray); margin-bottom: 1rem;">
                                    <i class="fas fa-info-circle"></i>
                                    Após confirmar o pedido, você receberá o QR Code para pagamento
                                </p>
                                <div
                                    style="padding: 1rem; background: var(--white); border-radius: 10px; text-align: center;">
                                    <i class="fab fa-pix" style="font-size: 3rem; color: var(--primary-green);"></i>
                                    <p style="margin-top: 1rem; color: var(--medium-gray); font-size: 0.875rem;">
                                        QR Code será gerado após confirmação
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Cartão de Crédito -->
                        <div class="payment-method">
                            <div class="payment-header" onclick="selectPayment(this)">
                                <input type="radio" name="payment" value="credit">
                                <div class="payment-icon credit">
                                    <i class="fas fa-credit-card"></i>
                                </div>
                                <div class="payment-info">
                                    <div class="payment-name">Cartão de Crédito</div>
                                    <div class="payment-desc">Em até 10x sem juros</div>
                                </div>
                            </div>
                            <div class="payment-details">
                                <form class="card-form">
                                    <div class="form-group full-width">
                                        <label class="form-label">Número do Cartão</label>
                                        <input type="text" class="form-input" placeholder="0000 0000 0000 0000"
                                            maxlength="19">
                                    </div>
                                    <div class="form-group full-width">
                                        <label class="form-label">Nome no Cartão</label>
                                        <input type="text" class="form-input" placeholder="Como está no cartão">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label class="form-label">Validade</label>
                                            <input type="text" class="form-input" placeholder="MM/AA" maxlength="5">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">CVV</label>
                                            <input type="text" class="form-input" placeholder="000" maxlength="4">
                                        </div>
                                    </div>
                                    <div class="form-group installments-select">
                                        <label class="form-label">Parcelas</label>
                                        <select class="form-select">
                                            <option>1x de R$ 655,60 sem juros</option>
                                            <option>2x de R$ 327,80 sem juros</option>
                                            <option>3x de R$ 218,53 sem juros</option>
                                            <option>4x de R$ 163,90 sem juros</option>
                                            <option>5x de R$ 131,12 sem juros</option>
                                            <option>6x de R$ 109,27 sem juros</option>
                                            <option>7x de R$ 93,66 sem juros</option>
                                            <option>8x de R$ 81,95 sem juros</option>
                                            <option>9x de R$ 72,84 sem juros</option>
                                            <option>10x de R$ 65,56 sem juros</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Boleto -->
                        <div class="payment-method">
                            <div class="payment-header" onclick="selectPayment(this)">
                                <input type="radio" name="payment" value="boleto">
                                <div class="payment-icon boleto">
                                    <i class="fas fa-barcode"></i>
                                </div>
                                <div class="payment-info">
                                    <div class="payment-name">Boleto Bancário</div>
                                    <div class="payment-desc">Vencimento em 3 dias úteis</div>
                                </div>
                            </div>
                            <div class="payment-details">
                                <p style="color: var(--medium-gray); margin-bottom: 1rem;">
                                    <i class="fas fa-info-circle"></i>
                                    O boleto será enviado por e-mail após a confirmação do pedido
                                </p>
                                <div
                                    style="padding: 1rem; background: rgba(243, 156, 18, 0.1); border: 2px dashed var(--primary-orange); border-radius: 10px;">
                                    <i class="fas fa-exclamation-triangle" style="color: var(--primary-orange);"></i>
                                    <strong style="color: var(--primary-orange);"> Atenção:</strong>
                                    <span style="color: var(--medium-gray);"> O pedido só será processado após a
                                        confirmação do pagamento</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

            </div>

            <!-- Order Summary -->
            <aside class="order-summary">
                <h2 class="summary-title">Resumo do Pedido</h2>

                <!-- Order Items -->
                <div class="order-items">
                    <div class="order-item">
                        <div class="order-item-image">
                            <i class="fas fa-cube"></i>
                        </div>
                        <div class="order-item-details">
                            <div class="order-item-name">Cimento CP-II 50kg Votoran</div>
                            <div class="order-item-qty">Quantidade: 2</div>
                        </div>
                        <div class="order-item-price">R$ 65,80</div>
                    </div>

                    <div class="order-item">
                        <div class="order-item-image">
                            <i class="fas fa-paint-roller"></i>
                        </div>
                        <div class="order-item-details">
                            <div class="order-item-name">Tinta Látex Premium 18L</div>
                            <div class="order-item-qty">Quantidade: 1</div>
                        </div>
                        <div class="order-item-price">R$ 199,90</div>
                    </div>

                    <div class="order-item">
                        <div class="order-item-image">
                            <i class="fas fa-toolbox"></i>
                        </div>
                        <div class="order-item-details">
                            <div class="order-item-name">Kit Ferramentas 100 Peças</div>
                            <div class="order-item-qty">Quantidade: 1</div>
                        </div>
                        <div class="order-item-price">R$ 389,90</div>
                    </div>
                </div>

                <!-- Totals -->
                <div class="summary-totals">
                    <div class="summary-row">
                        <span class="summary-label">Subtotal</span>
                        <span class="summary-value" id="summarySubtotal">R$ 655,60</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Frete</span>
                        <span class="summary-value" id="summaryShipping">R$ 25,00</span>
                    </div>
                    <div class="summary-row" id="discountRow">
                        <span class="summary-label">Desconto PIX (5%)</span>
                        <span class="summary-value discount" id="summaryDiscount">-R$ 32,78</span>
                    </div>
                </div>

                <div class="summary-total">
                    <span class="total-label">Total</span>
                    <span class="total-value" id="summaryTotal">R$ 647,82</span>
                </div>

                <!-- Place Order Button -->
                <button class="place-order-btn" id="placeOrderBtn" onclick="placeOrder()">
                    <span>Finalizar Pedido</span>
                    <i class="fas fa-check-circle"></i>
                    <div class="spinner"></div>
                </button>

                <!-- Security Info -->
                <div class="security-info">
                    <div class="security-item">
                        <i class="fas fa-lock"></i>
                        <span>Pagamento 100% seguro e criptografado</span>
                    </div>
                    <div class="security-item">
                        <i class="fas fa-shield-alt"></i>
                        <span>Seus dados estão protegidos</span>
                    </div>
                    <div class="security-item">
                        <i class="fas fa-undo"></i>
                        <span>Troca grátis em 30 dias</span>
                    </div>
                </div>
            </aside>

        </div>
    </main>

    <!-- JavaScript -->
    <script>
    // Máscaras
    function maskCEP(value) {
        return value
            .replace(/\D/g, '')
            .replace(/(\d{5})(\d)/, '$1-$2')
            .replace(/(-\d{3})\d+?$/, '$1');
    }

    document.getElementById('cep').addEventListener('input', function(e) {
        e.target.value = maskCEP(e.target.value);
    });

    // Buscar CEP
    document.getElementById('cep').addEventListener('blur', function() {
        const cep = this.value.replace(/\D/g, '');

        if (cep.length === 8) {
            fetch(`https://viacep.com.br/ws/${cep}/json/`)
                .then(response => response.json())
                .then(data => {
                    if (!data.erro) {
                        document.getElementById('rua').value = data.logradouro;
                        document.getElementById('bairro').value = data.bairro;
                        document.getElementById('cidade').value = data.localidade;
                        document.getElementById('estado').value = data.uf;
                    }
                })
                .catch(err => console.log('Erro ao buscar CEP:', err));
        }
    });

    // Selecionar opção de entrega
    document.querySelectorAll('.delivery-option').forEach(option => {
        option.addEventListener('click', function() {
            document.querySelectorAll('.delivery-option').forEach(opt => {
                opt.classList.remove('selected');
            });
            this.classList.add('selected');
            this.querySelector('input[type="radio"]').checked = true;

            // Atualizar valor do frete
            updateShipping();
        });
    });

    // Selecionar forma de pagamento
    function selectPayment(element) {
        const paymentMethod = element.closest('.payment-method');

        document.querySelectorAll('.payment-method').forEach(method => {
            method.classList.remove('selected');
        });

        paymentMethod.classList.add('selected');
        paymentMethod.querySelector('input[type="radio"]').checked = true;

        // Atualizar desconto
        updateDiscount();
    }

    // Atualizar frete
    function updateShipping() {
        const selectedDelivery = document.querySelector('input[name="delivery"]:checked').value;
        let shippingValue = 0;

        switch (selectedDelivery) {
            case 'express':
                shippingValue = 25;
                break;
            case 'standard':
                shippingValue = 15;
                break;
            case 'free':
            case 'pickup':
                shippingValue = 0;
                break;
        }

        document.getElementById('summaryShipping').textContent =
            shippingValue === 0 ? 'GRÁTIS' : `R$ ${shippingValue.toFixed(2).replace('.', ',')}`;

        updateTotal();
    }

    // Atualizar desconto
    function updateDiscount() {
        const selectedPayment = document.querySelector('input[name="payment"]:checked').value;
        const discountRow = document.getElementById('discountRow');
        const subtotal = 655.60;

        if (selectedPayment === 'pix') {
            const discount = subtotal * 0.05;
            discountRow.style.display = 'flex';
            document.getElementById('summaryDiscount').textContent =
                `-R$ ${discount.toFixed(2).replace('.', ',')}`;
        } else {
            discountRow.style.display = 'none';
        }

        updateTotal();
    }

    // Atualizar total
    function updateTotal() {
        const subtotal = 655.60;
        const shippingText = document.getElementById('summaryShipping').textContent;
        const shipping = shippingText === 'GRÁTIS' ? 0 :
            parseFloat(shippingText.replace('R$ ', '').replace(',', '.'));

        const selectedPayment = document.querySelector('input[name="payment"]:checked').value;
        const discount = selectedPayment === 'pix' ? subtotal * 0.05 : 0;

        const total = subtotal + shipping - discount;

        document.getElementById('summaryTotal').textContent =
            `R$ ${total.toFixed(2).replace('.', ',')}`;
    }

    // Finalizar pedido
    function placeOrder() {
        const btn = document.getElementById('placeOrderBtn');

        // Validar formulário de entrega
        const deliveryForm = document.getElementById('deliveryForm');
        if (!deliveryForm.checkValidity()) {
            deliveryForm.reportValidity();
            return;
        }

        // Loading state
        btn.classList.add('loading');
        btn.querySelector('span').textContent = 'Processando...';

        // Simular processamento
        setTimeout(() => {
            // Aqui você enviaria os dados para o backend
            // Por enquanto, vamos simular sucesso

            alert('Pedido realizado com sucesso! Você será redirecionado para a página de confirmação.');

            // Redirecionar para página de confirmação (quando criar)
            // window.location.href = 'pedido-confirmado.php';

            btn.classList.remove('loading');
            btn.querySelector('span').textContent = 'Finalizar Pedido';
        }, 2000);
    }

    // Máscara para cartão de crédito
    const creditCardInputs = document.querySelectorAll('.card-form input');
    if (creditCardInputs.length > 0) {
        creditCardInputs[0].addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            value = value.replace(/(\d{4})(?=\d)/g, '$1 ');
            e.target.value = value;
        });

        creditCardInputs[2].addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length >= 2) {
                value = value.substring(0, 2) + '/' + value.substring(2, 4);
            }
            e.target.value = value;
        });
    }

    // Inicializar
    updateTotal();
    </script>

</body>

</html>