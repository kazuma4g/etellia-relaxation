const hamburger =  document.querySelector('.hamburger');
const navMenu =  document.querySelector('.nav_menu');

var isActive = false;

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    if(isActive) {
        enableScroll();
        isActive = false;
    }else {
        disableScroll();
        isActive = true;
    }
})

function disableScroll() {
    // Get the current page scroll position
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
  
        // if any scroll is attempted, set this to the previous value
        window.onscroll = function() {
            window.scrollTo(scrollLeft, scrollTop);
        };
}
  
function enableScroll() {
    window.onscroll = function() {};
}
