<?php
require_once '../inc/db.php';
?>
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


<style>
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
    --gradient-card: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.1) 100%);

    /* Sombras */
    --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.08);
    --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.12);
    --shadow-lg: 0 8px 32px rgba(0, 0, 0, 0.16);
    --shadow-hover: 0 12px 40px rgba(46, 134, 222, 0.25);

    /* Tipografia */
    --font-primary: 'Poppins', sans-serif;

    /* Espaçamentos */
    --spacing-xs: 0.5rem;
    --spacing-sm: 1rem;
    --spacing-md: 2rem;
    --spacing-lg: 4rem;
    --spacing-xl: 6rem;

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
    background-color: var(--white);
    line-height: 1.6;
    overflow-x: hidden;
}

img {
    max-width: 100%;
    display: block;
}

a {
    text-decoration: none;
    color: inherit;
    transition: var(--transition-base);
}

button {
    border: none;
    cursor: pointer;
    font-family: var(--font-primary);
    transition: var(--transition-base);
}

/* ===========================
           HEADER FIXO
        =========================== */
.header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background: var(--white);
    box-shadow: var(--shadow-sm);
    z-index: 1000;
    transition: var(--transition-base);
}

.header.scrolled {
    box-shadow: var(--shadow-md);
}

/* Top Bar */
.top-bar {
    background: var(--gradient-primary);
    color: var(--white);
    padding: 0.5rem 0;
    font-size: 0.875rem;
}

.top-bar .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 2rem;
}

.top-bar-left,
.top-bar-right {
    display: flex;
    gap: 1.5rem;
    align-items: center;
}

.top-bar a {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.top-bar a:hover {
    opacity: 0.9;
}

/* Main Header */
.main-header {
    padding: 1.20rem 0;
}

.main-header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 2rem;
    gap: 2rem;
}

/* Logo */
.logo {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-size: 1.75rem;
    font-weight: 800;
    color: var(--primary-blue);
    flex-shrink: 0;
}

.logo i {
    font-size: 2rem;
    background: var(--gradient-primary);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Busca */
.search-bar {
    flex: 1;
    max-width: 600px;
    position: relative;
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
    box-shadow: 0 0 0 4px rgba(46, 134, 222, 0.1);
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
    transition: var(--transition-base);
}

.search-btn:hover {
    transform: translateX(-2px);
    box-shadow: var(--shadow-md);
}

/* Header Actions */
.header-actions {
    display: flex;
    gap: 1.5rem;
    align-items: center;
    flex-shrink: 0;
}

.header-btn {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.25rem;
    color: var(--dark-gray);
    font-size: 0.75rem;
    position: relative;
}

.header-btn i {
    font-size: 1.5rem;
    color: var(--primary-blue);
}

.header-btn:hover {
    color: var(--primary-orange);
}

.header-btn:hover i {
    color: var(--primary-orange);
    transform: scale(1.1);
}

.cart-badge {
    position: absolute;
    top: -5px;
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

/* Menu Mobile Toggle */
.mobile-toggle {
    display: none;
    background: var(--primary-blue);
    color: var(--white);
    padding: 0.75rem;
    border-radius: 8px;
    font-size: 1.25rem;
}

/* ===========================
           NAVIGATION
        =========================== */
.navigation {
    background: var(--primary-graphite);
    position: relative;
}

.nav-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 2rem;
}

.nav-menu {
    display: flex;
    list-style: none;
    gap: 0.5rem;
}

.nav-item {
    position: relative;
}

.nav-link {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 1rem 1.5rem;
    color: var(--white);
    font-weight: 500;
    transition: var(--transition-base);
}

.nav-link:hover {
    background: rgba(255, 255, 255, 0.1);
    color: var(--primary-yellow);
}

.nav-link.active {
    background: var(--primary-blue);
}

/* ===========================
           HERO SECTION
        =========================== */
.hero {
    margin-top: 170px;
    /* Compensar header fixo */
    position: relative;
    height: 970px;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%232E86DE" width="1200" height="600"/><g opacity="0.15"><circle cx="200" cy="200" r="150" fill="%23fff"/><circle cx="800" cy="400" r="200" fill="%23fff"/><circle cx="1100" cy="150" r="100" fill="%23fff"/></g></svg>') center/cover;
    overflow: hidden;
}

.hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: var(--gradient-hero);
}

