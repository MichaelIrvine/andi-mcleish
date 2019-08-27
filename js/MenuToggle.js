
export const menuToggle = (function(){
    // -Global Vars
    const menu = document.querySelector('.main-navigation');
    const menuItems = document.querySelectorAll('.menu-item');
    const menuOpen = document.querySelector('.menu-toggle_open');
    const menuClose = document.querySelector('.menu-toggle_close');

    // GSAP Animation
    const tl = new TimelineMax({
        paused: true
      });
    
    
    tl.to(menu, 0, {visibility: "visible", ease: Power4.easeOut} );
    tl.to(menuOpen, 0.1, {y: -30, ease: Power4.easeOut}, "-=0.25");
    tl.to(menuClose,0.1,{y: -22, ease: Power4.easeOut});
    tl.staggerTo(menuItems, 0.7, {opacity: 1, ease: Power4.easeIn}, 0.09)
    tl.reversed(true);
    
    menuOpen.addEventListener('click', function(){
        tl.play();
        console.log("clicked");
        
    });
    menuClose.addEventListener('click', function(){
        tl.reverse();
    });


})();