var menuOpen = false;
var sidenav = $("#menuSidenav");
var hamburger = $("#hamburger");
var backButton = $("#back_button");

/*
 * Open navigation menu, change Hamburger icon to selected state
 * and display the back button overlay over the page
 */

function openNav() {
    sidenav.css("margin-left", "0");
    sidenav.css("box-shadow", "5px 5px 10px #151515");
    backButton.addClass("active_background");
    enableHamburger();
    menuOpen = true;
}


/*
 * Close navigation menu, change Hamburger icon back to default state
 * and hide the back button overlay
 */
function closeNav() {
    sidenav.css("margin-left", "-250px");
    sidenav.css("box-shadow", "none");
    backButton.removeClass("active_background");
    disableHamburger();
    menuOpen = false;
}


/*
 * Toggle the navigation bar
 */
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
