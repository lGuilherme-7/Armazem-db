<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto - ConstruMax Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    :root {
        --blue: #2E86DE;
        --orange: #FF8C42;
        --red: #C0392B;
        --gray: #34495E;
        --green: #27AE60;
        --purple: #9B59B6;
        --light: #ECF0F1;
        --medium: #BDC3C7;
        --dark: #2C3E50
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: #ECF0F1;
        color: #2C3E50
    }

    .sidebar {
        position: fixed;
        left: 0;
        top: 0;
        bottom: 0;
        width: 280px;
        background: #34495E;
        color: #fff;
        overflow-y: auto;
        z-index: 1000
    }

    .logo {
        padding: 2rem;
        text-align: center;
        background: rgba(0, 0, 0, 0.2);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1)
    }

    .logo h2 {
        font-size: 1.75rem;
        font-weight: 800;
        margin-bottom: 0.5rem
    }

    .logo i {
        font-size: 2rem;
        background: linear-gradient(135deg, #2E86DE, #FF8C42);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent
    }

    .menu {
        padding: 1.5rem 0
    }

    .menu-title {
        padding: 0 2rem;
        font-size: 0.75rem;
        text-transform: uppercase;
        opacity: 0.5;
        margin-bottom: 0.75rem
    }

    .menu-item {
        padding: 1rem 2rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: 0.3s;
        position: relative
    }

    .menu-item:hover {
        background: rgba(255, 255, 255, 0.05);
        color: #fff
    }

    .menu-item.active {
        background: rgba(46, 134, 222, 0.2);
        color: #fff;
        border-left: 4px solid #2E86DE
    }

    .menu-item i {
        width: 24px
    }

    .badge {
        margin-left: auto;
        background: #C0392B;
        padding: 0.25rem 0.5rem;
        border-radius: 50px;
        font-size: 0.7rem;
        font-weight: 700
    }

    .user-info {
        padding: 2rem;
        background: rgba(0, 0, 0, 0.2);
        display: flex;
        gap: 1rem;
        align-items: center
    }

    .user-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(135deg, #2E86DE, #FF8C42);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 1.5rem
    }

    .main {
        margin-left: 280px;
        min-height: 100vh
    }

    .topbar {
        background: #fff;
        padding: 1.5rem 2rem;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: sticky;
        top: 0;
        z-index: 100
    }

    .topbar h1 {
        font-size: 1.75rem;
        font-weight: 800
    }

    .breadcrumb {
        display: flex;
        gap: 0.5rem;
        font-size: 0.875rem;
        color: #BDC3C7;
        margin-top: 0.25rem
    }

    .breadcrumb a {
        color: #2E86DE;
        text-decoration: none
    }

    .content {
        padding: 2rem
    }

    .form-container {
        background: #fff;
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08)
    }

    .form-header {
        padding-bottom: 1.5rem;
        border-bottom: 2px solid #ECF0F1;
        margin-bottom: 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center
    }

    .form-header h2 {
        font-size: 1.5rem;
        font-weight: 700
    }

    .status-badge {
        padding: 0.5rem 1rem;
        border-radius: 8px;
        font-size: 0.875rem;
        font-weight: 700
    }

    .status-active {
        background: rgba(39, 174, 96, 0.1);
        color: #27AE60
    }

    .form-section {
        margin-bottom: 2.5rem
    }

    .form-section-title {
        font-size: 1.125rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        padding-bottom: 0.75rem;
        border-bottom: 2px solid #ECF0F1;
        display: flex;
        align-items: center;
        gap: 0.75rem
    }

    .form-row {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
        margin-bottom: 1.5rem
    }

    .form-row.single {
        grid-template-columns: 1fr
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem
    }

    .form-label {
        font-weight: 600;
        font-size: 0.9rem
    }

    .required {
        color: #C0392B
    }

    .form-input,
    .form-select,
    .form-textarea {
        padding: 0.875rem 1rem;
        border: 2px solid #ECF0F1;
        border-radius: 10px;
        font-family: 'Poppins', sans-serif;
        font-size: 0.9rem;
        outline: none;
        transition: 0.3s
    }

    .form-input:focus,
    .form-select:focus,
    .form-textarea:focus {
        border-color: #2E86DE;
        box-shadow: 0 0 0 4px rgba(46, 134, 222, 0.1)
    }

    .form-textarea {
        resize: vertical;
        min-height: 120px
    }

    .form-select {
        cursor: pointer;
        background: #fff
    }

    .form-help {
        font-size: 0.8rem;
        color: #7F8C8D
    }

    .image-gallery {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        gap: 1rem
    }

    .gallery-item {
        position: relative;
        aspect-ratio: 1;
        border-radius: 15px;
        background: #ECF0F1;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid #ECF0F1;
        transition: 0.3s
    }

    .gallery-item:hover {
        border-color: #2E86DE;
        transform: scale(1.02)
    }

    .gallery-item .icon {
        font-size: 3rem;
        color: #BDC3C7
    }

    .gallery-actions {
        position: absolute;
        top: 0.5rem;
        right: 0.5rem;
        display: flex;
        gap: 0.5rem;
        opacity: 0;
        transition: 0.3s
    }

    .gallery-item:hover .gallery-actions {
        opacity: 1
    }

    .gallery-btn {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        border: none;
        cursor: pointer
    }

    .gallery-btn.primary {
        background: rgba(46, 134, 222, 0.9);
        color: #fff
    }

    .gallery-btn.danger {
        background: rgba(192, 57, 43, 0.9);
        color: #fff
    }

    .image-upload {
        border: 2px dashed #BDC3C7;
        border-radius: 15px;
        padding: 2rem;
        text-align: center;
        cursor: pointer;
        transition: 0.3s;
        background: #F8F9FA
    }

    .image-upload:hover {
        border-color: #2E86DE;
        background: rgba(46, 134, 222, 0.05)
    }

    .upload-icon {
        font-size: 2.5rem;
        color: #2E86DE;
        margin-bottom: 1rem
    }

    .upload-text {
        font-weight: 600;
        margin-bottom: 0.5rem
    }

    .upload-hint {
        font-size: 0.875rem;
        color: #7F8C8D
    }

    .specs-list {
        display: flex;
        flex-direction: column;
        gap: 1rem
    }

    .spec-item {
        display: flex;
        gap: 1rem
    }

    .spec-item input {
        flex: 1
    }

    .spec-remove {
        width: 45px;
        height: 45px;
        background: rgba(192, 57, 43, 0.1);
        color: #C0392B;
        border: none;
        border-radius: 10px;
        cursor: pointer
    }

    .spec-remove:hover {
        background: rgba(192, 57, 43, 0.2)
    }

    .add-spec-btn {
        width: 100%;
        padding: 0.875rem;
        background: #ECF0F1;
        border: 2px dashed #BDC3C7;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem
    }

    .add-spec-btn:hover {
        background: rgba(46, 134, 222, 0.1);
        border-color: #2E86DE;
        color: #2E86DE
    }

    .history-item {
        padding: 1rem;
        background: #F8F9FA;
        border-radius: 10px;
        margin-bottom: 1rem;
        border-left: 4px solid #2E86DE
    }

    .history-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 0.5rem
    }

    .history-user {
        font-weight: 700;
        font-size: 0.95rem
    }

    .history-date {
        font-size: 0.8rem;
        color: #7F8C8D
    }

    .history-action {
        font-size: 0.9rem;
        color: #7F8C8D
    }

    .form-actions {
        display: flex;
        gap: 1rem;
        justify-content: space-between;
        padding-top: 2rem;
        border-top: 2px solid #ECF0F1
    }

    .btn-group {
        display: flex;
        gap: 1rem
    }

    .btn {
        padding: 0.75rem 1.5rem;
        border-radius: 10px;
        border: none;
        font-weight: 600;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
        display: inline-flex;
        gap: 0.5rem;
        transition: 0.3s;
        text-decoration: none
    }

    .btn-primary {
        background: linear-gradient(135deg, #2E86DE, #FF8C42);
        color: #fff
    }

    .btn-primary:hover {
        transform: translateY(-2px)
    }

    .btn-secondary {
        background: #ECF0F1;
        color: #2C3E50
    }

    .btn-danger {
        background: #C0392B;
        color: #fff
    }

    @media(max-width:768px) {
        .sidebar {
            transform: translateX(-100%)
        }

        .main {
            margin-left: 0
        }

        .form-row {
            grid-template-columns: 1fr
        }
    }
    </style>
</head>

<body>
    <aside class="sidebar">
        <div class="logo">
            <h2><i class="fas fa-hard-hat"></i> ConstruMax</h2>
            <div style="font-size:0.75rem;opacity:0.7">PAINEL ADMIN</div>
        </div>
        <nav class="menu">
            <div style="margin-bottom:2rem">
                <div class="menu-title">Menu</div>
                <a href="index.php" class="menu-item"><i class="fas fa-th-large"></i>Dashboard</a>
                <a href="produtos.php" class="menu-item active"><i class="fas fa-box"></i>Produtos<span
                        class="badge">507</span></a>
                <a href="categorias.php" class="menu-item"><i class="fas fa-tags"></i>Categorias</a>
                <a href="pedidos.php" class="menu-item"><i class="fas fa-shopping-cart"></i>Pedidos<span
                        class="badge">12</span></a>
                <a href="estoque.php" class="menu-item"><i class="fas fa-warehouse"></i>Estoque</a>
                <a href="vendas.php" class="menu-item"><i class="fas fa-chart-line"></i>Vendas</a>
                <a href="../public/logout.php" class="menu-item"><i class="fas fa-sign-out-alt"></i>Sair</a>
            </div>
        </nav>
        <div class="user-info">
            <div class="user-avatar">A</div>
            <div><strong>Administrador</strong><br><small style="opacity:0.7">admin@construmax.com.br</small></div>
        </div>
    </aside>
    <main class="main">
        <div class="topbar">
            <div>
                <h1>Editar Produto</h1>
                <div class="breadcrumb"><a href="index.php"><i class="fas fa-home"></i> Dashboard</a><span>/</span><a
                        href="produtos.php">Produtos</a><span>/</span><span>Editar</span></div>
            </div>
            <a href="produtos.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>Voltar</a>
        </div>
        <div class="content">
            <form class="form-container" onsubmit="handleSubmit(event)">
                <div class="form-header">
                    <h2>Cimento CP-II 50kg Votoran</h2>
                    <div style="display:flex;gap:0.5rem">
                        <span class="status-badge status-active"><i class="fas fa-check-circle"></i> Ativo</span>
                        <span class="status-badge" style="background:rgba(46,134,222,0.1);color:#2E86DE">SKU:
                            CIM-VOT-50</span>
                    </div>
                </div>
                <div class="form-section">
                    <div class="form-section-title"><i class="fas fa-info-circle"></i>Informações Básicas</div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label">Nome <span
                                    class="required">*</span></label><input type="text" class="form-input"
                                value="Cimento CP-II 50kg Votoran" required></div>
                        <div class="form-group"><label class="form-label">SKU <span
                                    class="required">*</span></label><input type="text" class="form-input"
                                value="CIM-VOT-50" required><span class="form-help">Código único</span></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label">Categoria <span
                                    class="required">*</span></label><select class="form-select" required>
                                <option value="1" selected>Cimento & Argamassa</option>
                                <option value="2">Tintas</option>
                                <option value="3">Ferramentas</option>
                            </select></div>
                        <div class="form-group"><label class="form-label">Marca</label><select class="form-select">
                                <option value="1" selected>Votoran</option>
                                <option value="2">Coral</option>
                                <option value="3">Quartzolit</option>
                            </select></div>
                    </div>
                    <div class="form-row single">
                        <div class="form-group"><label class="form-label">Descrição Curta <span
                                    class="required">*</span></label><input type="text" class="form-input"
                                value="Cimento de alta resistência para uso geral" required></div>
                    </div>
                    <div class="form-row single">
                        <div class="form-group"><label class="form-label">Descrição Completa <span
                                    class="required">*</span></label><textarea class="form-textarea"
                                required>O Cimento CP-II 50kg Votoran é ideal para obras em geral, proporcionando excelente resistência e durabilidade.</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="form-section-title"><i class="fas fa-dollar-sign"></i>Preços e Estoque</div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label">Preço Custo</label><input type="number"
                                class="form-input" value="24.50" step="0.01"><span class="form-help">Valor de
                                aquisição</span></div>
                        <div class="form-group"><label class="form-label">Preço Venda <span
                                    class="required">*</span></label><input type="number" class="form-input"
                                value="32.90" step="0.01" required><span class="form-help">Preço ao cliente</span></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label">Preço Promocional</label><input type="number"
                                class="form-input" value="29.90" step="0.01"></div>
                        <div class="form-group"><label class="form-label">Unidade <span
                                    class="required">*</span></label><select class="form-select" required>
                                <option value="un" selected>Unidade</option>
                                <option value="kg">Kg</option>
                                <option value="L">Litro</option>
                            </select></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label">Estoque Atual <span
                                    class="required">*</span></label><input type="number" class="form-input" value="12"
                                required><span class="form-help" style="color:#C0392B"><i
                                    class="fas fa-exclamation-triangle"></i> Abaixo do mínimo!</span></div>
                        <div class="form-group"><label class="form-label">Estoque Mínimo <span
                                    class="required">*</span></label><input type="number" class="form-input" value="50"
                                required></div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="form-section-title"><i class="fas fa-ruler-combined"></i>Dimensões e Peso</div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label">Peso (kg)</label><input type="number"
                                class="form-input" value="50.000" step="0.001"></div>
                        <div class="form-group"><label class="form-label">Altura (cm)</label><input type="number"
                                class="form-input" value="75.00" step="0.01"></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label">Largura (cm)</label><input type="number"
                                class="form-input" value="45.00" step="0.01"></div>
                        <div class="form-group"><label class="form-label">Comprimento (cm)</label><input type="number"
                                class="form-input" value="15.00" step="0.01"></div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="form-section-title"><i class="fas fa-images"></i>Galeria de Imagens</div>
                    <div class="image-gallery">
                        <div class="gallery-item">
                            <div class="icon"><i class="fas fa-cube"></i></div>
                            <div class="gallery-actions"><button type="button" class="gallery-btn primary"><i
                                        class="fas fa-star"></i></button><button type="button"
                                    class="gallery-btn danger"><i class="fas fa-trash"></i></button></div>
                        </div>
                        <div class="gallery-item">
                            <div class="icon"><i class="fas fa-image"></i></div>
                            <div class="gallery-actions"><button type="button" class="gallery-btn primary"><i
                                        class="far fa-star"></i></button><button type="button"
                                    class="gallery-btn danger"><i class="fas fa-trash"></i></button></div>
                        </div>
                        <div class="image-upload" onclick="document.getElementById('fileInput').click()">
                            <div class="upload-icon"><i class="fas fa-cloud-upload-alt"></i></div>
                            <div class="upload-text">Adicionar Imagem</div>
                            <div class="upload-hint">JPG, PNG ou WEBP</div><input type="file" id="fileInput" multiple
                                accept="image/*" style="display:none">
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="form-section-title"><i class="fas fa-list-ul"></i>Especificações Técnicas</div>
                    <div class="specs-list" id="specsList">
                        <div class="spec-item"><input type="text" class="form-input" value="Tipo"><input type="text"
                                class="form-input" value="CP-II-F-32"><button type="button" class="spec-remove"
                                onclick="removeSpec(this)"><i class="fas fa-trash"></i></button></div>
                        <div class="spec-item"><input type="text" class="form-input" value="Resistência"><input
                                type="text" class="form-input" value="32 MPa"><button type="button" class="spec-remove"
                                onclick="removeSpec(this)"><i class="fas fa-trash"></i></button></div>
                        <div class="spec-item"><input type="text" class="form-input" value="Aplicação"><input
                                type="text" class="form-input" value="Uso geral"><button type="button"
                                class="spec-remove" onclick="removeSpec(this)"><i class="fas fa-trash"></i></button>
                        </div>
                    </div>
                    <button type="button" class="add-spec-btn" onclick="addSpec()"><i class="fas fa-plus"></i>Adicionar
                        Especificação</button>
                </div>
                <div class="form-section">
                    <div class="form-section-title"><i class="fas fa-cog"></i>Opções</div>
                    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem">
                        <label style="display:flex;gap:0.75rem;cursor:pointer"><input type="checkbox"
                                style="width:20px;height:20px"><span class="form-label">Destaque</span></label>
                        <label style="display:flex;gap:0.75rem;cursor:pointer"><input type="checkbox" checked
                                style="width:20px;height:20px"><span class="form-label">Novidade</span></label>
                        <label style="display:flex;gap:0.75rem;cursor:pointer"><input type="checkbox" checked
                                style="width:20px;height:20px"><span class="form-label">Ativo</span></label>
                    </div>
                </div>
                <div class="form-section">
                    <div class="form-section-title"><i class="fas fa-history"></i>Histórico</div>
                    <div class="history-item">
                        <div class="history-header">
                            <div class="history-user"><i class="fas fa-user"></i> Administrador</div>
                            <div class="history-date">01/02/2026 14:35</div>
                        </div>
                        <div class="history-action">Alterou preço de R$ 34,90 para R$ 32,90</div>
                    </div>
                    <div class="history-item">
                        <div class="history-header">
                            <div class="history-user"><i class="fas fa-user"></i> Administrador</div>
                            <div class="history-date">28/01/2026 10:22</div>
                        </div>
                        <div class="history-action">Atualizou estoque de 45 para 12 un</div>
                    </div>
                    <div class="history-item">
                        <div class="history-header">
                            <div class="history-user"><i class="fas fa-user"></i> Administrador</div>
                            <div class="history-date">15/01/2026 09:10</div>
                        </div>
                        <div class="history-action">Produto criado</div>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="button" class="btn btn-danger" onclick="confirmDelete()"><i
                            class="fas fa-trash"></i>Excluir</button>
                    <div class="btn-group">
                        <a href="produtos.php" class="btn btn-secondary"><i class="fas fa-times"></i>Cancelar</a>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script>
    function addSpec() {
        const s = document.createElement('div');
        s.className = 'spec-item';
        s.innerHTML =
            '<input type="text" class="form-input" placeholder="Nome"><input type="text" class="form-input" placeholder="Valor"><button type="button" class="spec-remove" onclick="removeSpec(this)"><i class="fas fa-trash"></i></button>';
        document.getElementById('specsList').appendChild(s)
    }

    function removeSpec(b) {
        const l = document.getElementById('specsList');
        if (l.children.length > 1) b.closest('.spec-item').remove();
        else alert('Mantenha ao menos 1 especificação')
    }

    function handleSubmit(e) {
        e.preventDefault();
        alert('✅ Produto atualizado com sucesso!')
    }

    function confirmDelete() {
        if (confirm('⚠️ Excluir produto?\n\nEsta ação não pode ser desfeita!')) {
            alert('❌ Produto excluído!');
            window.location.href = 'produtos.php'
        }
    }
    </script>
</body>

</html>