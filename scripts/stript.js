
// when user scrolls, execute sticky_scroll function
window.onscroll = function() {hamburgeer_menu()};

// get nabar
var navbar = document.getElementsById("nav-menu");

// get the offset position of the navbar
var hamburger = navbar.offsetTop;

// add the sticky class to the navbar when you reach the scroll position. remove "sticky"
// when you leave scroll position
function hamburger_menu() {
    if (window.pageYOffset >= hamburger) {
        navbar.classList.add("hamburger_on_scroll")
    } else {
        navbar.classList.remove("hamburger_on_scroll");
    }
}

