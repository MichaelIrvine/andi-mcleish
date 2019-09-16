export const featurePortfolioImages = (function(){
    // --Vars
    const portfolioLinks = document.querySelectorAll('li[data-portfolio-image]');
    // const portfolioImages = document.querySelectorAll('img[data-portfolio-image]');
    

    portfolioLinks.forEach(link => {link.addEventListener('mouseenter', function(e){
        console.log(link);
        let hoveredEl = link.dataset.portfolioImage;

    
        document.querySelector(`img[data-portfolio-image=${hoveredEl}]`).classList.add('display-image');

        });    
    });
    
    portfolioLinks.forEach(link => {link.addEventListener('mouseleave', function(e){
        console.log(link);
        let hoveredEl = link.dataset.portfolioImage;

        document.querySelector(`img[data-portfolio-image=${hoveredEl}]`).classList.remove('display-image');

        });    
    }); 


})();