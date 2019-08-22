export const menuToggle = (function(){
    // -Global Vars
    const menu = document.querySelector('.main-navigation');
    const menuToggle = document.querySelector('.main-menu-toggle');
    const menuItems = document.querySelectorAll('#primary-menu > .menu-item');
    
    
    menuToggle.addEventListener('click', function(){
        menu.classList.toggle('display');
    })
})();