.hero-pattern {
    position: absolute;
    inset: 0;
    background-image:
        repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(255, 255, 255, .03) 35px, rgba(255, 255, 255, .03) 70px);
    animation: patternMove 30s linear infinite;
}

@keyframes patternMove {
    0% {
        background-position: 0 0;
    }

    100% {
        background-position: 70px 70px;
    }
}

.hero-container {
    position: relative;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 2rem;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 4rem;
    z-index: 2;
}

.hero-content {
    flex: 1;
    max-width: 600px;
    animation: slideInLeft 0.8s ease-out;
}

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }

    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    padding: 0.5rem 1.25rem;
    border-radius: 50px;
    color: var(--white);
    font-size: 0.875rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.hero-title {
    font-size: 4rem;
    font-weight: 800;
    color: var(--white);
    line-height: 1.1;
    margin-bottom: 1.5rem;
    text-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
}

.hero-title .highlight {
    background: linear-gradient(135deg, var(--primary-yellow) 0%, var(--primary-orange) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.hero-description {
    font-size: 1.25rem;
    color: rgba(255, 255, 255, 0.95);
    margin-bottom: 2.5rem;
    line-height: 1.8;
}

.hero-actions {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.btn {
    padding: 1rem 2.5rem;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1rem;
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    transition: var(--transition-base);
    cursor: pointer;
}

.btn-primary {
    background: var(--white);
    color: var(--primary-blue);
    box-shadow: var(--shadow-lg);
}

.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 48px rgba(255, 255, 255, 0.3);
}

.btn-secondary {
    background: transparent;
    color: var(--white);
    border: 2px solid var(--white);
}

.btn-secondary:hover {
    background: var(--white);
    color: var(--primary-blue);
    transform: translateY(-3px);
}

.hero-features {
    display: flex;
    gap: 2rem;
    margin-top: 3rem;
    flex-wrap: wrap;
}

.hero-feature {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    color: var(--white);
}

.hero-feature i {
    font-size: 1.5rem;
    color: var(--primary-yellow);
}

.hero-feature-text strong {
    display: block;
    font-size: 1.125rem;
}

.hero-feature-text span {
    font-size: 0.875rem;
    opacity: 0.9;
}

.hero-image {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: float 4s ease-in-out infinite;
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

.hero-image-placeholder {
    width: 100%;
    max-width: 500px;
    aspect-ratio: 1;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    border-radius: 30px;
    border: 2px solid rgba(255, 255, 255, 0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 8rem;
    color: rgba(255, 255, 255, 0.3);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
}

/* ===========================
           CATEGORIAS
        =========================== */
.categories {
    padding: var(--spacing-xl) 0;
    background: var(--light-gray);
}

.container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 2rem;
}

.section-header {
    text-align: center;
    margin-bottom: var(--spacing-lg);
}

.section-subtitle {
    color: var(--primary-orange);
    font-weight: 700;
    font-size: 0.875rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 0.5rem;
}

.section-title {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--dark-gray);
    margin-bottom: 1rem;
}

.section-description {
    font-size: 1.125rem;
    color: var(--medium-gray);
    max-width: 600px;
    margin: 0 auto;
}

.categories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
}

.category-card {
    background: var(--white);
    border-radius: 20px;
    padding: 2.5rem;
    text-align: center;
    box-shadow: var(--shadow-sm);
    transition: var(--transition-base);
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

.category-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: var(--gradient-primary);
    opacity: 0;
    transition: var(--transition-base);
}

.category-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-hover);
}

.category-card:hover::before {
    opacity: 1;
}

.category-card:hover .category-icon,
.category-card:hover .category-name,
.category-card:hover .category-count {
    color: var(--white);
    position: relative;
    z-index: 1;
}

.category-icon {
    font-size: 3.5rem;
    margin-bottom: 1.5rem;
    background: var(--gradient-primary);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    transition: var(--transition-base);
}

.category-name {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--dark-gray);
    margin-bottom: 0.5rem;
    transition: var(--transition-base);
}

.category-count {
    color: var(--medium-gray);
    font-size: 0.875rem;
    transition: var(--transition-base);
}

/* ===========================
           PRODUTOS EM DESTAQUE
        =========================== */
.featured-products {
    padding: var(--spacing-xl) 0;
    background: var(--white);
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
    backdrop-filter: blur(10px);
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
    overflow: hidden;
}

.product-image::after {
    content: '';
    position: absolute;
    inset: 0;
    background: var(--gradient-card);
    opacity: 0;
    transition: var(--transition-base);
}

