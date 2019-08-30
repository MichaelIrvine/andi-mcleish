export const hideFooter = (function(){
    // --Vars
    const body = document.querySelector('body');
    const footer = document.querySelector('.site-footer');

    if( body.classList.contains('archive') || body.classList.contains('single')){
        footer.classList.add('visually-hide-footer');
    };

})();