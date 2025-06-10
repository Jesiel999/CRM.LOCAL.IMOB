function changeMainImage(thumbnail) {
    const mainImage = document.getElementById('main-image');
    mainImage.src = thumbnail.src;
    
    document.querySelectorAll('.thumbnail').forEach(item => {
        item.classList.remove('active');
    });
    thumbnail.classList.add('active');
}

function changeTab(tabId) {
    document.querySelectorAll('.tab-content').forEach(content => {
        content.classList.add('hidden');
    });
    
    document.getElementById(tabId).classList.remove('hidden');

    document.querySelectorAll('.tab-button').forEach(button => {
        button.classList.remove('active');
    });
    event.currentTarget.classList.add('active');
}

document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.tab-button').click();
});