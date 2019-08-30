
export const menuToggle = (function(){
    // -Global Vars
    const menu = document.querySelector('.main-navigation');
    const menuItems = document.querySelectorAll('.menu-item');
    const menuOpen = document.querySelector('.menu-toggle_open');
    const menuClose = document.querySelector('.menu-toggle_close');

    // GSAP Animation
    const openMenuTl = new TimelineMax({
        paused: true
      });
    
    
    openMenuTl.to(menu, 0, {visibility: "visible", ease: Power4.easeOut} );
    openMenuTl.to(menu, 0.1, {opacity: 1, ease: Power4.easeOut} );
    openMenuTl.to(menuOpen, 0.1, {y: -30, ease: Power4.easeOut}, "-=0.25");
    openMenuTl.to(menuClose,0.1,{y: -22, ease: Power4.easeOut});
    openMenuTl.staggerTo(menuItems, 0.5, {opacity: 1, y: 0, ease: Power2.easeInOut, delay: 0.5}, 0.3)
    openMenuTl.reversed(true);

    
    menuOpen.addEventListener('click', function(){
        openMenuTl.play();        
    });
    menuClose.addEventListener('click', function(){
        openMenuTl.reverse().timeScale(3);
    });


})();