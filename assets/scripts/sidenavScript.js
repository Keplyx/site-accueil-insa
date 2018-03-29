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
