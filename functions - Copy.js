windom.onscroll = function()
{stickyFunkction()};

var navbar = document.getElementsByClassName("header");
var sticky = navbar.offsetTop;

function stickyFunkction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    }
    else{
        navbar.classList.remove("sticky");
    }
}