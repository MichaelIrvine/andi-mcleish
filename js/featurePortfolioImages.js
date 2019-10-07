export const featurePortfolioImages = (function() {

  // --Vars
  const portfolioLinks = document.querySelectorAll("li[data-portfolio-image]");

  let viewPortSize = window.matchMedia('(max-width: 768px)');

  
    if(!viewPortSize){
        portfolioLinks.forEach(link => {
            link.addEventListener("mouseenter", function(e) {
              let hoveredEl = link.dataset.portfolioImage;
        
              document
                .querySelector(`img[data-portfolio-image=${hoveredEl}]`)
                .classList.add("display-image");
            });
          });
        
          portfolioLinks.forEach(link => {
            link.addEventListener("mouseleave", function(e) {
              let hoveredEl = link.dataset.portfolioImage;
        
              document
                .querySelector(`img[data-portfolio-image=${hoveredEl}]`)
                .classList.remove("display-image");
            });
          });
    };
  



})();
