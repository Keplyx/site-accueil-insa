var menuOpen = false;
var sidenav = $("#menuSidenav");
var hamburger = $("#hamburger");
var backButton = $("#back_button");

function openNav() {
    sidenav.css("margin-left", "0");
    sidenav.css("box-shadow", "5px 5px 10px #151515");
    backButton.addClass("active_background");
    enableHamburger();
    /* Enables hamburger icon */
    menuOpen = true;
}

function closeNav() {
    sidenav.css("margin-left", "-250px");
    sidenav.css("box-shadow", "none");
    backButton.removeClass("active_background");
    disableHamburger();
    /* Disables hamburger icon */
    menuOpen = false;
}

function toggleNav() {
    if (menuOpen) {
        closeNav();
    } else {
        openNav();
    }
}

function disableHamburger() {
    hamburger.removeClass("change");
}

function enableHamburger() {
    hamburger.addClass("change");
}
