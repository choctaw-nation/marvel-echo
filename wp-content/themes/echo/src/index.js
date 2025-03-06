import './styles/main.scss';
import './styles/vendors/bootstrap.scss';
import 'bootstrap/js/dist/collapse';
import 'bootstrap/js/dist/modal';
import '@slightlyoff/lite-vimeo';
import AOS from 'aos';
import 'aos/dist/aos.css';
import Swiper from 'swiper';
import { Navigation, A11y, Pagination } from 'swiper/modules';
import 'swiper/scss';
import 'swiper/scss/navigation';
import 'swiper/scss/pagination';
import 'swiper/scss/a11y';

new Swiper( '.swiper', {
	modules: [ Navigation, A11y, Pagination ],
	slidesPerView: 4,
	spaceBetween: 10,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	breakpoints: {
		'@0.00': {
			slidesPerView: 1,
			spaceBetween: 20,
		},
		'@0.75': {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		'@1.00': {
			slidesPerView: 4,
			spaceBetween: 10,
		},
	},
} );

AOS.init( {
	// once: true,
} );
