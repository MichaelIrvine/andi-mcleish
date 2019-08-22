// Global Var Pages
const body = document.querySelector('body');


if ( body.classList.contains('home') ) { 

const fpSlider = function() {
	
	const fpSwiper = new Swiper('.swiper-container', {
		direction: 'horizontal',
		loop: false,
		slidesPerView: 'auto',
		spaceBetween: 15,
		parallax: true,
		freeMode: true,
		freeModeSticky: false,
		freeModeMomentum: true,
		preventInteractionOnTransition: true,
		// mousewheel: {
		// 	enabled: true,
		// 	releaseOnEdges: true,
		// },
		autoplay: false,
		speed: 550,
		sensitivity: 1,
		keyboard: {
			enabled: true,
		},
		watchSlidesVisibility: true,
		preloadImages: true,
		updateOnImagesReady: true,
		centeredSlides: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		  },
	
	});



};

fpSlider();
};