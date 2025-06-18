

document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('toggle-sidebar');
    if (toggleBtn) {
        toggleBtn.addEventListener('click', function () {
            const sidebar = document.querySelector('.sidebar');
            const content = document.querySelector('.content-area');
            sidebar.classList.toggle('collapsed');
            content.classList.toggle('expanded');
        });
    }

    // Verifica se tem página salva no sessionStorage
    const savedPage = sessionStorage.getItem('paginaAtual');
    const savedTitle = sessionStorage.getItem('tituloAtual');
    
    if (savedPage) {
        carregarPagina(savedPage, savedTitle);
    } else {
        carregarPagina('/admin/dashboard/index.php', 'Relatórios e Análises');
    }
});

function carregarPagina(page, title = '') {
    const conteudo = document.querySelector('main');
    conteudo.innerHTML = '<p class="text-gray-500">Carregando...</p>';

    fetch(page)
        .then(response => {
            if (!response.ok) {
                throw new Error('Erro ao carregar a página.');
            }
            return response.text();
        })
        .then(html => {
            conteudo.innerHTML = html;
            if (title) setPageTitle(title);
            sessionStorage.setItem('paginaAtual', page);  // Salva a última página
            sessionStorage.setItem('tituloAtual', title); // Salva o título
        })
        .catch(error => {
            conteudo.innerHTML = `<p class="text-red-500">Erro: ${error.message}</p>`;
        });
}

function setPageTitle(title) {
    document.getElementById('page-title').innerText = title;
}
