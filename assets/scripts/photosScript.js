var showcase = $("#img_big");
var showcaseLink = $("#img_big_link");
var photoBackButton = $("#photo_back_button");
function displayBig(elem){
    showcase.attr("src", $(elem).attr('src'));
    showcaseLink.attr("href", $(elem).attr('src'));
    photoBackButton.css("display", "block");
    console.log("yop");
}
function closeBig() {
    photoBackButton.css("display", "none")
}
function displayNext(direction) {
    var currentSrc = showcase.attr('src');
    var photos = document.getElementsByClassName("photo");
    var current = 0;
    for (i = 0; i < photos.length; i++){
        if ($(photos[i]).attr('src') == currentSrc){
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
    if (document.getElementById("photo-" + next) != null){
        nextId = "#photo-" + next;
    }
    var nextSrc = $(nextId).attr('src');
    showcase.attr('src', nextSrc);
}
