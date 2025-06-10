function goToSlide(codigo, index) {
    const carousel = document.getElementById(`carousel-${codigo}`);
    const imagens = carousel.querySelectorAll('.imagens');

    if (imagens.length > 0) {
        const largura = imagens[0].clientWidth;
        carousel.scrollLeft = largura * index;
    }
}