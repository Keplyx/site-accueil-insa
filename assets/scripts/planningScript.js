var current = null;
var classes = null;
$(document).ready(function() {
    $(".event").click(function() {
        /* Reset last selected items */
        if (current != null) {
            setEventShadow(current, "none");
        }
        /* Set style for currently selected items */
        current = this.className.split(" ")[1];
        setEventShadow(current, "0px 0px 10px #000");
        /* Load info box text and smoothly scroll to it */
        $("#infoBox").load("includes/planning_events/" + current + ".html");
        $('html, body').animate({
            scrollTop: $("#infoBox").offset().top
        }, 300);
    });
    $(".event").hover(function() {
        var element = this.className.split(" ")[1];
        if (element != current) {
            setEventShadow(element, "0px 0px 5px #444");
        }
    }, function() {
        var element = this.className.split(" ")[1];
        if (element != current) {
            setEventShadow(element, "none");
        }
    });

    function setEventShadow(eventName, shadow){
        classes = document.getElementsByClassName(eventName);
        for (var i = 0; i < classes.length; i++) {
            classes[i].style.boxShadow = shadow;

        }
    }


});
