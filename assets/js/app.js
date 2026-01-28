// Header Scroll Effect
    const header = document.getElementById('header');
    const scrollTop = document.getElementById('scrollTop');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
            scrollTop.classList.add('visible');
        } else {
            header.classList.remove('scrolled');
            scrollTop.classList.remove('visible');
        }
    });

    // Scroll to Top
    scrollTop.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Add to Cart Animation
    const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');

    addToCartButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();

            // Adiciona animação
            this.style.transform = 'scale(0.9)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 200);

            // Atualiza badge do carrinho (exemplo)
            const cartBadge = document.querySelector('.cart-badge');
            const currentCount = parseInt(cartBadge.textContent);
            cartBadge.textContent = currentCount + 1;

            // Feedback visual
            cartBadge.style.transform = 'scale(1.5)';
            setTimeout(() => {
                cartBadge.style.transform = 'scale(1)';
            }, 300);

            // Aqui você adicionaria a lógica real de adicionar ao carrinho
            console.log('Produto adicionado ao carrinho!');
        });
    });

    // Search Form
    const searchForm = document.querySelector('.search-form');
    const searchInput = document.querySelector('.search-input');

    searchForm.addEventListener('submit', (e) => {
        if (searchInput.value.trim() === '') {
            e.preventDefault();
            searchInput.focus();
        }
    });

    // Mobile Menu Toggle (para implementar depois)
    const mobileToggle = document.querySelector('.mobile-toggle');
    const navigation = document.querySelector('.navigation');

    mobileToggle.addEventListener('click', () => {
        navigation.style.display = navigation.style.display === 'block' ? 'none' : 'block';
    });

    // Lazy Loading para imagens (quando adicionar imagens reais)
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                        observer.unobserve(img);
                    }
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // Quick View Modal (para implementar depois)
    const quickViewButtons = document.querySelectorAll('.quick-action-btn');

    quickViewButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            console.log('Quick view clicked');
            // Aqui você abriria um modal com detalhes do produto
        });
    });