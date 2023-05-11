
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

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs (n){
    var i;
    var x = document.getElementsByClassName("portfolio-slides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length};
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }

    x[slideIndex-1].style.display = 'block';
}