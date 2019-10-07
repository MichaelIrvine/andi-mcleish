export const SlideAnimations = (function(){
    const slides = document.querySelectorAll('.swiper-slide');
    
    const slideTl = new TimelineMax({
        paused: true
    });

    slideTl.staggerFromTo(slides, 1.2, {opacity: 0, y: 4, scale: 1.01 }, {opacity: 1, y: 0, scale:1, ease: Power1.easeIn, delay: 1 }, 0.4);
    slideTl.play();

})();