<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ConstruMax | Materiais de Construção</title>
    <meta name="description" content="Acesse sua conta ConstruMax">

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
        left: -100px;
        animation: float1 20s ease-in-out infinite;
    }

    .shape-2 {
        width: 200px;
        height: 200px;
        bottom: -50px;
        right: 10%;
        animation: float2 15s ease-in-out infinite;
    }

    .shape-3 {
        width: 150px;
        height: 150px;
        top: 30%;
        right: -75px;
        animation: float3 18s ease-in-out infinite;
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
           LOGIN CONTAINER
        =========================== */
    .login-wrapper {
        position: relative;
        z-index: 10;
        width: 100%;
        max-width: 1000px;
        display: grid;
        grid-template-columns: 1fr 1fr;
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
    .login-brand {
        background: var(--gradient-primary);
        padding: 4rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        color: var(--white);
        position: relative;
        overflow: hidden;
    }

    .login-brand::before {
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

    .brand-features {
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
    }

    .brand-feature {
        display: flex;
        align-items: center;
        gap: 1rem;
        font-size: 1rem;
    }

    .brand-feature i {
        font-size: 1.5rem;
        color: var(--primary-yellow);
        flex-shrink: 0;
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
    .login-form-section {
        padding: 4rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .form-header {
        margin-bottom: 2.5rem;
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

    /* Formulário */
    .login-form {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
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

    .input-wrapper {
        position: relative;
    }

    .form-input {
        width: 100%;
        padding: 1rem 1rem 1rem 3rem;
        border: 2px solid var(--light-gray);
        border-radius: 12px;
        font-family: var(--font-primary);
        font-size: 1rem;
        outline: none;
        transition: var(--transition-base);
        background: var(--white);
    }

    .form-input:focus {
        border-color: var(--primary-blue);
        box-shadow: 0 0 0 4px rgba(46, 134, 222, 0.1);
    }

    .form-input.error {
        border-color: var(--primary-red);
    }

    .input-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--medium-gray);
        font-size: 1.125rem;
        pointer-events: none;
    }

    .form-input:focus+.input-icon {
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
        font-size: 1.125rem;
        cursor: pointer;
        transition: var(--transition-base);
    }

    .toggle-password:hover {
        color: var(--primary-blue);
    }

    .form-options {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: -0.5rem;
    }

    .checkbox-wrapper {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .checkbox-wrapper input[type="checkbox"] {
        width: 18px;
        height: 18px;
        cursor: pointer;
        accent-color: var(--primary-blue);
    }

    .checkbox-wrapper label {
        font-size: 0.875rem;
        color: var(--dark-gray);
        cursor: pointer;
    }

    .forgot-password {
        color: var(--primary-blue);
        font-size: 0.875rem;
        font-weight: 600;
        text-decoration: none;
        transition: var(--transition-base);
    }

    .forgot-password:hover {
        color: var(--primary-orange);
    }

    .submit-btn {
        width: 100%;
        padding: 1.125rem;
        background: var(--gradient-primary);
        color: var(--white);
        border: none;
        border-radius: 12px;
        font-family: var(--font-primary);
        font-size: 1rem;
        font-weight: 700;
        cursor: pointer;
        transition: var(--transition-base);
        margin-top: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
    }

    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-hover);
    }

    .submit-btn:active {
        transform: translateY(0);
    }

    .submit-btn.loading {
        pointer-events: none;
        opacity: 0.8;
    }

    .submit-btn .spinner {
        display: none;
        width: 20px;
        height: 20px;
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-top-color: var(--white);
        border-radius: 50%;
        animation: spin 0.6s linear infinite;
    }

    .submit-btn.loading .spinner {
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

    /* Social Login */
    .social-login {
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

    /* Sign Up Link */
    .signup-link {
        text-align: center;
        margin-top: 1.5rem;
        color: var(--medium-gray);
        font-size: 0.875rem;
    }

    .signup-link a {
        color: var(--primary-blue);
        font-weight: 700;
        text-decoration: none;
        transition: var(--transition-base);
    }

    .signup-link a:hover {
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
        color: #27AE60;
        border: 1px solid rgba(39, 174, 96, 0.2);
    }

    .alert i {
        font-size: 1.25rem;
    }

    /* ===========================
           RESPONSIVO
        =========================== */
    @media (max-width: 768px) {
        body {
            padding: 1rem;
        }

        .login-wrapper {
            grid-template-columns: 1fr;
            max-width: 500px;
        }

        .login-brand {
            display: none;
        }

        .login-form-section {
            padding: 2.5rem 2rem;
        }

        .form-title {
            font-size: 1.75rem;
        }

        .social-login {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        .login-form-section {
            padding: 2rem 1.5rem;
        }

        .form-title {
            font-size: 1.5rem;
        }

        .form-input {
            padding: 0.875rem 0.875rem 0.875rem 2.75rem;
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
    </div>

    <!-- Login Container -->
    <div class="login-wrapper">
        <!-- Lado Esquerdo - Branding -->
        <div class="login-brand">
            <div class="brand-content">
                <div class="brand-logo">
                    <i class="fas fa-hard-hat"></i>
                    <span>ConstruMax</span>
                </div>

                <h1 class="brand-title">
                    Bem-vindo de volta à <span class="highlight">ConstruMax</span>
                </h1>

                <p class="brand-description">
                    Acesse sua conta e continue construindo seus projetos com os melhores materiais do mercado.
                </p>

                <div class="brand-features">
                    <div class="brand-feature">
                        <i class="fas fa-box"></i>
                        <span>Acesse seu histórico de pedidos</span>
                    </div>
                    <div class="brand-feature">
                        <i class="fas fa-heart"></i>
                        <span>Gerencie seus produtos favoritos</span>
                    </div>
                    <div class="brand-feature">
                        <i class="fas fa-shipping-fast"></i>
                        <span>Rastreie suas entregas em tempo real</span>
                    </div>
                    <div class="brand-feature">
                        <i class="fas fa-percent"></i>
                        <span>Ofertas e promoções exclusivas</span>
                    </div>
                </div>
            </div>

            <div class="brand-illustration">
                <div class="illustration-placeholder">
                    <i class="fas fa-user-hard-hat"></i>
                </div>
            </div>
        </div>

        <!-- Lado Direito - Formulário -->
        <div class="login-form-section">
            <div class="form-header">
                <a href="index.php" class="back-link">
                    <i class="fas fa-arrow-left"></i>
                    <span>Voltar para Home</span>
                </a>

                <h2 class="form-title">Entrar na Conta</h2>
                <p class="form-subtitle">Entre com seus dados para acessar</p>
            </div>

            <!-- Alert de erro (exemplo - escondido por padrão) -->
            <!-- <div class="alert alert-error">
                <i class="fas fa-exclamation-circle"></i>
                <span>Email ou senha incorretos. Tente novamente.</span>
            </div> -->

            <form class="login-form" action="inc/auth.php" method="POST" id="loginForm">
                <div class="form-group">
                    <label for="email" class="form-label">
                        <i class="fas fa-envelope"></i>
                        <span>E-mail</span>
                    </label>
                    <div class="input-wrapper">
                        <input type="email" id="email" name="email" class="form-input" placeholder="seu@email.com"
                            required autocomplete="email">
                        <i class="fas fa-envelope input-icon"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">
                        <i class="fas fa-lock"></i>
                        <span>Senha</span>
                    </label>
                    <div class="input-wrapper">
                        <input type="password" id="password" name="password" class="form-input" placeholder="••••••••"
                            required autocomplete="current-password">
                        <i class="fas fa-lock input-icon"></i>
                        <button type="button" class="toggle-password" id="togglePassword">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <div class="form-options">
                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Lembrar-me</label>
                    </div>
                    <a href="#" class="forgot-password">Esqueceu a senha?</a>
                </div>

                <button type="submit" class="submit-btn" id="submitBtn">
                    <span>Entrar</span>
                    <i class="fas fa-arrow-right"></i>
                    <div class="spinner"></div>
                </button>
            </form>

            <div class="divider">
                <span>ou continue com</span>
            </div>

            <div class="social-login">
                <button type="button" class="social-btn google">
                    <i class="fab fa-google"></i>
                    <span>Google</span>
                </button>
                <button type="button" class="social-btn facebook">
                    <i class="fab fa-facebook-f"></i>
                    <span>Facebook</span>
                </button>
            </div>

            <div class="signup-link">
                Não tem uma conta? <a href="cadastro.php">Cadastre-se</a>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
    // Toggle Password Visibility
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('click', function() {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);

        const icon = this.querySelector('i');
        icon.classList.toggle('fa-eye');
        icon.classList.toggle('fa-eye-slash');
    });

    // Form Validation & Submit
    const loginForm = document.getElementById('loginForm');
    const submitBtn = document.getElementById('submitBtn');
    const emailInput = document.getElementById('email');

    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();

        // Validação básica
        let isValid = true;

        // Validar email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailInput.value)) {
            emailInput.classList.add('error');
            showAlert('Por favor, insira um e-mail válido.', 'error');
            isValid = false;
        } else {
            emailInput.classList.remove('error');
        }

        // Validar senha
        if (passwordInput.value.length < 6) {
            passwordInput.classList.add('error');
            showAlert('A senha deve ter no mínimo 6 caracteres.', 'error');
            isValid = false;
        } else {
            passwordInput.classList.remove('error');
        }

        if (isValid) {
            // Adicionar estado de loading
            submitBtn.classList.add('loading');
            submitBtn.querySelector('span').textContent = 'Entrando...';

            // Simular requisição (remover quando conectar com backend)
            setTimeout(() => {
                // Aqui você faria a requisição real para inc/auth.php
                // Por enquanto, vamos simular sucesso

                // Em produção, descomentar esta linha:
                // loginForm.submit();

                // Simulação de sucesso (remover depois):
                submitBtn.classList.remove('loading');
                submitBtn.querySelector('span').textContent = 'Entrar';
                showAlert('Login realizado com sucesso! Redirecionando...', 'success');

                setTimeout(() => {
                    window.location.href = 'index.php';
                }, 1500);
            }, 2000);
        }
    });

    // Função para mostrar alertas
    function showAlert(message, type) {
        // Remove alertas existentes
        const existingAlerts = document.querySelectorAll('.alert');
        existingAlerts.forEach(alert => alert.remove());

        // Cria novo alerta
        const alert = document.createElement('div');
        alert.className = `alert alert-${type}`;
        alert.innerHTML = `
                <i class="fas fa-${type === 'error' ? 'exclamation-circle' : 'check-circle'}"></i>
                <span>${message}</span>
            `;

        // Insere antes do formulário
        const formHeader = document.querySelector('.form-header');
        formHeader.insertAdjacentElement('afterend', alert);

        // Remove depois de 5 segundos
        setTimeout(() => {
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 300);
        }, 5000);
    }

    // Remover classe de erro ao digitar
    emailInput.addEventListener('input', function() {
        this.classList.remove('error');
    });

    passwordInput.addEventListener('input', function() {
        this.classList.remove('error');
    });

    // Social Login (placeholder)
    document.querySelectorAll('.social-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const provider = this.classList.contains('google') ? 'Google' : 'Facebook';
            showAlert(`Login com ${provider} em desenvolvimento...`, 'error');
        });
    });

    // Forgot Password (placeholder)
    document.querySelector('.forgot-password').addEventListener('click', function(e) {
        e.preventDefault();
        showAlert('Funcionalidade de recuperação de senha em desenvolvimento...', 'error');
    });
    </script>
</body>

</html>