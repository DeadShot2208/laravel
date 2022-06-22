var $button = $('#menu-btn');

$button.on('click', function(e){
    e.preventDefault();
    if( $button.hasClass('open') ){
        $button.removeClass('open');
        $button.addClass('close');
    } else {
        $button.removeClass('close');
        $button.addClass('open');
    }
});

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,


    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    scrollbar: {
        el: '.swiper-scrollbar',
        draggable: true,
    },

    effect: 'coverflow',
    coverflowEffect: {
        rotate: 30,
        slideShadows: true,
    },
    autoplay: {
        delay: 4000,
    },

});


var sliderSelector = '.swiper-container',
    options = {
        init: false,
        loop: true,
        speed: 800,
        slidesPerView: 1,
        spaceBetween: 0,
        centeredSlides : true,
        effect: 'coverflow',
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 60,
            modifier: 1,
        },
        grabCursor: true,
        parallax: true,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            1000: {
                slidesPerView: 2,
                spaceBetween: 0
            },
            767: {
                slidesPerView: 2,
                spaceBetween: -80
            }
        }
    };
var mySwiper = new Swiper(sliderSelector, options);
mySwiper.init();










