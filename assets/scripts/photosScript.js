var showcase = $("#img_big");
var showcaseButton = $("#photo_buttons");
var showcaseLink = $("#img_big_link");
var showcaseDownload = $("#img_big_download");
var photoOverlay = $("#photo_overlay");
var headerTop = $("#header_top");
var sideNav = $("#menuSidenav");


/*
 * Display selected image in showcase
 * When clicked, display image in full size
 */
function displayBig(elem) {
    changeImage($(elem).attr('src'));
    hideTopBar();
    disableFullscreen();
    photoOverlay.fadeIn(500);
}

function getSourceFromThumbnail(source) {
    return source.replace("photos_thumb/", "photos/");
}

/*
 * Hide showcase image
 */
function closeBig() {
    showTopBar();
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
}

function disableFullscreen() {
    showcaseButton.fadeIn(500);
}

function hideTopBar() {
    headerTop.fadeOut(500);
    sideNav.fadeOut(500);
}

function showTopBar() {
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
 * Control images with swipes
 */
var img = document.querySelector('#photo_overlay');
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
        displayNext(-1);
    } else if (direction === 2){ // left
        displayNext(1);
    }
});





/*
 * Display next/last image in showcase. When reaching end/start, loop back to start/end
 */
function displayNext(direction) {
    var currentSrc = showcase.attr('src');
    var photos = document.getElementsByClassName("photo");
    var current = 0;
    for (var i = 0; i < photos.length; i++) {
        if (getSourceFromThumbnail($(photos[i]).attr('src')) === currentSrc) {
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
 * Change image source, link and download
 */
function changeImage(thumb) {
    var source = getSourceFromThumbnail(thumb);
    showcase.attr("src", source);
    showcaseLink.attr("href", source);
    showcaseDownload.attr("href", source);
}
