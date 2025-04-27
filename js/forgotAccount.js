var prevScrollpos = window.pageYOffset; 
window.onscroll = function() {
    var scrollPoint = 150;  
    var body = document.body;
    var navigator = document.getElementById("navigator");
    var navbar = document.getElementById("navbar");
    var currentScrollPos = window.pageYOffset;

    if (document.documentElement.scrollTop > scrollPoint || body.scrollTop > scrollPoint) {
        navbar.style.backgroundColor = "rgba(255, 255, 255, 0.792)";
        navigator.style.position = "fixed";
        navbar.style.boxShadow = "inset 0px 0px 20px 10px rgba(0, 0, 0, 0.2), 2px 2px 4px 2px rgba(0, 0, 0, 0.3)";
        navigator.style.height = "50px";
        document.getElementById("scrollToTopBtn").style.display = "block";

    } else {
        if (prevScrollpos > currentScrollPos) {
            navigator.style.position = "fixed";
        } else {
            navigator.style.position = "absolute";
        }
        document.getElementById("scrollToTopBtn").style.display = "none";
        navbar.style.backgroundColor = "white";
        navbar.style.boxShadow = "none";
        navigator.style.height = "0";
    }
    prevScrollpos = currentScrollPos;
}
function scrollToTop() {
    document.body.scrollTop = 0; 
    document.documentElement.scrollTop = 0;
}

