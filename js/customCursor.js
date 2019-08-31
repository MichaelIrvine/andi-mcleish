
export const customCursor = (function(){
// Cursor Vaiables
const mainCursor = document.querySelector("#cursor");
const triggers = document.querySelectorAll("a, button, .swiper-button-prev, .swiper-button-next");



// Find mouse position and append #cursor div to cursor
const makeCursor = function(e) {
  const mouseCoords = {
    x: e.clientX,
    y: e.clientY
  };

  mainCursor.style.top = `${mouseCoords.y}px`;
  mainCursor.style.left = `${mouseCoords.x}px`;
};

// When the mouse is inside browser window make sure it does not have 'cursor--hidden' class
const mouseOnScreen = function(e) {
  if (
    event.clientY <= 1 ||
    event.clientX <= 1 ||
    (event.clientX <= window.innerWidth || event.clientY <= window.innerHeight)
  ) {
    mainCursor.classList.remove("cursor--hidden");
  }
};

// When mouse is outside of browser window add 'cursor--hidden' class
const mouseOffScreen = function(e) {
  if (
    event.clientY <= 0 ||
    event.clientX <= 0 ||
    (event.clientX >= window.innerWidth || event.clientY >= window.innerHeight)
  ) {
    mainCursor.classList.add("cursor--hidden");
  }
};

const cursorGrow = function(e) {
  mainCursor.classList.add("cursor--active");
};

const cursorResize = function(e) {
  mainCursor.classList.remove("cursor--active");
};

const cursorPulse = function(){
  mainCursor.classList.add('pulse');
  
  setTimeout(function(){ mainCursor.classList.remove('pulse'); }, 70);
  
}



window.addEventListener("mousemove", makeCursor);
document.addEventListener("mouseenter", mouseOnScreen);
document.addEventListener("mouseleave", mouseOffScreen);
triggers.forEach(trigger => trigger.addEventListener("mouseenter", cursorGrow));
triggers.forEach(trigger =>
  trigger.addEventListener("mouseleave", cursorResize)
);
triggers.forEach(trigger => trigger.addEventListener('click', cursorPulse));

})();


