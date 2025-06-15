function toggleImovel() {
    const selectContato = document.getElementById('contato');
    const imovelDiv = document.querySelector('.imoveisDiv');
    const valor = selectContato.value.trim().toLowerCase();

    if (valor === 'visita') {
        imovelDiv.style.display = 'block';
    } else {
        imovelDiv.style.display = 'none';
    }
    }

    document.addEventListener('DOMContentLoaded', function () {
    const selectContato = document.getElementById('contato');
    toggleImovel();
    selectContato.addEventListener('change', toggleImovel);
});