var showcase = $("#img_big");
var showcaseButton = $("#photo_buttons");
var showcaseLink = $("#img_big_link");
var photoOverlay = $("#photo_overlay");
var headerTop = $("#header_top");
var sideNav = $("#menuSidenav");


/*
 * Display selected image in showcase
 * When clicked, display image in full size
 */
function displayBig(elem) {
    changeImage($(elem).attr('src'));
    disableFullscreen();
    photoOverlay.fadeIn(500);
}

/*
 * Hide showcase image
 */
function closeBig() {
    disableFullscreen();
    photoOverlay.fadeOut(500);
}

/*
 * Toggle display of buttons/header
 */
function toggleFullscreen() {
    if (showcaseButton.css("display") == "none")
        disableFullscreen();
    else
        enableFullscreen();
}

function enableFullscreen() {
    showcaseButton.fadeOut(500);
    headerTop.fadeOut(500);
    sideNav.fadeOut(500);
}

function disableFullscreen() {
    showcaseButton.fadeIn(500);
    headerTop.fadeIn(500);
    sideNav.fadeIn(500);
}

/*
 * Control images with keyboard arrows
 */
$(document).keydown(function(e) {
    switch(e.which) {
        case 37: // left
            displayNext(-1);
            break;

        case 39: // right
            displayNext(1);
            break;

        default: return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
});



/*
 * Display next/last image in showcase. When reaching end/start, loop back to start/end
 */
function displayNext(direction) {
    var currentSrc = showcase.attr('src');
    var photos = document.getElementsByClassName("photo");
    var current = 0;
    for (i = 0; i < photos.length; i++) {
        if ($(photos[i]).attr('src') == currentSrc) {
            current = i;
        }
    }
    var next = current + direction;
    var nextId = "";
    if (direction > 0) {
        nextId = "#photo-0";
    } else {
        nextId = "#photo-" + (photos.length - 1);
    }
    if (document.getElementById("photo-" + next) != null) {
        nextId = "#photo-" + next;
    }
    var nextSrc = $(nextId).attr('src');
    changeImage(nextSrc);
}

/*
 * Change image source and link
 */
function changeImage(src) {
    showcase.attr("src", src);
    showcaseLink.attr("href", src);
}
