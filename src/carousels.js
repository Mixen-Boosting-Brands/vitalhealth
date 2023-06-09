// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// init Swiper:
const swiperLosMasVendidos = new Swiper('.swiper-los-mas-vendidos', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    slidesPerView: 1,
    spaceBetween: 5,
    grabCursor: true,

    effect: 'coverflow',
    coverflowEffect: {
        rotate: 0,
        scale: 1,
        slideShadows: false,
    },

    // Responsive breakpoints
    breakpoints: {
        // when window width is >= 576px
        576: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        // when window width is >= 768px
        768: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        // when window width is >= 992px
        992: {
            slidesPerView: 3,
            spaceBetween: 100
        }
    }
});