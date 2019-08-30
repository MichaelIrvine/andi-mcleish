export const SlideAnimations = (function(){
    const slides = document.querySelectorAll('.swiper-wrapper');
    

    const slideTl = new TimelineMax({
        paused: true
    });

    slideTl.to(slides, 0.7, {opacity: 1, ease: Power1.easeIn, delay: 0.8 })
    slideTl.play();
})();