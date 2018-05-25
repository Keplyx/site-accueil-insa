
var hoverColor = "#c5a360";
var normalColor = "#d9cfc7";

function clicked(id){
    $("#infoBox").load("includes/map_descriptions/" + id + ".html");
    $('html, body').animate({
        scrollTop: $("#infoBox").offset().top
    }, 300);
}

function hover_in(id){
    console.log(id);
    $("#" + id).css("fill", hoverColor);
}

function hover_out(id){
    $("#" + id).css("fill", normalColor);
}