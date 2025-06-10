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
});

 function sidebar(page) {
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
        })
        .catch(error => {
            conteudo.innerHTML = `<p class="text-red-500">Erro: ${error.message}</p>`;
        });
}

window.addEventListener('DOMContentLoaded', () => {
    sidebar('/admin/dashboard/index.php');
});

function setPageTitle(title) {
    document.getElementById('page-title').innerText = title;
}

