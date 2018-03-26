var showcase = $("#img_big");
var showcaseLink = $("#img_big_link");
var photoBackButton = $("#photo_back_button");

/*
 * Display selected image in showcase
 * When clicked, display image in full size
 */
function displayBig(elem) {
    changeImage($(elem).attr('src'));
    photoBackButton.css("display", "block");
}


/*
 * Hide showcase image
 */
function closeBig() {
    photoBackButton.css("display", "none")
}


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
