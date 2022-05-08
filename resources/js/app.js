require('./bootstrap');
const swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 0,
        stretch: 1,
        depth: 500,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
    loop: true
});


function toggleMenu() {
    const menuToggle = document.querySelector(".toggle");
    const navigation = document.querySelector(".navigation");
    menuToggle.classList.toggle('active');
    navigation.classList.toggle('active');
}