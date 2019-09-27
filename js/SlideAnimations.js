export const SlideAnimations = (function(){
    const slides = document.querySelectorAll('.swiper-slide');
    
    
    const slideTl = new TimelineMax({
        paused: true
    });

    slideTl.staggerTo(slides, 0.7, {opacity: 1, y: 0, ease: Power1.easeIn, delay: 0.8 }, 0.4);
    slideTl.play();
    
})();