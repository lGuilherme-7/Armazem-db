<?php
/**
 * LOGOUT.PHP
 * ConstruMax - Sistema de Logout
 * 
 * Este arquivo é responsável por:
 * - Encerrar a sessão do usuário
 * - Limpar todos os dados da sessão
 * - Destruir cookies de autenticação (se existirem)
 * - Redirecionar para a página inicial com mensagem de sucesso
 */

// Iniciar sessão (necessário para destruí-la)
session_start();

// ===========================
// LIMPAR DADOS DA SESSÃO
// ===========================

// Armazenar mensagem de sucesso antes de destruir a sessão
$_SESSION['logout_message'] = 'Você foi desconectado com sucesso!';

// Opcional: Salvar informações para analytics/log
if (isset($_SESSION['usuario_id'])) {
    $usuario_id = $_SESSION['usuario_id'];
    $usuario_nome = $_SESSION['usuario_nome'] ?? 'Usuário';
    
    // Aqui você pode registrar o logout no banco de dados
    // Exemplo:
    // include 'inc/db.php';
    // $stmt = $conn->prepare("INSERT INTO logs_acesso (usuario_id, acao, data_hora) VALUES (?, 'logout', NOW())");
    // $stmt->bind_param("i", $usuario_id);
    // $stmt->execute();
}

// Limpar todas as variáveis de sessão
$_SESSION = array();

// ===========================
// DESTRUIR COOKIES DE SESSÃO
// ===========================

// Se existir cookie de sessão, destruí-lo
if (isset($_COOKIE[session_name()])) {
    setcookie(
        session_name(), 
        '', 
        time() - 3600, 
        '/',
        '', 
        isset($_SERVER['HTTPS']), // secure
        true // httponly
    );
}

// Destruir cookies personalizados de "Lembrar-me" (se existirem)
$cookies_to_delete = [
    'remember_token',
    'user_id',
    'user_email',
    'construmax_auth'
];

foreach ($cookies_to_delete as $cookie_name) {
    if (isset($_COOKIE[$cookie_name])) {
        setcookie(
            $cookie_name,
            '',
            time() - 3600,
            '/',
            '',
            isset($_SERVER['HTTPS']),
            true
        );
    }
}

// ===========================
// DESTRUIR SESSÃO
// ===========================

session_destroy();

// ===========================
// LIMPAR CACHE DO NAVEGADOR
// ===========================

// Prevenir que o navegador volte para páginas autenticadas usando o botão "Voltar"
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Data no passado

// ===========================
// REDIRECIONAR
// ===========================

// Verificar se existe um parâmetro de redirecionamento
$redirect_to = isset($_GET['redirect']) ? $_GET['redirect'] : 'index.php';

// Lista de redirecionamentos permitidos (segurança)
$allowed_redirects = [
    'index.php',
    'produtos.php',
    'login.php'
];

// Validar redirecionamento
if (!in_array($redirect_to, $allowed_redirects)) {
    $redirect_to = 'index.php';
}

// Adicionar mensagem de sucesso na URL
$redirect_url = $redirect_to . '?logout=success';

// Redirecionar
header("Location: $redirect_url");
exit();

/**
 * NOTA: Se você quiser mostrar uma página de logout personalizada
 * ao invés de redirecionar imediatamente, comente o código acima
 * e descomente o código HTML abaixo
 */


?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout - ConstruMax</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    :root {
        --primary-blue: #2E86DE;
        --primary-orange: #FF8C42;
        --primary-green: #27AE60;
        --white: #FFFFFF;
        --light-gray: #ECF0F1;
        --dark-gray: #2C3E50;
        --gradient-primary: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-orange) 100%);
        --font-primary: 'Poppins', sans-serif;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: var(--font-primary);
        background: var(--gradient-primary);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem;
    }

    .logout-container {
        background: var(--white);
        border-radius: 30px;
        padding: 4rem 3rem;
        text-align: center;
        max-width: 500px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
        animation: slideUp 0.5s ease-out;
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

    .logout-icon {
        width: 100px;
        height: 100px;
        background: var(--gradient-primary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 2rem;
        animation: pulse 2s ease-in-out infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }
    }

    .logout-icon i {
        font-size: 3rem;
        color: var(--white);
    }

    .logout-title {
        font-size: 2rem;
        font-weight: 800;
        color: var(--dark-gray);
        margin-bottom: 1rem;
    }

    .logout-message {
        font-size: 1.125rem;
        color: var(--dark-gray);
        opacity: 0.8;
        margin-bottom: 2rem;
    }

    .redirect-info {
        font-size: 0.875rem;
        color: var(--dark-gray);
        opacity: 0.6;
        margin-bottom: 2rem;
    }

    .btn-home {
        display: inline-block;
        padding: 1rem 2.5rem;
        background: var(--gradient-primary);
        color: var(--white);
        text-decoration: none;
        border-radius: 50px;
        font-weight: 700;
        transition: 0.3s ease;
    }

    .btn-home:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(46, 134, 222, 0.3);
    }
    </style>
</head>

<body>
    <div class="logout-container">
        <div class="logout-icon">
            <i class="fas fa-sign-out-alt"></i>
        </div>
        <h1 class="logout-title">Até Logo!</h1>
        <p class="logout-message">
            Você foi desconectado com sucesso da ConstruMax.
        </p>
        <p class="redirect-info">
            Redirecionando em <span id="countdown">3</span> segundos...
        </p>
        <a href="index.php" class="btn-home">
            <i class="fas fa-home"></i> Voltar para Home
        </a>
    </div>

    <script>
    // Countdown de redirecionamento
    let countdown = 3;
    const countdownElement = document.getElementById('countdown');

    const timer = setInterval(() => {
        countdown--;
        countdownElement.textContent = countdown;

        if (countdown <= 0) {
            clearInterval(timer);
            window.location.href = 'index.php?logout=success';
        }
    }, 1000);
    </script>
</body>

</html>
<?php

?>