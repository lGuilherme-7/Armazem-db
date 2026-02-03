</div>
<!-- FIM CONTENT AREA -->

<!-- FOOTER -->
<footer
    style="background: var(--white); padding: 2rem; text-align: center; border-top: 2px solid var(--light); margin-top: 3rem;">
    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
        <div style="color: var(--medium); font-size: 0.9rem;">
            &copy; <?php echo date('Y'); ?> <strong style="color: var(--dark);">ConstruMax</strong> - Todos os direitos
            reservados
        </div>

        <div style="display: flex; gap: 1.5rem; align-items: center;">
            <a href="#" style="color: var(--medium); text-decoration: none; font-size: 0.9rem; transition: 0.3s;"
                onmouseover="this.style.color='var(--primary)'" onmouseout="this.style.color='var(--medium)'">
                <i class="fas fa-file-alt"></i> Documentação
            </a>
            <a href="#" style="color: var(--medium); text-decoration: none; font-size: 0.9rem; transition: 0.3s;"
                onmouseover="this.style.color='var(--primary)'" onmouseout="this.style.color='var(--medium)'">
                <i class="fas fa-life-ring"></i> Suporte
            </a>
            <a href="#" style="color: var(--medium); text-decoration: none; font-size: 0.9rem; transition: 0.3s;"
                onmouseover="this.style.color='var(--primary)'" onmouseout="this.style.color='var(--medium)'">
                <i class="fas fa-shield-alt"></i> Privacidade
            </a>
        </div>
    </div>

    <!-- Info Técnica -->
    <div
        style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--light); color: var(--medium); font-size: 0.8rem;">
        <i class="fas fa-code"></i> Desenvolvido com <span style="color: var(--danger);">❤</span> pela equipe ConstruMax
        <span style="margin: 0 0.5rem;">|</span>
        Versão 2.0
        <?php if (ehAdmin()): ?>
        <span style="margin: 0 0.5rem;">|</span>
        <i class="fas fa-user-shield"></i> Logado como: <strong><?php echo $usuario['nome']; ?></strong>
        <?php endif; ?>
    </div>
</footer>

</main>
<!-- FIM MAIN CONTENT -->

<!-- ============================================= -->
<!-- SCRIPTS JAVASCRIPT                           -->
<!-- ============================================= -->
<script>
/**
 * ============================================
 * FUNÇÕES GLOBAIS
 * ============================================
 */

// Toggle Menu Mobile
function toggleMobileMenu() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    sidebar.classList.toggle('active');
    overlay.classList.toggle('active');
}

// Fecha menu ao clicar fora (mobile)
document.addEventListener('click', function(event) {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    const menuToggle = document.querySelector('.mobile-menu-toggle');

    if (window.innerWidth <= 768) {
        if (!sidebar.contains(event.target) && event.target !== menuToggle) {
            sidebar.classList.remove('active');
            overlay.classList.remove('active');
        }
    }
});

// Auto-hide mensagens após 5 segundos
setTimeout(function() {
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(function(alert) {
        alert.style.transition = 'opacity 0.5s';
        alert.style.opacity = '0';
        setTimeout(function() {
            alert.remove();
        }, 500);
    });
}, 5000);

// Confirmação de exclusão
function confirmarExclusao(mensagem = 'Tem certeza que deseja excluir?') {
    return confirm(mensagem);
}

// Formata input de preço em tempo real
function formatarInputPreco(input) {
    let valor = input.value.replace(/\D/g, '');
    valor = (valor / 100).toFixed(2);
    input.value = 'R$ ' + valor.replace('.', ',');
}

// Formata CPF em tempo real
function formatarInputCPF(input) {
    let valor = input.value.replace(/\D/g, '');

    if (valor.length <= 11) {
        valor = valor.replace(/(\d{3})(\d)/, '$1.$2');
        valor = valor.replace(/(\d{3})(\d)/, '$1.$2');
        valor = valor.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
    }

    input.value = valor;
}

