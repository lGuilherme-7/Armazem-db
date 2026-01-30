<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - ConstruMax | Materiais de Construção</title>
    <meta name="description" content="Crie sua conta ConstruMax e aproveite ofertas exclusivas">

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
        --gradient-hero: linear-gradient(135deg, rgba(46, 134, 222, 0.95) 0%, rgba(255, 140, 66, 0.95) 100%);

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
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem 1rem;
        position: relative;
    }

    /* Background animado */
    body::before {
        content: '';
        position: fixed;
        inset: 0;
        background: var(--gradient-primary);
        z-index: 0;
    }

    body::after {
        content: '';
        position: fixed;
        inset: 0;
        background-image:
            repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(255, 255, 255, .03) 35px, rgba(255, 255, 255, .03) 70px);
        animation: patternMove 30s linear infinite;
        z-index: 1;
    }

    @keyframes patternMove {
        0% {
            background-position: 0 0;
        }

        100% {
            background-position: 70px 70px;
        }
    }

    /* Elementos flutuantes decorativos */
    .bg-shapes {
        position: fixed;
        inset: 0;
        z-index: 2;
        overflow: hidden;
        pointer-events: none;
    }

    .shape {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
    }

    .shape-1 {
        width: 300px;
        height: 300px;
        top: -100px;
        right: -100px;
        animation: float1 20s ease-in-out infinite;
    }

    .shape-2 {
        width: 200px;
        height: 200px;
        bottom: -50px;
        left: 10%;
        animation: float2 15s ease-in-out infinite;
    }

    .shape-3 {
        width: 150px;
        height: 150px;
        top: 40%;
        left: -75px;
        animation: float3 18s ease-in-out infinite;
    }

    .shape-4 {
        width: 100px;
        height: 100px;
        top: 20%;
        right: 15%;
        animation: float2 12s ease-in-out infinite reverse;
    }

    @keyframes float1 {

        0%,
        100% {
            transform: translate(0, 0) rotate(0deg);
        }

        50% {
            transform: translate(50px, 50px) rotate(180deg);
        }
    }

    @keyframes float2 {

        0%,
        100% {
            transform: translate(0, 0) rotate(0deg);
        }

        50% {
            transform: translate(-30px, -40px) rotate(-180deg);
        }
    }

    @keyframes float3 {

        0%,
        100% {
            transform: translate(0, 0) rotate(0deg);
        }

        50% {
            transform: translate(-40px, 30px) rotate(180deg);
        }
    }

    /* ===========================
           SIGNUP CONTAINER
        =========================== */
    .signup-wrapper {
        position: relative;
        z-index: 10;
        width: 100%;
        max-width: 1200px;
        display: grid;
        grid-template-columns: 1fr 1.2fr;
        background: var(--white);
        border-radius: 30px;
        overflow: hidden;
        box-shadow: var(--shadow-lg);
        animation: slideUp 0.6s ease-out;
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ===========================
           LADO ESQUERDO - BRANDING
        =========================== */
    .signup-brand {
        background: var(--gradient-primary);
        padding: 4rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        color: var(--white);
        position: relative;
        overflow: hidden;
    }

    .signup-brand::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image:
            repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(255, 255, 255, .05) 35px, rgba(255, 255, 255, .05) 70px);
    }

    .brand-content {
        position: relative;
        z-index: 2;
    }

    .brand-logo {
        display: flex;
        align-items: center;
        gap: 1rem;
        font-size: 2rem;
        font-weight: 800;
        margin-bottom: 3rem;
    }

    .brand-logo i {
        font-size: 2.5rem;
        color: var(--primary-yellow);
    }

    .brand-title {
        font-size: 2.5rem;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 1.5rem;
    }

    .brand-title .highlight {
        color: var(--primary-yellow);
    }

    .brand-description {
        font-size: 1.125rem;
        opacity: 0.95;
        line-height: 1.8;
        margin-bottom: 2.5rem;
    }

    .brand-benefits {
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
    }

    .brand-benefit {
        display: flex;
        align-items: start;
        gap: 1rem;
        font-size: 1rem;
    }

    .brand-benefit i {
        font-size: 1.5rem;
        color: var(--primary-yellow);
        flex-shrink: 0;
        margin-top: 0.125rem;
    }

    .benefit-text strong {
        display: block;
        font-size: 1.125rem;
        margin-bottom: 0.25rem;
    }

    .benefit-text span {
        opacity: 0.9;
        font-size: 0.9rem;
    }

    .brand-illustration {
        position: relative;
        z-index: 2;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 2rem;
    }

    .illustration-placeholder {
        width: 200px;
        height: 200px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid rgba(255, 255, 255, 0.2);
        animation: float 4s ease-in-out infinite;
    }

    .illustration-placeholder i {
        font-size: 5rem;
        color: rgba(255, 255, 255, 0.3);
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    /* ===========================
           LADO DIREITO - FORMULÁRIO
        =========================== */
    .signup-form-section {
        padding: 4rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        max-height: 90vh;
        overflow-y: auto;
    }

    /* Estilizar scrollbar */
    .signup-form-section::-webkit-scrollbar {
        width: 8px;
    }

    .signup-form-section::-webkit-scrollbar-track {
        background: var(--light-gray);
        border-radius: 10px;
    }

    .signup-form-section::-webkit-scrollbar-thumb {
        background: var(--primary-blue);
        border-radius: 10px;
    }

    .form-header {
        margin-bottom: 2rem;
    }

    .back-link {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--medium-gray);
        font-size: 0.875rem;
        margin-bottom: 1.5rem;
        transition: var(--transition-base);
        text-decoration: none;
    }

    .back-link:hover {
        color: var(--primary-blue);
        gap: 0.75rem;
    }

    .form-title {
        font-size: 2rem;
        font-weight: 800;
        color: var(--dark-gray);
        margin-bottom: 0.5rem;
    }

    .form-subtitle {
        color: var(--medium-gray);
        font-size: 1rem;
    }

    /* Progress Steps */
    .progress-steps {
        display: flex;
        justify-content: space-between;
        margin: 2rem 0;
        position: relative;
    }

    .progress-steps::before {
        content: '';
        position: absolute;
        top: 20px;
        left: 0;
        right: 0;
        height: 2px;
        background: var(--light-gray);
        z-index: 0;
    }

    .progress-line {
        position: absolute;
        top: 20px;
        left: 0;
        height: 2px;
        background: var(--gradient-primary);
        z-index: 1;
        transition: width 0.3s ease;
    }

    .step {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.5rem;
        position: relative;
        z-index: 2;
    }

    .step-circle {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: var(--white);
        border: 2px solid var(--light-gray);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        color: var(--medium-gray);
        transition: var(--transition-base);
    }

    .step.active .step-circle {
        background: var(--gradient-primary);
        border-color: var(--primary-blue);
        color: var(--white);
    }

    .step.completed .step-circle {
        background: var(--primary-green);
        border-color: var(--primary-green);
        color: var(--white);
    }

    .step-label {
        font-size: 0.75rem;
        color: var(--medium-gray);
        font-weight: 600;
        text-align: center;
    }

    .step.active .step-label {
        color: var(--primary-blue);
    }

    /* Formulário */
    .signup-form {
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
    }

    .form-step {
        display: none;
        animation: fadeIn 0.3s ease-out;
    }

    .form-step.active {
        display: block;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateX(20px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
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

    .form-label i {
        color: var(--primary-orange);
    }

    .form-label .required {
        color: var(--primary-red);
    }

    .input-wrapper {
        position: relative;
    }

    .form-input,
    .form-select {
        width: 100%;
        padding: 0.875rem 0.875rem 0.875rem 2.75rem;
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

    .form-input.error,
    .form-select.error {
        border-color: var(--primary-red);
    }

    .form-input.success,
    .form-select.success {
        border-color: var(--primary-green);
    }

    .input-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--medium-gray);
        font-size: 1rem;
        pointer-events: none;
    }

    .form-input:focus+.input-icon,
    .form-select:focus+.input-icon {
        color: var(--primary-blue);
    }

    .toggle-password {
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: var(--medium-gray);
        font-size: 1rem;
        cursor: pointer;
        transition: var(--transition-base);
    }

    .toggle-password:hover {
        color: var(--primary-blue);
    }

    .error-message {
        font-size: 0.75rem;
        color: var(--primary-red);
        display: none;
        margin-top: 0.25rem;
    }

    .error-message.show {
        display: block;
    }

    /* Password Strength */
    .password-strength {
        margin-top: 0.5rem;
    }

    .strength-bars {
        display: flex;
        gap: 0.5rem;
        margin-bottom: 0.5rem;
    }

    .strength-bar {
        flex: 1;
        height: 4px;
        background: var(--light-gray);
        border-radius: 2px;
        transition: var(--transition-base);
    }

    .strength-bar.active {
        background: var(--primary-red);
    }

    .strength-bar.active.medium {
        background: var(--primary-yellow);
    }

    .strength-bar.active.strong {
        background: var(--primary-green);
    }

    .strength-text {
        font-size: 0.75rem;
        color: var(--medium-gray);
    }

    /* Checkbox/Radio personalizado */
    .checkbox-group,
    .radio-group {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .checkbox-wrapper,
    .radio-wrapper {
        display: flex;
        align-items: start;
        gap: 0.75rem;
    }

    .checkbox-wrapper input[type="checkbox"],
    .radio-wrapper input[type="radio"] {
        width: 20px;
        height: 20px;
        cursor: pointer;
        accent-color: var(--primary-blue);
        margin-top: 0.125rem;
        flex-shrink: 0;
    }

    .checkbox-wrapper label,
    .radio-wrapper label {
        font-size: 0.875rem;
        color: var(--dark-gray);
        cursor: pointer;
        line-height: 1.5;
    }

    .checkbox-wrapper label a {
        color: var(--primary-blue);
        font-weight: 600;
        text-decoration: none;
    }

    .checkbox-wrapper label a:hover {
        color: var(--primary-orange);
    }

    /* Botões de navegação */
    .form-actions {
        display: flex;
        gap: 1rem;
        margin-top: 1rem;
    }

    .btn {
        flex: 1;
        padding: 1rem;
        border-radius: 12px;
        font-family: var(--font-primary);
        font-size: 1rem;
        font-weight: 700;
        cursor: pointer;
        transition: var(--transition-base);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
    }

    .btn-back {
        background: var(--light-gray);
        color: var(--dark-gray);
        border: 2px solid var(--light-gray);
    }

    .btn-back:hover {
        background: var(--medium-gray);
        border-color: var(--medium-gray);
    }

    .btn-next,
    .btn-submit {
        background: var(--gradient-primary);
        color: var(--white);
        border: none;
    }

    .btn-next:hover,
    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-hover);
    }

    .btn-submit.loading {
        pointer-events: none;
        opacity: 0.8;
    }

    .btn .spinner {
        display: none;
        width: 20px;
        height: 20px;
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-top-color: var(--white);
        border-radius: 50%;
        animation: spin 0.6s linear infinite;
    }

    .btn.loading .spinner {
        display: block;
    }

    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }

    /* Divider */
    .divider {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin: 1.5rem 0;
    }

    .divider::before,
    .divider::after {
        content: '';
        flex: 1;
        height: 1px;
        background: var(--light-gray);
    }

    .divider span {
        color: var(--medium-gray);
        font-size: 0.875rem;
        font-weight: 500;
    }

    /* Social Signup */
    .social-signup {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
    }

    .social-btn {
        padding: 1rem;
        border: 2px solid var(--light-gray);
        border-radius: 12px;
        background: var(--white);
        color: var(--dark-gray);
        font-family: var(--font-primary);
        font-size: 0.875rem;
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition-base);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
    }

    .social-btn:hover {
        border-color: var(--primary-blue);
        background: rgba(46, 134, 222, 0.05);
    }

    .social-btn i {
        font-size: 1.25rem;
    }

    .social-btn.google i {
        color: #DB4437;
    }

    .social-btn.facebook i {
        color: #4267B2;
    }

    /* Login Link */
    .login-link {
        text-align: center;
        margin-top: 1.5rem;
        color: var(--medium-gray);
        font-size: 0.875rem;
    }

    .login-link a {
        color: var(--primary-blue);
        font-weight: 700;
        text-decoration: none;
        transition: var(--transition-base);
    }

    .login-link a:hover {
        color: var(--primary-orange);
    }

    /* Alert Messages */
    .alert {
        padding: 1rem 1.25rem;
        border-radius: 12px;
        font-size: 0.875rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.5rem;
        animation: slideDown 0.3s ease-out;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .alert-error {
        background: rgba(192, 57, 43, 0.1);
        color: var(--primary-red);
        border: 1px solid rgba(192, 57, 43, 0.2);
    }

    .alert-success {
        background: rgba(39, 174, 96, 0.1);
        color: var(--primary-green);
        border: 1px solid rgba(39, 174, 96, 0.2);
    }

    .alert i {
        font-size: 1.25rem;
    }

    /* ===========================
           RESPONSIVO
        =========================== */
    @media (max-width: 1024px) {
        .signup-wrapper {
            grid-template-columns: 1fr;
            max-width: 600px;
        }

        .signup-brand {
            display: none;
        }
    }

    @media (max-width: 768px) {
        body {
            padding: 1rem;
        }

        .signup-form-section {
            padding: 2.5rem 2rem;
        }

        .form-title {
            font-size: 1.75rem;
        }

        .form-row {
            grid-template-columns: 1fr;
        }

        .social-signup {
            grid-template-columns: 1fr;
        }

        .progress-steps {
            margin: 1.5rem 0;
        }

        .step-label {
            font-size: 0.7rem;
        }
    }

    @media (max-width: 480px) {
        .signup-form-section {
            padding: 2rem 1.5rem;
        }

        .form-title {
            font-size: 1.5rem;
        }

        .form-input,
        .form-select {
            padding: 0.75rem 0.75rem 0.75rem 2.5rem;
            font-size: 0.875rem;
        }

        .step-circle {
            width: 32px;
            height: 32px;
            font-size: 0.875rem;
        }
    }
    </style>
</head>

<body>
    <!-- Background Shapes -->
    <div class="bg-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="shape shape-4"></div>
    </div>

    <!-- Signup Container -->
    <div class="signup-wrapper">
        <!-- Lado Esquerdo - Branding -->
        <div class="signup-brand">
            <div class="brand-content">
                <div class="brand-logo">
                    <i class="fas fa-hard-hat"></i>
                    <span>ConstruMax</span>
                </div>

                <h1 class="brand-title">
                    Comece sua jornada na <span class="highlight">ConstruMax</span>
                </h1>

                <p class="brand-description">
                    Crie sua conta gratuitamente e tenha acesso a benefícios exclusivos,
                    promoções especiais e muito mais.
                </p>

                <div class="brand-benefits">
                    <div class="brand-benefit">
                        <i class="fas fa-gift"></i>
                        <div class="benefit-text">
                            <strong>Cashback em Compras</strong>
                            <span>Ganhe pontos a cada compra e troque por descontos</span>
                        </div>
                    </div>
                    <div class="brand-benefit">
                        <i class="fas fa-truck-fast"></i>
                        <div class="benefit-text">
                            <strong>Frete Grátis</strong>
                            <span>Em compras acima de R$ 500 para todo Brasil</span>
                        </div>
                    </div>
                    <div class="brand-benefit">
                        <i class="fas fa-star"></i>
                        <div class="benefit-text">
                            <strong>Ofertas Exclusivas</strong>
                            <span>Acesso antecipado a promoções e lançamentos</span>
                        </div>
                    </div>
                    <div class="brand-benefit">
                        <i class="fas fa-clock"></i>
                        <div class="benefit-text">
                            <strong>Histórico Completo</strong>
                            <span>Acompanhe todos os seus pedidos e orçamentos</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="brand-illustration">
                <div class="illustration-placeholder">
                    <i class="fas fa-user-plus"></i>
                </div>
            </div>
        </div>

        <!-- Lado Direito - Formulário -->
        <div class="signup-form-section">
            <div class="form-header">
                <a href="login.php" class="back-link">
                    <i class="fas fa-arrow-left"></i>
                    <span>Voltar para Login</span>
                </a>

                <h2 class="form-title">Criar Conta</h2>
                <p class="form-subtitle">Preencha os dados abaixo para começar</p>
            </div>

            <!-- Progress Steps -->
            <div class="progress-steps">
                <div class="progress-line" id="progressLine"></div>
                <div class="step active" data-step="1">
                    <div class="step-circle">1</div>
                    <span class="step-label">Dados Pessoais</span>
                </div>
                <div class="step" data-step="2">
                    <div class="step-circle">2</div>
                    <span class="step-label">Endereço</span>
                </div>
                <div class="step" data-step="3">
                    <div class="step-circle">3</div>
                    <span class="step-label">Segurança</span>
                </div>
            </div>

            <!-- Alert (hidden by default) -->
            <div id="alertContainer"></div>

            <form class="signup-form" id="signupForm" action="inc/auth.php" method="POST">
                <!-- Step 1: Dados Pessoais -->
                <div class="form-step active" data-step="1">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nome" class="form-label">
                                <i class="fas fa-user"></i>
                                <span>Nome <span class="required">*</span></span>
                            </label>
                            <div class="input-wrapper">
                                <input type="text" id="nome" name="nome" class="form-input" placeholder="Seu nome"
                                    required>
                                <i class="fas fa-user input-icon"></i>
                            </div>
                            <span class="error-message" id="nomeError"></span>
                        </div>

                        <div class="form-group">
                            <label for="sobrenome" class="form-label">
                                <i class="fas fa-user"></i>
                                <span>Sobrenome <span class="required">*</span></span>
                            </label>
                            <div class="input-wrapper">
                                <input type="text" id="sobrenome" name="sobrenome" class="form-input"
                                    placeholder="Seu sobrenome" required>
                                <i class="fas fa-user input-icon"></i>
                            </div>
                            <span class="error-message" id="sobrenomeError"></span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email" class="form-label">
                                <i class="fas fa-envelope"></i>
                                <span>E-mail <span class="required">*</span></span>
                            </label>
                            <div class="input-wrapper">
                                <input type="email" id="email" name="email" class="form-input"
                                    placeholder="seu@email.com" required autocomplete="email">
                                <i class="fas fa-envelope input-icon"></i>
                            </div>
                            <span class="error-message" id="emailError"></span>
                        </div>

                        <div class="form-group">
                            <label for="telefone" class="form-label">
                                <i class="fas fa-phone"></i>
                                <span>Telefone <span class="required">*</span></span>
                            </label>
                            <div class="input-wrapper">
                                <input type="tel" id="telefone" name="telefone" class="form-input"
                                    placeholder="(31) 99999-9999" required>
                                <i class="fas fa-phone input-icon"></i>
                            </div>
                            <span class="error-message" id="telefoneError"></span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="cpf" class="form-label">
                                <i class="fas fa-id-card"></i>
                                <span>CPF <span class="required">*</span></span>
                            </label>
                            <div class="input-wrapper">
                                <input type="text" id="cpf" name="cpf" class="form-input" placeholder="000.000.000-00"
                                    required>
                                <i class="fas fa-id-card input-icon"></i>
                            </div>
                            <span class="error-message" id="cpfError"></span>
                        </div>

                        <div class="form-group">
                            <label for="dataNascimento" class="form-label" required>
                                <i class="fas fa-calendar"></i>
                                <span>Data de Nascimento</span>
                            </label>
                            <div class="input-wrapper">
                                <input type="date" id="dataNascimento" name="data_nascimento" class="form-input">
                                <i class="fas fa-calendar input-icon"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-next" data-next="2">
                            <span>Próximo</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Step 2: Endereço -->
                <div class="form-step" data-step="2">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="cep" class="form-label">
                                <i class="fas fa-map-pin"></i>
                                <span>CEP <span class="required">*</span></span>
                            </label>
                            <div class="input-wrapper">
                                <input type="text" id="cep" name="cep" class="form-input" placeholder="00000-000"
                                    required>
                                <i class="fas fa-map-pin input-icon"></i>
                            </div>
                            <span class="error-message" id="cepError"></span>
                        </div>

                        <div class="form-group">
                            <label for="estado" class="form-label">
                                <i class="fas fa-map"></i>
                                <span>Estado <span class="required">*</span></span>
                            </label>
                            <div class="input-wrapper">
                                <select id="estado" name="estado" class="form-select" required>
                                    <option value="">Selecione</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="BA">Bahia</option>
                                    <!-- Adicionar mais outros estados -->
                                </select>
                                <i class="fas fa-map input-icon"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="cidade" class="form-label">
                                <i class="fas fa-city"></i>
                                <span>Cidade <span class="required">*</span></span>
                            </label>
                            <div class="input-wrapper">
                                <input type="text" id="cidade" name="cidade" class="form-input" placeholder="Sua cidade"
                                    required>
                                <i class="fas fa-city input-icon"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bairro" class="form-label">
                                <i class="fas fa-location-dot"></i>
                                <span>Bairro <span class="required">*</span></span>
                            </label>
                            <div class="input-wrapper">
                                <input type="text" id="bairro" name="bairro" class="form-input" placeholder="Seu bairro"
                                    required>
                                <i class="fas fa-location-dot input-icon"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label for="rua" class="form-label">
                            <i class="fas fa-road"></i>
                            <span>Rua <span class="required">*</span></span>
                        </label>
                        <div class="input-wrapper">
                            <input type="text" id="rua" name="rua" class="form-input" placeholder="Nome da rua"
                                required>
                            <i class="fas fa-road input-icon"></i>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="numero" class="form-label">
                                <i class="fas fa-hashtag"></i>
                                <span>Número <span class="required">*</span></span>
                            </label>
                            <div class="input-wrapper">
                                <input type="text" id="numero" name="numero" class="form-input" placeholder="Nº"
                                    required>
                                <i class="fas fa-hashtag input-icon"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="complemento" class="form-label">
                                <i class="fas fa-info-circle"></i>
                                <span>Complemento</span>
                            </label>
                            <div class="input-wrapper">
                                <input type="text" id="complemento" name="complemento" class="form-input"
                                    placeholder="Apto, Bloco...">
                                <i class="fas fa-info-circle input-icon"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-back" data-back="1">
                            <i class="fas fa-arrow-left"></i>
                            <span>Voltar</span>
                        </button>
                        <button type="button" class="btn btn-next" data-next="3">
                            <span>Próximo</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Step 3: Segurança -->
                <div class="form-step" data-step="3">
                    <div class="form-group full-width">
                        <label for="password" class="form-label">
                            <i class="fas fa-lock"></i>
                            <span>Senha <span class="required">*</span></span>
                        </label>
                        <div class="input-wrapper">
                            <input type="password" id="password" name="password" class="form-input"
                                placeholder="Mínimo 8 caracteres" required autocomplete="new-password">
                            <i class="fas fa-lock input-icon"></i>
                            <button type="button" class="toggle-password" data-target="password">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <div class="password-strength">
                            <div class="strength-bars">
                                <div class="strength-bar"></div>
                                <div class="strength-bar"></div>
                                <div class="strength-bar"></div>
                                <div class="strength-bar"></div>
                            </div>
                            <span class="strength-text" id="strengthText">A senha deve ter no mínimo 8 caracteres</span>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label for="confirmPassword" class="form-label">
                            <i class="fas fa-lock"></i>
                            <span>Confirmar Senha <span class="required">*</span></span>
                        </label>
                        <div class="input-wrapper">
                            <input type="password" id="confirmPassword" name="confirm_password" class="form-input"
                                placeholder="Digite a senha novamente" required autocomplete="new-password">
                            <i class="fas fa-lock input-icon"></i>
                            <button type="button" class="toggle-password" data-target="confirmPassword">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <span class="error-message" id="confirmPasswordError"></span>
                    </div>

                    <div class="form-group full-width">
                        <div class="checkbox-group">
                            <div class="checkbox-wrapper">
                                <input type="checkbox" id="newsletter" name="newsletter">
                                <label for="newsletter">
                                    Quero receber ofertas e novidades por e-mail
                                </label>
                            </div>

                            <div class="checkbox-wrapper">
                                <input type="checkbox" id="terms" name="terms" required>
                                <label for="terms">
                                    Eu concordo com os <a href="#">Termos de Uso</a> e
                                    <a href="#">Política de Privacidade</a> <span class="required">*</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-back" data-back="2">
                            <i class="fas fa-arrow-left"></i>
                            <span>Voltar</span>
                        </button>
                        <button type="submit" class="btn btn-submit" id="submitBtn">
                            <span>Criar Conta</span>
                            <i class="fas fa-check"></i>
                            <div class="spinner"></div>
                        </button>
                    </div>
                </div>
            </form>

            <div class="divider">
                <span>ou cadastre-se com</span>
            </div>

            <div class="social-signup">
                <button type="button" class="social-btn google">
                    <i class="fab fa-google"></i>
                    <span>Google</span>
                </button>
                <button type="button" class="social-btn facebook">
                    <i class="fab fa-facebook-f"></i>
                    <span>Facebook</span>
                </button>
            </div>

            <div class="login-link">
                Já tem uma conta? <a href="login.php">Entrar</a>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
    // State
    let currentStep = 1;
    const totalSteps = 3;

    // Elements
    const form = document.getElementById('signupForm');
    const steps = document.querySelectorAll('.form-step');
    const stepCircles = document.querySelectorAll('.step');
    const progressLine = document.getElementById('progressLine');
    const nextButtons = document.querySelectorAll('[data-next]');
    const backButtons = document.querySelectorAll('[data-back]');
    const submitBtn = document.getElementById('submitBtn');
    const alertContainer = document.getElementById('alertContainer');

    // Toggle Password
    document.querySelectorAll('.toggle-password').forEach(btn => {
        btn.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const input = document.getElementById(targetId);
            const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
            input.setAttribute('type', type);

            const icon = this.querySelector('i');
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        });
    });

    // Password Strength
    const passwordInput = document.getElementById('password');
    const strengthBars = document.querySelectorAll('.strength-bar');
    const strengthText = document.getElementById('strengthText');

    passwordInput.addEventListener('input', function() {
        const password = this.value;
        let strength = 0;

        if (password.length >= 8) strength++;
        if (password.match(/[a-z]+/)) strength++;
        if (password.match(/[A-Z]+/)) strength++;
        if (password.match(/[0-9]+/)) strength++;
        if (password.match(/[$@#&!]+/)) strength++;

        strengthBars.forEach((bar, index) => {
            bar.classList.remove('active', 'medium', 'strong');
            if (index < strength) {
                bar.classList.add('active');
                if (strength >= 3) bar.classList.add('medium');
                if (strength >= 4) bar.classList.add('strong');
            }
        });

        if (strength === 0) {
            strengthText.textContent = 'A senha deve ter no mínimo 8 caracteres';
        } else if (strength <= 2) {
            strengthText.textContent = 'Senha fraca';
        } else if (strength === 3) {
            strengthText.textContent = 'Senha média';
        } else {
            strengthText.textContent = 'Senha forte';
        }
    });

    // Máscaras
    function maskTelefone(value) {
        return value
            .replace(/\D/g, '')
            .replace(/(\d{2})(\d)/, '($1) $2')
            .replace(/(\d{5})(\d)/, '$1-$2')
            .replace(/(-\d{4})\d+?$/, '$1');
    }

    function maskCPF(value) {
        return value
            .replace(/\D/g, '')
            .replace(/(\d{3})(\d)/, '$1.$2')
            .replace(/(\d{3})(\d)/, '$1.$2')
            .replace(/(\d{3})(\d{1,2})$/, '$1-$2');
    }

    function maskCEP(value) {
        return value
            .replace(/\D/g, '')
            .replace(/(\d{5})(\d)/, '$1-$2')
            .replace(/(-\d{3})\d+?$/, '$1');
    }

    document.getElementById('telefone').addEventListener('input', function(e) {
        e.target.value = maskTelefone(e.target.value);
    });

    document.getElementById('cpf').addEventListener('input', function(e) {
        e.target.value = maskCPF(e.target.value);
    });

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

    // Navigation
    function updateProgress() {
        const progress = ((currentStep - 1) / (totalSteps - 1)) * 100;
        progressLine.style.width = `${progress}%`;

        stepCircles.forEach((step, index) => {
            const stepNum = index + 1;
            step.classList.remove('active', 'completed');

            if (stepNum < currentStep) {
                step.classList.add('completed');
                step.querySelector('.step-circle').innerHTML = '<i class="fas fa-check"></i>';
            } else if (stepNum === currentStep) {
                step.classList.add('active');
                step.querySelector('.step-circle').textContent = stepNum;
            } else {
                step.querySelector('.step-circle').textContent = stepNum;
            }
        });
    }

    function showStep(stepNumber) {
        steps.forEach(step => {
            step.classList.remove('active');
            if (parseInt(step.getAttribute('data-step')) === stepNumber) {
                step.classList.add('active');
            }
        });
        currentStep = stepNumber;
        updateProgress();
    }

    nextButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const nextStep = parseInt(this.getAttribute('data-next'));

            // Validar step atual
            if (validateStep(currentStep)) {
                showStep(nextStep);
            }
        });
    });

    backButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const backStep = parseInt(this.getAttribute('data-back'));
            showStep(backStep);
        });
    });

    // Validações
    function validateStep(step) {
        const currentStepEl = document.querySelector(`.form-step[data-step="${step}"]`);
        const inputs = currentStepEl.querySelectorAll('input[required], select[required]');
        let isValid = true;

        inputs.forEach(input => {
            if (!input.value.trim()) {
                input.classList.add('error');
                isValid = false;
            } else {
                input.classList.remove('error');

                // Validações específicas
                if (input.type === 'email') {
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(input.value)) {
                        input.classList.add('error');
                        showAlert('E-mail inválido', 'error');
                        isValid = false;
                    }
                }

                if (input.id === 'cpf') {
                    const cpf = input.value.replace(/\D/g, '');
                    if (cpf.length !== 11) {
                        input.classList.add('error');
                        showAlert('CPF inválido', 'error');
                        isValid = false;
                    }
                }
            }
        });

        if (!isValid) {
            showAlert('Por favor, preencha todos os campos obrigatórios', 'error');
        }

        return isValid;
    }

    // Submit
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // Validar senha
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirmPassword').value;

        if (password !== confirmPassword) {
            document.getElementById('confirmPassword').classList.add('error');
            showAlert('As senhas não coincidem', 'error');
            return;
        }

        if (password.length < 8) {
            document.getElementById('password').classList.add('error');
            showAlert('A senha deve ter no mínimo 8 caracteres', 'error');
            return;
        }

        // Verificar termos
        if (!document.getElementById('terms').checked) {
            showAlert('Você precisa aceitar os Termos de Uso', 'error');
            return;
        }

        // Loading state
        submitBtn.classList.add('loading');
        submitBtn.querySelector('span').textContent = 'Criando conta...';

        // Simular requisição (remover quando conectar com backend)
        setTimeout(() => {
            // Em produção, descomentar esta linha:
            // form.submit();

            // Simulação de sucesso (remover depois):
            submitBtn.classList.remove('loading');
            submitBtn.querySelector('span').textContent = 'Criar Conta';
            showAlert('Conta criada com sucesso! Redirecionando...', 'success');

            setTimeout(() => {
                window.location.href = 'login.php';
            }, 2000);
        }, 2000);
    });

    // Alert system
    function showAlert(message, type) {
        alertContainer.innerHTML = '';

        const alert = document.createElement('div');
        alert.className = `alert alert-${type}`;
        alert.innerHTML = `
                <i class="fas fa-${type === 'error' ? 'exclamation-circle' : 'check-circle'}"></i>
                <span>${message}</span>
            `;

        alertContainer.appendChild(alert);

        setTimeout(() => {
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 300);
        }, 5000);
    }

    // Remove error on input
    document.querySelectorAll('.form-input, .form-select').forEach(input => {
        input.addEventListener('input', function() {
            this.classList.remove('error');
        });
    });

    // Social Signup (placeholder)
    document.querySelectorAll('.social-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const provider = this.classList.contains('google') ? 'Google' : 'Facebook';
            showAlert(`Cadastro com ${provider} em desenvolvimento...`, 'error');
        });
    });

    // Initialize
    updateProgress();
    </script>
</body>

</html>