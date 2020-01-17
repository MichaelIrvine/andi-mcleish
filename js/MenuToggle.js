
export const menuToggle = (function(){
    // -Global Vars
    const menu = document.querySelector('.main-navigation');
    const menuItems = document.querySelectorAll('.menu-item');
    const menuOpen = document.querySelector('.menu-toggle_open');
    const menuClose = document.querySelector('.menu-toggle_close');
    const menuOpenMobile = document.querySelector('.menu-toggle_open_mobile');
    const menuCloseMobile = document.querySelector('.menu-toggle_close_mobile');

    const openMenuTl = new TimelineMax({
        paused: true
      });
    
    openMenuTl.to(menu, 0, {visibility: "visible", ease: Power4.easeOut} );
    openMenuTl.to(menu, 0.1, {opacity: 1, ease: Power4.easeOut} );
    openMenuTl.to(menuOpen, 0.1, {opacity: 0, y: -24, visibility: "hidden", ease: Back.easeInOut.config(2)});
    openMenuTl.to(menuClose,0.1,{y: -20, opacity: 1, ease: Power4.easeOut});
    openMenuTl.staggerTo(menuItems, 0.5, {opacity: 1, y: 0, ease: Power2.easeInOut, delay: 0.4}, 0.3)
    openMenuTl.reversed(true);

    
    menuOpen.addEventListener('click', function(){
        openMenuTl.play();        
    });
    menuClose.addEventListener('click', function(){
        openMenuTl.reverse().timeScale(3);
    });

    const openMobileMenuTl = new TimelineMax({
        paused: true
    })

    openMobileMenuTl.to(menu, 0, {visibility: "visible", ease: Power4.easeOut} );
    openMobileMenuTl.to(menu, 0.1, {opacity: 1, ease: Power4.easeOut} );
    openMobileMenuTl.to(menuOpenMobile, 0.1, {opacity: 0, visibility: "hidden", ease: Back.easeInOut.config(2)});
    openMobileMenuTl.to(menuCloseMobile,0.1,{opacity: 1, visibility: "visible", ease: Power4.easeOut});
    openMobileMenuTl.staggerTo(menuItems, 0.5, {opacity: 1, y: -3, ease: Power2.easeInOut, delay: 0.5}, 0.3)
    openMobileMenuTl.reversed(true);

    menuOpenMobile.addEventListener('click', function(){
        openMobileMenuTl.play();        
    });
    menuCloseMobile.addEventListener('click', function(){
        openMobileMenuTl.reverse().timeScale(5);
    });

})();