// Formata telefone em tempo real
function formatarInputTelefone(input) {
    let valor = input.value.replace(/\D/g, '');

    if (valor.length <= 11) {
        if (valor.length === 11) {
            valor = valor.replace(/^(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
        } else if (valor.length === 10) {
            valor = valor.replace(/^(\d{2})(\d{4})(\d{4})/, '($1) $2-$3');
        } else {
            valor = valor.replace(/^(\d{2})(\d{0,5})/, '($1) $2');
        }
    }

    input.value = valor;
}

// Formata CEP em tempo real
function formatarInputCEP(input) {
    let valor = input.value.replace(/\D/g, '');

    if (valor.length <= 8) {
        valor = valor.replace(/^(\d{5})(\d)/, '$1-$2');
    }

    input.value = valor;
}

// Copia texto para clipboard
function copiarTexto(texto) {
    navigator.clipboard.writeText(texto).then(function() {
        alert('Texto copiado!');
    });
}

// Loading overlay
function mostrarLoading(mensagem = 'Carregando...') {
    const overlay = document.createElement('div');
    overlay.id = 'loading-overlay';
    overlay.style.cssText = `
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.7);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 9999;
                flex-direction: column;
                gap: 1rem;
            `;

    overlay.innerHTML = `
                <div style="width: 60px; height: 60px; border: 6px solid rgba(255,255,255,0.2); border-top-color: #fff; border-radius: 50%; animation: spin 1s linear infinite;"></div>
                <div style="color: #fff; font-size: 1.1rem; font-weight: 600;">${mensagem}</div>
                <style>@keyframes spin { to { transform: rotate(360deg); } }</style>
            `;

    document.body.appendChild(overlay);
}

function esconderLoading() {
    const overlay = document.getElementById('loading-overlay');
    if (overlay) {
        overlay.remove();
    }
}

// Preview de imagem antes do upload
function previewImagem(input, previewElementId) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            const preview = document.getElementById(previewElementId);
            if (preview) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// Validação de formulário
function validarFormulario(formId) {
    const form = document.getElementById(formId);

    if (!form) {
        console.error('Formulário não encontrado:', formId);
        return false;
    }

    const inputs = form.querySelectorAll('[required]');
    let valido = true;

    inputs.forEach(function(input) {
        if (!input.value.trim()) {
            input.style.borderColor = 'var(--danger)';
            valido = false;
        } else {
            input.style.borderColor = '';
        }
    });

    if (!valido) {
        alert('Por favor, preencha todos os campos obrigatórios!');
    }

    return valido;
}

// Máscaras automáticas
document.addEventListener('DOMContentLoaded', function() {
    // CPF
    document.querySelectorAll('input[data-mask="cpf"]').forEach(function(input) {
        input.addEventListener('input', function() {
            formatarInputCPF(this);
        });
    });

    // Telefone
    document.querySelectorAll('input[data-mask="telefone"]').forEach(function(input) {
        input.addEventListener('input', function() {
            formatarInputTelefone(this);
        });
    });

    // CEP
    document.querySelectorAll('input[data-mask="cep"]').forEach(function(input) {
        input.addEventListener('input', function() {
            formatarInputCEP(this);
        });
    });

    // Preço
    document.querySelectorAll('input[data-mask="preco"]').forEach(function(input) {
        input.addEventListener('input', function() {
            formatarInputPreco(this);
        });
    });
});

// Tooltip simples
function mostrarTooltip(elemento, mensagem) {
    const tooltip = document.createElement('div');
    tooltip.className = 'tooltip';
    tooltip.textContent = mensagem;
    tooltip.style.cssText = `
                position: absolute;
                background: var(--dark);
                color: var(--white);
                padding: 0.5rem 1rem;
                border-radius: 8px;
                font-size: 0.85rem;
                white-space: nowrap;
                z-index: 9999;
                pointer-events: none;
            `;

    document.body.appendChild(tooltip);

    const rect = elemento.getBoundingClientRect();
    tooltip.style.top = (rect.top - tooltip.offsetHeight - 10) + 'px';
    tooltip.style.left = (rect.left + (rect.width / 2) - (tooltip.offsetWidth / 2)) + 'px';

    setTimeout(function() {
        tooltip.remove();
    }, 2000);
}

// Impressão
function imprimirPagina() {
    window.print();
}

// Scroll suave
function scrollTo(elementId) {
    const element = document.getElementById(elementId);
    if (element) {
        element.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
}

// Atualização automática de tempo (para dashboards)
function atualizarRelogio() {
    const agora = new Date();
    const horas = String(agora.getHours()).padStart(2, '0');
    const minutos = String(agora.getMinutes()).padStart(2, '0');
    const segundos = String(agora.getSeconds()).padStart(2, '0');

    const elementoRelogio = document.getElementById('relogio');
    if (elementoRelogio) {
        elementoRelogio.textContent = `${horas}:${minutos}:${segundos}`;
    }
}

// Atualiza relógio a cada segundo (se existir elemento #relogio)
if (document.getElementById('relogio')) {
    setInterval(atualizarRelogio, 1000);
    atualizarRelogio(); // Executa imediatamente
}

// Log de atividade (opcional - pode ser usado para debug)
function log(mensagem, tipo = 'info') {
    if (console && typeof console.log === 'function') {
        const estilo = {
            'info': 'color: #3498DB',
            'sucesso': 'color: #27AE60',
            'erro': 'color: #C0392B',
            'aviso': 'color: #F39C12'
        };

        console.log('%c[ConstruMax] ' + mensagem, estilo[tipo] || estilo.info);
    }
}

// Inicialização
log('Sistema ConstruMax carregado com sucesso!', 'sucesso');

<?php if (ehAdmin()): ?>
log('Modo Administrador ativado', 'info');
<?php endif; ?>
</script>

<!-- Scripts personalizados da página (se existirem) -->
<?php if (isset($scriptsExtras)): ?>
<?php echo $scriptsExtras; ?>
<?php endif; ?>

</body>

</html>