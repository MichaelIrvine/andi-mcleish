export const PageAnimations = (function(){
    // Animations for Pages on load
    const body = document.querySelector('body');

    // Page load animations for Bio Page
    // Check if page is Bio Page
    if(body.classList.contains('page-bio')){
    
        // --Vars
        const bioColOne = document.querySelector('.bio-col_01');
        const bioColTwo = document.querySelector('.bio-col_02');

        const bioTl = new TimelineMax({
            paused: true
        });

        bioTl.to(bioColOne, 0.5, {opacity: 1,  ease: Power1.easeIn, delay: 0.6 })
        .to(bioColTwo, 0.5, {opacity: 1,  ease: Power1.easeIn }, "-=0.35");

        bioTl.play();
    };

    if(body.classList.contains('page-contact')){
        
        // --Vars
        const contactColOne = document.querySelector('.contact-col_01');
        const contactColTwo = document.querySelector('.contact-col_02');

        const contactTl = new TimelineMax({
            paused: true
        });

        contactTl.to(contactColOne, 0.7, {opacity: 1, y: -6, ease: Power1.easeIn, delay: 0.5 })
        .to(contactColTwo, 0.7, {opacity: 1,  ease: Power1.easeIn });

        contactTl.play();
    };

    if(body.classList.contains('page-portfolio')){
        
        // --Vars
        const portfolioListItems = document.querySelectorAll('.project-list-item');
        const portfolioImages = document.querySelector('.portfolio-image-container');

        const portfolioTl = new TimelineMax({
            paused: true
        });

        portfolioTl.staggerFromTo(portfolioListItems, 0.6, {opacity: 0, y: 3}, {opacity: 1, y:0, ease: Power1.easeIn}, 0.3)
        .fromTo(portfolioImages, 0.9, {opacity:0, y: 3}, {opacity: 1, y:0,  ease: Power1.easeIn },"-=0.3");

        portfolioTl.play();
    };
    

})();