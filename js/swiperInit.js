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
		
		});
	}

	portfolioMainSlider();
};


if(body.classList.contains('single-projects')){
	console.log("single-projects y");
	
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
		
		});
	}

	singleProjectSwiper();
};

