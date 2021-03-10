/*  Bouton Responsive Menu */

let menuButton = document.getElementById('button-nav');
let menuClose = document.getElementById('button-close');
let menuIco = document.getElementById('ico-responsive');
let menu = document.getElementById("menu");

const toggleNav = () => {

    let menuButtonState = window.getComputedStyle(menuButton);

    if (menuButtonState.display === "block")   /* Clic pour afficher le menu */ {
        menuButton.style.display = "none";
        menuClose.style.display = "block";
        menuIco.style.top = "60px";
        menu.style.display = "flex";
    }
    else if (menuButtonState.display === "none")    /* Clic pour cacher le menu */ {
        menuClose.style.display = "none";
        menuButton.style.display = "block";
        menuIco.style.top = "0";
        menu.style.display = "none";
    }
}
let theTimer;
window.addEventListener('resize', function () {
    clearTimeout(theTimer);
    theTimer = setTimeout(function () {
        if (window.innerWidth > 990) {
            menu.style.display = "flex"
        }
        else if (window.innerWidth <= 990) {
            menu.style.display = "none";
            menuClose.style.display = "none";
            menuButton.style.display = "block";
            menuIco.style.top = "0";
        }
    }, 75)
});



menuButton.addEventListener("click", toggleNav);
menuClose.addEventListener("click", toggleNav);