.product-card:hover .product-image::after {
    opacity: 1;
}

.product-image-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 5rem;
    color: var(--medium-gray);
}

.product-quick-actions {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    gap: 0.75rem;
    opacity: 0;
    transition: var(--transition-base);
    z-index: 10;
}

.product-card:hover .product-quick-actions {
    opacity: 1;
}

.quick-action-btn {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: var(--white);
    color: var(--primary-blue);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.125rem;
    box-shadow: var(--shadow-md);
    transition: var(--transition-base);
}

.quick-action-btn:hover {
    background: var(--primary-blue);
    color: var(--white);
    transform: scale(1.1);
}

.product-info {
    padding: 1.5rem;
}

.product-category {
    color: var(--primary-orange);
    font-size: 0.875rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    text-transform: uppercase;
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
    color: var(--primary-yellow);
    font-size: 0.875rem;
}

.rating-count {
    color: var(--medium-gray);
    font-size: 0.875rem;
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

.add-to-cart-btn {
    background: var(--gradient-primary);
    color: var(--white);
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    transition: var(--transition-base);
}

.add-to-cart-btn:hover {
    transform: scale(1.1);
    box-shadow: var(--shadow-md);
}

/* ===========================
           PROMOÇÃO BANNER
        =========================== */
.promo-banner {
    padding: var(--spacing-xl) 0;
    background: var(--primary-graphite);
    position: relative;
    overflow: hidden;
}

.promo-banner::before {
    content: '';
    position: absolute;
    inset: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 400"><defs><pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse"><path d="M 40 0 L 0 0 0 40" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="1200" height="400" fill="url(%23grid)"/></svg>');
}

.promo-content {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 4rem;
}

.promo-text {
    flex: 1;
    color: var(--white);
}

.promo-label {
    display: inline-block;
    background: var(--primary-yellow);
    color: var(--white);
    padding: 0.5rem 1.25rem;
    border-radius: 50px;
    font-weight: 700;
    font-size: 0.875rem;
    margin-bottom: 1.5rem;
}

.promo-title {
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 1rem;
    line-height: 1.2;
}

.promo-title .highlight {
    color: var(--primary-yellow);
}

.promo-description {
    font-size: 1.25rem;
    opacity: 0.9;
    margin-bottom: 2rem;
}

.promo-features {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    margin-top: 2rem;
}

.promo-feature {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.promo-feature i {
    color: var(--primary-yellow);
    font-size: 1.25rem;
}

.promo-image {
    flex: 1;
    max-width: 500px;
}

.promo-image-placeholder {
    width: 100%;
    aspect-ratio: 1;
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(20px);
    border-radius: 30px;
    border: 2px solid rgba(255, 255, 255, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 6rem;
    color: rgba(255, 255, 255, 0.2);
}

/* ===========================
           NEWSLETTER
        =========================== */
.newsletter {
    padding: var(--spacing-xl) 0;
    background: var(--light-gray);
}

.newsletter-content {
    text-align: center;
    max-width: 700px;
    margin: 0 auto;
}

.newsletter-icon {
    font-size: 4rem;
    background: var(--gradient-primary);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 1.5rem;
}

.newsletter-title {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--dark-gray);
    margin-bottom: 1rem;
}

.newsletter-description {
    font-size: 1.125rem;
    color: var(--medium-gray);
    margin-bottom: 2.5rem;
}

.newsletter-form {
    display: flex;
    gap: 1rem;
    max-width: 600px;
    margin: 0 auto;
}

.newsletter-input {
    flex: 1;
    padding: 1.25rem 1.75rem;
    border: 2px solid var(--medium-gray);
    border-radius: 50px;
    font-family: var(--font-primary);
    font-size: 1rem;
    outline: none;
    transition: var(--transition-base);
}

.newsletter-input:focus {
    border-color: var(--primary-blue);
    box-shadow: 0 0 0 4px rgba(46, 134, 222, 0.1);
}

.newsletter-btn {
    padding: 1.25rem 2.5rem;
    background: var(--gradient-primary);
    color: var(--white);
    border-radius: 50px;
    font-weight: 700;
    white-space: nowrap;
}

.newsletter-btn:hover {
    transform: translateY(-3px);
    box-shadow: var(--shadow-hover);
}

/* ===========================
           FOOTER
        =========================== */
.footer {
    background: var(--primary-graphite);
    color: var(--white);
    padding: var(--spacing-xl) 0 var(--spacing-md);
}

.footer-main {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 1fr;
    gap: 4rem;
    margin-bottom: var(--spacing-lg);
}

.footer-about {
    max-width: 350px;
}

.footer-logo {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-size: 1.75rem;
    font-weight: 800;
    margin-bottom: 1.5rem;
}

.footer-logo i {
    font-size: 2rem;
    color: var(--primary-yellow);
}

.footer-description {
    opacity: 0.8;
    margin-bottom: 1.5rem;
    line-height: 1.8;
}

.footer-social {
    display: flex;
    gap: 1rem;
}

.social-btn {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    transition: var(--transition-base);
}

.social-btn:hover {
    background: var(--primary-blue);
    transform: translateY(-3px);
}

.footer-column h4 {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    color: var(--white);
}

.footer-links {
    list-style: none;
}

.footer-links li {
    margin-bottom: 0.75rem;
}

.footer-links a {
    opacity: 0.8;
    transition: var(--transition-base);
}

.footer-links a:hover {
    opacity: 1;
    color: var(--primary-yellow);
    padding-left: 0.5rem;
}

.footer-contact-item {
    display: flex;
    align-items: start;
    gap: 1rem;
    margin-bottom: 1rem;
    opacity: 0.8;
}

.footer-contact-item i {
    color: var(--primary-yellow);
    font-size: 1.25rem;
    margin-top: 0.25rem;
}

.footer-bottom {
    padding-top: var(--spacing-md);
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    display: flex;
    justify-content: space-between;
    align-items: center;
    opacity: 0.8;
}

.footer-payment {
    display: flex;
    gap: 1rem;
    align-items: center;
}

.footer-payment i {
    font-size: 2rem;
    opacity: 0.6;
}

/* ===========================
           WHATSAPP FLUTUANTE
        =========================== */
.whatsapp-float {
    position: fixed;
    bottom: 2rem;
    right: 2rem;
    width: 60px;
    height: 60px;
    background: #25D366;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: var(--white);
    box-shadow: var(--shadow-lg);
    z-index: 999;
    transition: var(--transition-base);
    animation: pulse 2s ease-in-out infinite;
}

.whatsapp-float:hover {
    transform: scale(1.1);
    box-shadow: 0 12px 40px rgba(37, 211, 102, 0.4);
}

@keyframes pulse {

    0%,
    100% {
        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
    }

    50% {
        box-shadow: 0 0 0 20px rgba(37, 211, 102, 0);
    }
}

/* ===========================
           SCROLL TO TOP
        =========================== */
.scroll-top {
    position: fixed;
    bottom: 2rem;
    left: 2rem;
    width: 50px;
    height: 50px;
    background: var(--gradient-primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: 1.25rem;
    opacity: 0;
    visibility: hidden;
    transition: var(--transition-base);
    z-index: 999;
    cursor: pointer;
}

.scroll-top.visible {
    opacity: 1;
    visibility: visible;
}

.scroll-top:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-hover);
}

/* ===========================
           RESPONSIVO
        =========================== */
@media (max-width: 1024px) {
    .hero-title {
        font-size: 3rem;
    }

    .hero-image {
        display: none;
    }

    .footer-main {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .top-bar {
        display: none;
    }

    .main-header .container {
        flex-wrap: wrap;
    }

    .search-bar {
        order: 3;
        width: 100%;
        max-width: none;
    }

    .mobile-toggle {
        display: flex;
    }

    .navigation {
        display: none;
    }

    .hero {
        height: auto;
        padding: 3rem 0;
        margin-top: 140px;
    }

    .hero-title {
        font-size: 2.5rem;
    }

    .hero-description {
        font-size: 1rem;
    }

    .hero-features {
        flex-direction: column;
        gap: 1rem;
    }

    .section-title {
        font-size: 2rem;
    }

    .categories-grid {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1rem;
    }

    .category-card {
        padding: 1.5rem;
    }

    .category-icon {
        font-size: 2.5rem;
    }

    .products-grid {
        grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
        gap: 1rem;
    }

    .promo-content {
        flex-direction: column;
        text-align: center;
    }

    .promo-title {
        font-size: 2rem;
    }

    .promo-image {
        max-width: 300px;
    }

    .newsletter-form {
        flex-direction: column;
    }

    .footer-main {
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    .footer-bottom {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
    }
}
</style>

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
                            class="social-btn" target="_blank">
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