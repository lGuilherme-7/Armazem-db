<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConstruMax</title>
    <meta name="description" content="Os melhores materiais de construção com entrega rápida e preços competitivos.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- css -->
    <link rel="stylesheet" href="../assets/css/style.css">


</head>

<body>
    <!--===========================HEADER===========================-->
    <header class="header" id="header">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="top-bar-left">

                    <a href="tel:+5581999999999">
                        <i class="fas fa-phone-alt"></i>
                        <span>(81) 9111-0000</span>
                    </a>

                    <a href="mailto:contato@construmax.com.br">
                        <i class="fas fa-envelope"></i>
                        <span>contato@construmax.com.br</span>
                    </a>

                </div>
                <div class="top-bar-right">
                    <a href="#">
                        <i class="fas fa-truck"></i>
                        <span>Frete Grátis acima de R$ 1000!</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Header -->
        <div class="main-header">
            <div class="container">

                <!-- Logo -->
                <a href="index.php" class="logo">
                    <i class="fas fa-hard-hat"></i>
                    <span>ConstruMax</span>
                </a>

                <!-- Busca -->
                <div class="search-bar">
                    <form class="search-form" action="produtos.php" method="GET">

                        <input type="text" class="search-input" name="busca"
                            placeholder="Buscar produtos, categorias..." required>

                        <button type="submit" class="search-btn">
                            <i class="fas fa-search"></i>
                        </button>

                    </form>
                </div>

                <!-- Actions -->
                <div class="header-actions">

                    <a href="login.php" class="header-btn">
                        <i class="fas fa-user"></i>
                        <span>login</span>
                    </a>

                    <a href="carrinho.php" class="header-btn">

                        <i class="fas fa-shopping-cart"></i>
                        <span>Carrinho</span>
                        <span class="cart-badge">3</span>
                    </a>

                </div>

                <!-- Mobile Toggle -->
                <button class="mobile-toggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="navigation">
            <div class="nav-container">
                <ul class="nav-menu">


                    <!-- colocar Links em todos os arquivos-->
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active">
                            <i class="fas fa-home"></i>
                            <span>Início</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-box"></i>
                            <span>Produtos</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-tags"></i>
                            <span>Promoções</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-percentage"></i>
                            <span>Ofertas</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-question-circle"></i>
                            <span>Ajuda</span>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <!-- ===========================
         HERO SECTION
    =========================== -->
    <section class="hero">
        <div class="hero-pattern"></div>
        <div class="hero-container">
            <div class="hero-content">


                <!--  <div class="hero-badge">
                    <i class="fas fa-bolt"></i>
                    <span>Entrega Expressa Disponível</span>
                </div> -->

                <h1 class="hero-title">
                    Construa seus <span class="highlight">sonhos</span> com qualidade
                </h1>

                <p class="hero-description">
                    Os melhores materiais de construção com preços imbatíveis.
                    Atendemos profissionais e particulares com a mesma excelência.
                </p>

                <div class="hero-actions">
                    <a href="produtos.php" class="btn btn-primary">
                        <span>Ver Produtos</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>

                    <a href="https://wa.me/5581987028550?text=ol%C3%A1%2C%20o%20site%20ainda%20est%C3%A1%20em%20constru%C3%A7%C3%A3o%20%3A(%0A(%20aguarde%20atualiza%C3%A7%C3%B5es...%F0%9F%98%9D)"
                        class="btn btn-secondary">
                        <i class="fas fa-calculator"></i>
                        <span>Fazer Orçamento</span>
                    </a>
                </div>

                <div class="hero-features">

                    <div class="hero-feature">
                        <i class="fas fa-shipping-fast"></i>

                        <div class="hero-feature-text">
                            <strong>Entrega Rápida</strong>
                            <span>Em até 24h</span>
                        </div>

                    </div>
                    <div class="hero-feature">
                        <i class="fas fa-shield-alt"></i>
                        <div class="hero-feature-text">
                            <strong>Garantia Total</strong>
                            <span>Produtos certificados</span>
                        </div>
                    </div>

                    <!--<div class="hero-feature">
                        <i class="fas fa-headset"></i>
                        <div class="hero-feature-text">
                            <strong>Suporte 24/7</strong>
                            <span>Estamos aqui por você</span>
                        </div>

                    </div> -->

                </div>
            </div>

            <div class="hero-image">
                <div class="hero-image-placeholder">
                    <i class="fas fa-tools"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- ===========================
         CATEGORIAS
    =========================== -->
    <section class="categories">
        <div class="container">
            <div class="section-header">
                <div class="section-subtitle">Categorias</div>
                <h2 class="section-title">Encontre o que Precisa</h2>
                <p class="section-description">
                    Navegue por nossas categorias e encontre exatamente o que você procura para sua obra
                </p>
            </div>
            <!-- colcoar os links em todos os arquivos-->

            <div class="categories-grid">
                <a href="produtos.php?categoria=cimento" class="category-card">
                    <i class="fas fa-cube category-icon"></i>
                    <h3 class="category-name">Cimento & Argamassa</h3>
                    <p class="category-count">245 produtos</p>
                </a>

                <a href="produtos.php?categoria=tintas" class="category-card">
                    <i class="fas fa-paint-roller category-icon"></i>
                    <h3 class="category-name">Tintas & Vernizes</h3>
                    <p class="category-count">189 produtos</p>
                </a>

                <a href="produtos.php?categoria=ferramentas" class="category-card">
                    <i class="fas fa-hammer category-icon"></i>
                    <h3 class="category-name">Ferramentas</h3>
                    <p class="category-count">432 produtos</p>
                </a>

                <a href="produtos.php?categoria=eletrica" class="category-card">
                    <i class="fas fa-bolt category-icon"></i>
                    <h3 class="category-name">Elétrica</h3>
                    <p class="category-count">356 produtos</p>
                </a>

                <a href="produtos.php?categoria=hidraulica" class="category-card">
                    <i class="fas fa-faucet category-icon"></i>
                    <h3 class="category-name">Hidráulica</h3>
                    <p class="category-count">298 produtos</p>
                </a>

                <a href="produtos.php?categoria=pisos" class="category-card">
                    <i class="fas fa-border-all category-icon"></i>
                    <h3 class="category-name">Pisos & Revestimentos</h3>
                    <p class="category-count">567 produtos</p>
                </a>
            </div>
        </div>
    </section>

    <!-- ===========================
         PRODUTOS EM DESTAQUE
    =========================== -->
    <section class="featured-products">
        <div class="container">
            <div class="section-header">
                <div class="section-subtitle">Destaques</div>
                <h2 class="section-title">Produtos Mais Vendidos</h2>
                <p class="section-description">
                    Confira os produtos preferidos dos nossos clientes
                </p>
            </div>

            <div class="products-grid">
                <!-- Produto 1 -->
                <div class="product-card">
                    <div class="product-badge badge-bestseller">Mais Vendido</div>
                    <div class="product-image">
                        <div class="product-image-placeholder">
                            <i class="fas fa-cube"></i>
                        </div>

                        <div class="product-quick-actions">
                            <button class="quick-action-btn" title="Visualizar">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="quick-action-btn" title="Favoritar">
                                <i class="fas fa-heart"></i>
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
                                <span class="price-current">R$ 32,90</span>
                            </div>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>

                    </div>
                </div>

                <!-- Produto 2 -->
                <div class="product-card">

                    <div class="product-badge badge-sale">-20%</div>
                    <div class="product-image">
                        <div class="product-image-placeholder">
                            <i class="fas fa-paint-roller"></i>
                        </div>

                        <div class="product-quick-actions">
                            <button class="quick-action-btn" title="Visualizar">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="quick-action-btn" title="Favoritar">
                                <i class="fas fa-heart"></i>
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
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>

                        </div>

                    </div>
                </div>

                <!-- Produto 3 -->
                <div class="product-card">
                    <div class="product-badge badge-new">Lançamento</div>
                    <div class="product-image">
                        <div class="product-image-placeholder">
                            <i class="fas fa-toolbox"></i>
                        </div>
                        <div class="product-quick-actions">
                            <button class="quick-action-btn" title="Visualizar">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="quick-action-btn" title="Favoritar">
                                <i class="fas fa-heart"></i>
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
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>

                    </div>
                </div>

                <!-- Produto 4 -->
                <div class="product-card">
                    <div class="product-image">
                        <div class="product-image-placeholder">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div class="product-quick-actions">
                            <button class="quick-action-btn" title="Visualizar">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="quick-action-btn" title="Favoritar">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>

                    </div>
                    <div class="product-info">
                        <div class="product-category">Elétrica</div>
                        <h3 class="product-name">Lâmpada LED 12W Bivolt Kit 10un</h3>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="rating-count">(312)</span>
                        </div>

                        <div class="product-footer">
                            <div class="product-price">
                                <span class="price-current">R$ 89,90</span>
                            </div>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>

                    </div>
                </div>

                <!-- Produto 5 -->
                <div class="product-card">
                    <div class="product-badge badge-sale">-15%</div>
                    <div class="product-image">
                        <div class="product-image-placeholder">
                            <i class="fas fa-shower"></i>
                        </div>
                        <div class="product-quick-actions">
                            <button class="quick-action-btn" title="Visualizar">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="quick-action-btn" title="Favoritar">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>

                    </div>
                    <div class="product-info">
                        <div class="product-category">Hidráulica</div>
                        <h3 class="product-name">Torneira Monocomando Cromada Deca</h3>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-count">(156)</span>
                        </div>

                        <div class="product-footer">
                            <div class="product-price">
                                <span class="price-old">R$ 299,90</span>
                                <span class="price-current">R$ 254,90</span>
                            </div>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>

                    </div>
                </div>

                <!-- Produto 6 -->
                <div class="product-card">
                    <div class="product-badge badge-bestseller">Mais Vendido</div>
                    <div class="product-image">
                        <div class="product-image-placeholder">
                            <i class="fas fa-th"></i>
                        </div>
                        <div class="product-quick-actions">
                            <button class="quick-action-btn" title="Visualizar">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="quick-action-btn" title="Favoritar">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>

                    <div class="product-info">
                        <div class="product-category">Pisos</div>
                        <h3 class="product-name">Porcelanato 60x60 Polido Eliane</h3>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="rating-count">(278)</span>
                        </div>

                        <div class="product-footer">
                            <div class="product-price">
                                <span class="price-current">R$ 54,90</span>
                            </div>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>

                    </div>
                </div>

                <!-- Produto 7 -->
                <div class="product-card">
                    <div class="product-image">
                        <div class="product-image-placeholder">
                            <i class="fas fa-fire"></i>
                        </div>
                        <div class="product-quick-actions">
                            <button class="quick-action-btn" title="Visualizar">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="quick-action-btn" title="Favoritar">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>

                    <div class="product-info">
                        <div class="product-category">Ferramentas</div>
                        <h3 class="product-name">Furadeira Impact 650W DeWalt</h3>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-count">(423)</span>
                        </div>
                        <div class="product-footer">
                            <div class="product-price">
                                <span class="price-current">R$ 459,90</span>
                            </div>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>

                    </div>
                </div>

                <!-- Produto 8 -->
                <div class="product-card">
                    <div class="product-badge badge-new">Lançamento</div>
                    <div class="product-image">
                        <div class="product-image-placeholder">
                            <i class="fas fa-plug"></i>
                        </div>
                        <div class="product-quick-actions">
                            <button class="quick-action-btn" title="Visualizar">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="quick-action-btn" title="Favoritar">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>

                    </div>
                    <div class="product-info">
                        <div class="product-category">Elétrica</div>
                        <h3 class="product-name">Disjuntor Tripolar 50A Schneider</h3>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="rating-count">(89)</span>
                        </div>

                        <div class="product-footer">
                            <div class="product-price">
                                <span class="price-current">R$ 124,90</span>
                            </div>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===========================
         BANNER PROMOCIONAL
    =========================== -->
    <section class="promo-banner">
        <div class="container">
            <div class="promo-content">
                <div class="promo-text">

                    <span class="promo-label">OFERTA ESPECIAL</span>
                    <h2 class="promo-title">
                        Até <span class="highlight">40% OFF</span> em<br>
                        Ferramentas Elétricas
                    </h2>
                    <p class="promo-description">
                        Equipamentos profissionais das melhores marcas com preços imperdíveis.
                        Promoção válida até acabar o estoque.
                    </p>
                    <div class="promo-features">
                        <div class="promo-feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Produtos Originais</span>
                        </div>
                        <div class="promo-feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Garantia de Fábrica</span>
                        </div>
                        <div class="promo-feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Entrega Rápida</span>
                        </div>
                        <div class="promo-feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Parcelamento Facilitado</span>
                        </div>
                    </div>
                    <div style="margin-top: 2rem;">
                        <a href="produtos.php?categoria=ferramentas&promocao=1" class="btn btn-primary">
                            <span>Ver Ofertas</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="promo-image">
                    <div class="promo-image-placeholder">
                        <i class="fas fa-tools"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===========================
         NEWSLETTER
    =========================== -->
    <section class="newsletter">
        <div class="container">

            <div class="newsletter-content">
                <i class="fas fa-envelope-open-text newsletter-icon"></i>
                <h2 class="newsletter-title">Fique por Dentro das Novidades</h2>
                <p class="newsletter-description">
                    Cadastre-se e receba promoções exclusivas, lançamentos e dicas para sua obra
                </p>

                <form class="newsletter-form" action="#" method="POST">
                    <input type="email" class="newsletter-input" placeholder="Seu melhor e-mail" required>
                    <button type="submit" class="newsletter-btn">
                        <i class="fas fa-paper-plane"></i>
                        Cadastrar
                    </button>
                </form>

            </div>
        </div>
    </section>

    <!-- ===========================
         FOOTER
    =========================== -->
    <footer class="footer">
        <div class="container">
            <div class="footer-main">
                <!-- About -->
                <div class="footer-about">
                    <div class="footer-logo">
                        <i class="fas fa-hard-hat"></i>
                        <span>ConstruMax</span>
                    </div>
                    <p class="footer-description">
                        Sua loja completa de materiais de construção.
                        Qualidade, variedade e os melhores preços para sua obra.
                    </p>
                    <div class="footer-social">
                        <a href="#" class="social-btn">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-btn">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-btn">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="https://wa.me/5581987028550?text=ol%C3%A1%2C%20o%20site%20ainda%20est%C3%A1%20em%20constru%C3%A7%C3%A3o%20%3A(%0A(%20aguarde%20atualiza%C3%A7%C3%B5es...%F0%9F%98%9D)"
                            class="social-btn">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Links Rápidos -->
                <div class="footer-column">
                    <h4>Links Rápidos</h4>
                    <ul class="footer-links">
                        <li><a href="produtos.php">Produtos</a></li>
                        <li><a href="#">Promoções</a></li>
                        <li><a href="#">Sobre Nós</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Trabalhe Conosco</a></li>
                    </ul>
                </div>

                <!-- Atendimento -->
                <div class="footer-column">
                    <h4>Atendimento</h4>
                    <ul class="footer-links">
                        <li><a href="#">Central de Ajuda</a></li>
                        <li><a href="#">Política de Troca</a></li>
                        <li><a href="#">Formas de Pagamento</a></li>
                        <li><a href="#">Rastreio de Pedidos</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>

                <!-- Contato -->
                <div class="footer-column">
                    <h4>Contato</h4>
                    <div class="footer-contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Av. Construção, 1234<br>Aqui - PE</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-phone"></i>
                        <span>(31) 99999-9999</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>contato@construmax.com.br</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-clock"></i>
                        <span>Seg-Sex: 8h-18h<br>Sáb: 8h-12h</span>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p>&copy; 2026 ConstruMax. Todos os direitos reservados.</p>
                <div class="footer-payment">
                    <span>Formas de Pagamento:</span>
                    <i class="fab fa-cc-visa"></i>
                    <i class="fab fa-cc-mastercard"></i>
                    <i class="fab fa-cc-amex"></i>
                    <i class="fab fa-pix"></i>
                    <i class="fas fa-barcode"></i>
                </div>
            </div>
        </div>
    </footer>

    <!-- ===========================
         BOTÕES FLUTUANTES
    =========================== -->
    <a href="https://wa.me/5581987028550?text=ol%C3%A1%2C%20o%20site%20ainda%20est%C3%A1%20em%20constru%C3%A7%C3%A3o%20%3A(%0A(%20aguarde%20atualiza%C3%A7%C3%B5es...%F0%9F%98%9D)"
        target="_blank" class="whatsapp-float" title="Fale conosco no WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <button class="scroll-top" id="scrollTop" title="Voltar ao topo">
        <i class="fas fa-arrow-up"></i>
    </button>

</body>
<script src=".js/app.js"></script>

</html>