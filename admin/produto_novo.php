<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto - ConstruMax Admin</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
    :root {
        --primary-blue: #2E86DE;
        --primary-orange: #FF8C42;
        --primary-red: #C0392B;
        --primary-graphite: #34495E;
        --primary-green: #27AE60;
        --white: #FFFFFF;
        --light-gray: #ECF0F1;
        --medium-gray: #BDC3C7;
        --dark-gray: #2C3E50;
        --gradient-primary: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-orange) 100%);
        --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.08);
        --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.12);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: var(--light-gray);
        color: var(--dark-gray);
    }

    /* SIDEBAR - Igual ao dashboard */
    .sidebar {
        position: fixed;
        left: 0;
        top: 0;
        bottom: 0;
        width: 280px;
        background: var(--primary-graphite);
        color: white;
        overflow-y: auto;
        z-index: 1000;
    }

    .sidebar::-webkit-scrollbar {
        width: 6px;
    }

    .sidebar::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.2);
        border-radius: 10px;
    }

    .logo {
        padding: 2rem;
        text-align: center;
        background: rgba(0, 0, 0, 0.2);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .logo h2 {
        font-size: 1.75rem;
        font-weight: 800;
        margin-bottom: 0.5rem;
    }

    .logo i {
        font-size: 2rem;
        background: var(--gradient-primary);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .logo .subtitle {
        font-size: 0.75rem;
        opacity: 0.7;
    }

    .menu {
        padding: 1.5rem 0;
    }

    .menu-section-title {
        padding: 0.5rem 2rem;
        font-size: 0.75rem;
        text-transform: uppercase;
        opacity: 0.5;
        margin-bottom: 0.75rem;
    }

    .menu-item {
        padding: 1rem 2rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: 0.3s;
        position: relative;
    }

    .menu-item:hover {
        background: rgba(255, 255, 255, 0.05);
        color: white;
    }

    .menu-item.active {
        background: var(--gradient-primary);
        color: white;
    }

    .menu-item.active::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 4px;
        background: white;
    }

    .menu-item i {
        font-size: 1.25rem;
        width: 24px;
    }

    .menu-item .badge {
        margin-left: auto;
        padding: 0.25rem 0.5rem;
        background: var(--primary-red);
        border-radius: 50px;
        font-size: 0.7rem;
        font-weight: 700;
    }

    .user-info {
        padding: 2rem;
        background: rgba(0, 0, 0, 0.2);
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .user-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: var(--gradient-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        font-weight: 700;
    }

    /* MAIN CONTENT */
    .main-content {
        margin-left: 280px;
        min-height: 100vh;
    }

    /* TOPBAR */
    .topbar {
        background: white;
        padding: 1.5rem 2rem;
        box-shadow: var(--shadow-sm);
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: sticky;
        top: 0;
        z-index: 100;
    }

    .topbar h1 {
        font-size: 1.75rem;
        font-weight: 800;
    }

    .breadcrumb {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.875rem;
        color: var(--medium-gray);
        margin-top: 0.25rem;
    }

    .breadcrumb a {
        color: var(--primary-blue);
        text-decoration: none;
    }

    .topbar-actions {
        display: flex;
        gap: 1rem;
    }

    .btn {
        padding: 0.75rem 1.5rem;
        border-radius: 10px;
        border: none;
        font-weight: 600;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: 0.3s;
        text-decoration: none;
    }

    .btn-primary {
        background: var(--gradient-primary);
        color: white;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .btn-secondary {
        background: var(--light-gray);
        color: var(--dark-gray);
    }

    .btn-secondary:hover {
        background: var(--medium-gray);
    }

    /* CONTENT */
    .content {
        padding: 2rem;
    }

    /* FORM */
    .form-container {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        box-shadow: var(--shadow-sm);
    }

    .form-header {
        padding-bottom: 1.5rem;
        border-bottom: 2px solid var(--light-gray);
        margin-bottom: 2rem;
    }

    .form-header h2 {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--dark-gray);
        margin-bottom: 0.5rem;
    }

    .form-header p {
        color: var(--medium-gray);
    }

    .form-section {
        margin-bottom: 2.5rem;
    }

    .form-section-title {
        font-size: 1.125rem;
        font-weight: 700;
        color: var(--dark-gray);
        margin-bottom: 1.5rem;
        padding-bottom: 0.75rem;
        border-bottom: 2px solid var(--light-gray);
    }

    .form-row {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .form-row.single {
        grid-template-columns: 1fr;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .form-label {
        font-weight: 600;
        color: var(--dark-gray);
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .required {
        color: var(--primary-red);
    }

    .form-input,
    .form-select,
    .form-textarea {
        padding: 0.875rem 1rem;
        border: 2px solid var(--light-gray);
        border-radius: 10px;
        font-family: 'Poppins', sans-serif;
        font-size: 0.9rem;
        outline: none;
        transition: 0.3s;
    }

    .form-input:focus,
    .form-select:focus,
    .form-textarea:focus {
        border-color: var(--primary-blue);
        box-shadow: 0 0 0 4px rgba(46, 134, 222, 0.1);
    }

    .form-textarea {
        resize: vertical;
        min-height: 120px;
    }

    .form-select {
        cursor: pointer;
    }

    .form-help {
        font-size: 0.8rem;
        color: var(--medium-gray);
        margin-top: 0.25rem;
    }

    /* IMAGE UPLOAD */
    .image-upload-area {
        border: 2px dashed var(--medium-gray);
        border-radius: 15px;
        padding: 3rem;
        text-align: center;
        cursor: pointer;
        transition: 0.3s;
        background: var(--light-gray);
    }

    .image-upload-area:hover {
        border-color: var(--primary-blue);
        background: rgba(46, 134, 222, 0.05);
    }

    .image-upload-area.dragover {
        border-color: var(--primary-blue);
        background: rgba(46, 134, 222, 0.1);
    }

    .upload-icon {
        font-size: 3rem;
        color: var(--primary-blue);
        margin-bottom: 1rem;
    }

    .upload-text {
        font-size: 1rem;
        color: var(--dark-gray);
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .upload-hint {
        font-size: 0.875rem;
        color: var(--medium-gray);
    }

    .image-preview {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        gap: 1rem;
        margin-top: 1.5rem;
    }

    .preview-item {
        position: relative;
        aspect-ratio: 1;
        border-radius: 15px;
        overflow: hidden;
        background: var(--light-gray);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .preview-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .preview-item .remove-btn {
        position: absolute;
        top: 0.5rem;
        right: 0.5rem;
        width: 30px;
        height: 30px;
        background: var(--primary-red);
        color: white;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .preview-item .remove-btn:hover {
        background: #A93226;
    }

    /* SPECIFICATIONS */
    .specs-list {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .spec-item {
        display: flex;
        gap: 1rem;
        align-items: start;
    }

    .spec-item input {
        flex: 1;
    }

    .spec-remove {
        width: 45px;
        height: 45px;
        background: var(--primary-red);
        color: white;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .spec-remove:hover {
        background: #A93226;
    }

    .add-spec-btn {
        width: 100%;
        padding: 0.875rem;
        background: var(--light-gray);
        border: 2px dashed var(--medium-gray);
        border-radius: 10px;
        color: var(--dark-gray);
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
    }

    .add-spec-btn:hover {
        background: rgba(46, 134, 222, 0.1);
        border-color: var(--primary-blue);
        color: var(--primary-blue);
    }

    /* FORM ACTIONS */
    .form-actions {
        display: flex;
        gap: 1rem;
        justify-content: flex-end;
        padding-top: 2rem;
        border-top: 2px solid var(--light-gray);
    }

    /* ALERTS */
    .alert {
        padding: 1rem 1.5rem;
        border-radius: 10px;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .alert-success {
        background: rgba(39, 174, 96, 0.1);
        color: var(--primary-green);
        border: 2px solid var(--primary-green);
    }

    .alert-error {
        background: rgba(192, 57, 43, 0.1);
        color: var(--primary-red);
        border: 2px solid var(--primary-red);
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
        .sidebar {
            transform: translateX(-100%);
        }

        .main-content {
            margin-left: 0;
        }

        .form-row {
            grid-template-columns: 1fr;
        }
    }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="logo">
            <h2><i class="fas fa-hard-hat"></i> ConstruMax</h2>
            <div class="subtitle">PAINEL ADMINISTRATIVO</div>
        </div>

        <nav class="menu">
            <div style="margin-bottom: 2rem;">
                <div class="menu-section-title">Principal</div>
                <a href="index.php" class="menu-item">
                    <i class="fas fa-th-large"></i>
                    <span>Dashboard</span>
                </a>
                <a href="produtos.php" class="menu-item active">
                    <i class="fas fa-box"></i>
                    <span>Produtos</span>
                    <span class="badge">507</span>
                </a>
                <a href="categorias.php" class="menu-item">
                    <i class="fas fa-tags"></i>
                    <span>Categorias</span>
                </a>
                <a href="pedidos.php" class="menu-item">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Pedidos</span>
                    <span class="badge">12</span>
                </a>
                <a href="estoque.php" class="menu-item">
                    <i class="fas fa-warehouse"></i>
                    <span>Estoque</span>
                </a>
            </div>

            <div style="margin-bottom: 2rem;">
                <div class="menu-section-title">Relatórios</div>
                <a href="vendas.php" class="menu-item">
                    <i class="fas fa-chart-line"></i>
                    <span>Vendas</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-users"></i>
                    <span>Clientes</span>
                </a>
            </div>

            <div>
                <div class="menu-section-title">Sistema</div>
                <a href="#" class="menu-item">
                    <i class="fas fa-cog"></i>
                    <span>Configurações</span>
                </a>
                <a href="../logout.php" class="menu-item">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Sair</span>
                </a>
            </div>
        </nav>

        <div class="user-info">
            <div class="user-avatar">A</div>
            <div>
                <div style="font-weight: 700;">Administrador</div>
                <div style="font-size: 0.75rem; opacity: 0.7;">admin@construmax.com.br</div>
            </div>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="main-content">

        <!-- TOPBAR -->
        <div class="topbar">
            <div>
                <h1>Novo Produto</h1>
                <div class="breadcrumb">
                    <a href="index.php"><i class="fas fa-home"></i> Dashboard</a>
                    <span>/</span>
                    <a href="produtos.php">Produtos</a>
                    <span>/</span>
                    <span>Novo Produto</span>
                </div>
            </div>

            <div class="topbar-actions">
                <a href="produtos.php" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i>
                    Voltar
                </a>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="content">

            <!-- Alerts (exemplo) -->
            <!-- <div class="alert alert-success">
                <i class="fas fa-check-circle"></i>
                Produto cadastrado com sucesso!
            </div> -->

            <form class="form-container" id="productForm" onsubmit="handleSubmit(event)">

                <div class="form-header">
                    <h2>Adicionar Novo Produto</h2>
                    <p>Preencha os dados abaixo para cadastrar um novo produto no catálogo</p>
                </div>

                <!-- INFORMAÇÕES BÁSICAS -->
                <div class="form-section">
                    <div class="form-section-title">
                        <i class="fas fa-info-circle"></i> Informações Básicas
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">
                                Nome do Produto <span class="required">*</span>
                            </label>
                            <input type="text" class="form-input" name="nome"
                                placeholder="Ex: Cimento CP-II 50kg Votoran" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                SKU (Código) <span class="required">*</span>
                            </label>
                            <input type="text" class="form-input" name="sku" placeholder="Ex: CIM-VOT-50" required>
                            <span class="form-help">Código único de identificação do produto</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">
                                Categoria <span class="required">*</span>
                            </label>
                            <select class="form-select" name="categoria" required>
                                <option value="">Selecione uma categoria</option>
                                <option value="1">Cimento & Argamassa</option>
                                <option value="2">Tintas & Vernizes</option>
                                <option value="3">Ferramentas</option>
                                <option value="4">Elétrica</option>
                                <option value="5">Hidráulica</option>
                                <option value="6">Pisos & Revestimentos</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                Marca
                            </label>
                            <select class="form-select" name="marca">
                                <option value="">Selecione uma marca</option>
                                <option value="1">Votoran</option>
                                <option value="2">Coral</option>
                                <option value="3">DeWalt</option>
                                <option value="4">Tramontina</option>
                                <option value="5">Quartzolit</option>
                                <option value="6">Tigre</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row single">
                        <div class="form-group">
                            <label class="form-label">
                                Descrição Curta <span class="required">*</span>
                            </label>
                            <input type="text" class="form-input" name="descricao_curta"
                                placeholder="Breve descrição do produto (máx. 150 caracteres)" maxlength="150" required>
                        </div>
                    </div>

                    <div class="form-row single">
                        <div class="form-group">
                            <label class="form-label">
                                Descrição Completa <span class="required">*</span>
                            </label>
                            <textarea class="form-textarea" name="descricao_completa"
                                placeholder="Descrição detalhada do produto, características, aplicações, etc."
                                required></textarea>
                        </div>
                    </div>
                </div>

                <!-- PREÇOS E ESTOQUE -->
                <div class="form-section">
                    <div class="form-section-title">
                        <i class="fas fa-dollar-sign"></i> Preços e Estoque
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">
                                Preço de Custo
                            </label>
                            <input type="number" class="form-input" name="preco_custo" placeholder="0,00" step="0.01"
                                min="0">
                            <span class="form-help">Valor de aquisição do produto</span>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                Preço de Venda <span class="required">*</span>
                            </label>
                            <input type="number" class="form-input" name="preco_venda" placeholder="0,00" step="0.01"
                                min="0" required>
                            <span class="form-help">Preço que será exibido ao cliente</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">
                                Preço Promocional
                            </label>
                            <input type="number" class="form-input" name="preco_promocional" placeholder="0,00"
                                step="0.01" min="0">
                            <span class="form-help">Deixe em branco se não houver promoção</span>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                Unidade de Medida <span class="required">*</span>
                            </label>
                            <select class="form-select" name="unidade_medida" required>
                                <option value="">Selecione</option>
                                <option value="un">Unidade (un)</option>
                                <option value="kg">Quilograma (kg)</option>
                                <option value="g">Grama (g)</option>
                                <option value="L">Litro (L)</option>
                                <option value="ml">Mililitro (ml)</option>
                                <option value="m">Metro (m)</option>
                                <option value="m²">Metro Quadrado (m²)</option>
                                <option value="m³">Metro Cúbico (m³)</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">
                                Estoque Atual <span class="required">*</span>
                            </label>
                            <input type="number" class="form-input" name="estoque_atual" placeholder="0" min="0"
                                required>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                Estoque Mínimo <span class="required">*</span>
                            </label>
                            <input type="number" class="form-input" name="estoque_minimo" placeholder="5" min="0"
                                value="5" required>
                            <span class="form-help">Alerta quando atingir este nível</span>
                        </div>
                    </div>
                </div>

                <!-- DIMENSÕES E PESO -->
                <div class="form-section">
                    <div class="form-section-title">
                        <i class="fas fa-ruler-combined"></i> Dimensões e Peso
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">
                                Peso (kg)
                            </label>
                            <input type="number" class="form-input" name="peso" placeholder="0.000" step="0.001"
                                min="0">
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                Altura (cm)
                            </label>
                            <input type="number" class="form-input" name="altura" placeholder="0.00" step="0.01"
                                min="0">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">
                                Largura (cm)
                            </label>
                            <input type="number" class="form-input" name="largura" placeholder="0.00" step="0.01"
                                min="0">
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                Comprimento (cm)
                            </label>
                            <input type="number" class="form-input" name="comprimento" placeholder="0.00" step="0.01"
                                min="0">
                        </div>
                    </div>
                </div>

                <!-- IMAGENS -->
                <div class="form-section">
                    <div class="form-section-title">
                        <i class="fas fa-images"></i> Imagens do Produto
                    </div>

                    <div class="image-upload-area" id="dropZone" onclick="document.getElementById('fileInput').click()">
                        <div class="upload-icon">
                            <i class="fas fa-cloud-upload-alt"></i>
                        </div>
                        <div class="upload-text">Clique para selecionar ou arraste as imagens aqui</div>
                        <div class="upload-hint">Formatos aceitos: JPG, PNG, WEBP (máx. 5MB cada)</div>
                        <input type="file" id="fileInput" multiple accept="image/*" style="display: none;"
                            onchange="handleFiles(this.files)">
                    </div>

                    <div class="image-preview" id="imagePreview"></div>
                </div>

                <!-- ESPECIFICAÇÕES TÉCNICAS -->
                <div class="form-section">
                    <div class="form-section-title">
                        <i class="fas fa-list-ul"></i> Especificações Técnicas
                    </div>

                    <div class="specs-list" id="specsList">
                        <div class="spec-item">
                            <input type="text" class="form-input" name="spec_nome[]"
                                placeholder="Nome da especificação (ex: Material)">
                            <input type="text" class="form-input" name="spec_valor[]"
                                placeholder="Valor (ex: Aço Carbono)">
                            <button type="button" class="spec-remove" onclick="removeSpec(this)">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>

                    <button type="button" class="add-spec-btn" onclick="addSpec()">
                        <i class="fas fa-plus"></i> Adicionar Especificação
                    </button>
                </div>

                <!-- OPÇÕES -->
                <div class="form-section">
                    <div class="form-section-title">
                        <i class="fas fa-cog"></i> Opções do Produto
                    </div>

                    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem;">
                        <div class="form-group">
                            <label style="display: flex; align-items: center; gap: 0.75rem; cursor: pointer;">
                                <input type="checkbox" name="destaque"
                                    style="width: 20px; height: 20px; cursor: pointer;">
                                <span class="form-label" style="margin: 0;">Produto em Destaque</span>
                            </label>
                        </div>

                        <div class="form-group">
                            <label style="display: flex; align-items: center; gap: 0.75rem; cursor: pointer;">
                                <input type="checkbox" name="novidade"
                                    style="width: 20px; height: 20px; cursor: pointer;">
                                <span class="form-label" style="margin: 0;">Novidade</span>
                            </label>
                        </div>

                        <div class="form-group">
                            <label style="display: flex; align-items: center; gap: 0.75rem; cursor: pointer;">
                                <input type="checkbox" name="ativo" checked
                                    style="width: 20px; height: 20px; cursor: pointer;">
                                <span class="form-label" style="margin: 0;">Produto Ativo</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- FORM ACTIONS -->
                <div class="form-actions">
                    <a href="produtos.php" class="btn btn-secondary">
                        <i class="fas fa-times"></i>
                        Cancelar
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i>
                        Salvar Produto
                    </button>
                </div>

            </form>

        </div>

    </main>

    <script>
    // Upload de Imagens
    const dropZone = document.getElementById('dropZone');
    const imagePreview = document.getElementById('imagePreview');
    let uploadedFiles = [];

    // Drag and Drop
    dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropZone.classList.add('dragover');
    });

    dropZone.addEventListener('dragleave', () => {
        dropZone.classList.remove('dragover');
    });

    dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropZone.classList.remove('dragover');
        handleFiles(e.dataTransfer.files);
    });

    function handleFiles(files) {
        Array.from(files).forEach(file => {
            if (file.type.startsWith('image/')) {
                uploadedFiles.push(file);
                previewImage(file);
            }
        });
    }

    function previewImage(file) {
        const reader = new FileReader();
        reader.onload = (e) => {
            const div = document.createElement('div');
            div.className = 'preview-item';
            div.innerHTML = `
                    <img src="${e.target.result}" alt="Preview">
                    <button type="button" class="remove-btn" onclick="removeImage(this)">
                        <i class="fas fa-times"></i>
                    </button>
                `;
            imagePreview.appendChild(div);
        };
        reader.readAsDataURL(file);
    }

    function removeImage(btn) {
        const item = btn.closest('.preview-item');
        const index = Array.from(imagePreview.children).indexOf(item);
        uploadedFiles.splice(index, 1);
        item.remove();
    }

    // Especificações
    function addSpec() {
        const specItem = document.createElement('div');
        specItem.className = 'spec-item';
        specItem.innerHTML = `
                <input type="text" class="form-input" name="spec_nome[]" placeholder="Nome da especificação">
                <input type="text" class="form-input" name="spec_valor[]" placeholder="Valor">
                <button type="button" class="spec-remove" onclick="removeSpec(this)">
                    <i class="fas fa-trash"></i>
                </button>
            `;
        document.getElementById('specsList').appendChild(specItem);
    }

    function removeSpec(btn) {
        const specsList = document.getElementById('specsList');
        if (specsList.children.length > 1) {
            btn.closest('.spec-item').remove();
        } else {
            alert('Mantenha pelo menos uma especificação');
        }
    }

    // Submit do Formulário
    function handleSubmit(e) {
        e.preventDefault();

        // Validação básica
        const form = e.target;
        const formData = new FormData(form);

        // Adicionar imagens
        uploadedFiles.forEach((file, index) => {
            formData.append(`images[]`, file);
        });

        // Aqui você enviaria para o backend
        console.log('Dados do formulário:', Object.fromEntries(formData));

        // Simulação de sucesso
        alert('Produto cadastrado com sucesso! (Simulação - conecte ao backend)');

        // Em produção, você faria:
        // fetch('salvar_produto.php', {
        //     method: 'POST',
        //     body: formData
        // }).then(response => response.json())
        //   .then(data => {
        //       if (data.success) {
        //           window.location.href = 'produtos.php';
        //       }
        //   });
    }
    </script>

</body>

</html>