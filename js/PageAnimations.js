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

        bioTl.to(bioColOne, 0.6, {opacity: 1, y:-6, ease: Power1.easeIn, delay: 0.6 })
        .to(bioColTwo, 0.8, {opacity: 1, y:-6, ease: Power1.easeIn });

        bioTl.play();
    };

    if(body.classList.contains('page-contact')){
        console.log("you know it dowg");
        
        // --Vars
        // const bioColOne = document.querySelector('.bio-col_01');
        // const bioColTwo = document.querySelector('.bio-col_02');

        // const bioTl = new TimelineMax({
        //     paused: true
        // });

        // bioTl.to(bioColOne, 0.6, {opacity: 1, y:-6, ease: Power1.easeIn, delay: 0.6 })
        // .to(bioColTwo, 0.8, {opacity: 1, y:-6, ease: Power1.easeIn });

        // bioTl.play();
    };
    

})();