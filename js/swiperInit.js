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
		autoplay: { delay: 4300 },
		speed: 730,
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
		  breakpoints: {
			// when window width is <= 768px
			768: {
			  slidesPerView: 1,
			  allowTouchMove: false,
			  autoplay: false,
			},
		  }
	
	});



};

fpSlider();
};


if(body.classList.contains('archive')){

	const portfolioMainSlider = function() {
	
		const portfolioSwiper = new Swiper('.swiper-container_portfolio', {
			direction: 'horizontal',
			loop: false,
			slidesPerView: 'auto',
			spaceBetween: 15,
			parallax: true,
			freeMode: true,
			freeModeSticky: false,
			freeModeMomentum: true,
			preventInteractionOnTransition: true,
			autoplay: false,
			speed: 1000,
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
			mousewheel: {
				enabled: true,
				releaseOnEdges: true,
			},
			breakpoints: {
				420: {
				  freeMode: false,
				},
			  }
		});
	}

	portfolioMainSlider();
};


if(body.classList.contains('single-projects')){
	
	const singleProjectSwiper = function() {
	
		const singleProjectSwiper = new Swiper('.swiper-container_single-project', {
			direction: 'horizontal',
			loop: false,
			slidesPerView: 'auto',
			spaceBetween: 15,
			parallax: true,
			freeMode: true,
			freeModeSticky: false,
			freeModeMomentum: true,
			preventInteractionOnTransition: true,
			autoplay: false,
			speed: 700,
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
			mousewheel: {
				enabled: true,
				releaseOnEdges: true,
			},
			breakpoints: {
				420: {
				  freeMode: false,
				},
			  }
		
		});
	}

	singleProjectSwiper();
};

