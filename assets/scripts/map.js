
var clickedColor = "#ee293d";
var hoverColor = "#1a5dad";
var normalColor = "#d9cfc7";

var selected;

function get_name(id){
    return id.replace("map-", "");
}

function clicked(elem){
    set_element_active(elem)
    $("#infoBox").load("includes/map_descriptions/" + get_name(elem.id) + ".html");
    $('html, body').animate({
        scrollTop: $("#infoBox").offset().top
    }, 300);
}

function set_element_active(elem){
    selected = elem;
    var elements = document.querySelectorAll('*[id^="map-"]');

    for (var i = 0; i < elements.length; i++){
        $(elements[i]).css("fill", normalColor);
    }
    $(elem).css("fill", clickedColor);
}

function hover_in(elem){
    if (elem !== selected)
        $(elem).css("fill", hoverColor);
}

function hover_out(elem){
    if (elem !== selected)
        $(elem).css("fill", normalColor);
}