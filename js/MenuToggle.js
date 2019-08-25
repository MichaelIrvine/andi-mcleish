
export const menuToggle = (function(){
    // -Global Vars
    const menu = document.querySelector('.main-navigation');
    const menuToggle = document.querySelector('.main-menu-toggle');
    const menuItems = document.querySelectorAll('.menu-item');
    const menuOpen = document.querySelector('.menu-toggle_open');
    const menuClose = document.querySelector('.menu-toggle_close');

    // GSAP Animation
    const tl = new TimelineMax({
        paused: true
      });

    console.log(tl)  
    
    
    tl.to(menuOpen, 0, {y: -30, ease: Power4.easeOut});
    tl.to(menuClose,0,{y: -22, ease: Power4.easeOut});
    tl.to(menu, 1, {visibility: "visible", ease: Power4.easeOut} );
    tl.staggerTo(menuItems, 0.5, {opacity: 1, ease: Power4.easeOut})
    tl.reversed(true);
    
    menuOpen.addEventListener('click', function(){
        tl.play();
        console.log("clicked");
        
    });
    menuClose.addEventListener('click', function(){
        tl.reverse();
    });


})();