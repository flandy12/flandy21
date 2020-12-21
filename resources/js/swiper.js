// core version + navigation, pagination modules:
import Swiper, {
    Navigation,
    Pagination
} from 'swiper';

// configure Swiper to use modules
Swiper.use([Navigation, Pagination]);
// // import Swiper styles
import 'swiper/swiper-bundle.css';
// init Swiper:
var swiper = new Swiper('.swiper-container', {
    slidesPerColumn: 1,
    slidesPerView: 1,
    width:280,
    height:500,
    spaceBetween:-10,
    setWrapperSize:true,
    slidesPerColumnFill: 'row',
    slidesOffsetBefore: 0,
    normalizeSlideIndex: true,
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
    },
    centeredSlides: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        hideOnClick: true,
    },
});

