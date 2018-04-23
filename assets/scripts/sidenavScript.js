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
    sidenav.css("margin-left", "-270px");
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

/*
 * Open navigation menu when swiping right (if not swiping on an image)
 */
var img = document.querySelector('.sidenav');
// Create a manager to manager the element
var manager = new Hammer.Manager(img);
// Create a recognizer
var Swipe = new Hammer.Swipe();
// Add the recognizer to the manager
manager.add(Swipe);

// Subscribe to the swipe event
manager.on('swipe', function(e) {
    var direction = e.offsetDirection;
    if (direction === 4) { // right
        openNav();
    } else if (direction === 2) { // left
        closeNav();
    }
});

// Animate hamburger on hover
hamburger.hover(function(){
    $("#bar1").css("background-color", "#c5af86");
    $("#bar2-1").css("background-color", "#73b795");
    $("#bar2-2").css("background-color", "#73b795");
    $("#bar2-1").css("left", "-5px");
    $("#bar2-2").css("right", "-5px");
    $("#bar3").css("background-color", "#c5af86");
}, function(){
    $("#bar1").css("background-color", "white");
    $("#bar2-1").css("background-color", "white");
    $("#bar2-2").css("background-color", "white");
    $("#bar2-1").css("left", "0");
    $("#bar2-2").css("right", "0");
    $("#bar3").css("background-color", "white");
});