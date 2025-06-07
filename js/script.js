// script.js

// Gestion du bouton flottant "Modifier la liste de souhaits" dans dashboard étudiant
const editWishlistBtn = document.getElementById('editWishlistBtn');
if (editWishlistBtn) {
    editWishlistBtn.addEventListener('click', () => {
        window.location.href = 'edit_wishlist.php';
    });
}

// Initialisation du slider Swiper (utilisé dans la page d'accueil)
const swiperContainer = document.querySelector('.swiper-container');
if (swiperContainer && typeof Swiper !== 'undefined') {
    const swiper = new Swiper('.swiper-container', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}
