/*
$(function () {
    
    $('.snapper').scroll(function() {    
      //  var scroll = $('.very-top').scrollTop();
        var scroll = document.getElementsByClassName(".snapper").scrollTop;
        document.getElementById("debug").innerHTML = scroll;
        if (scroll >= 500) {
        
            $(".overlay").addClass("overlay-replaced");
        } else {
      
            $(".overlay").removeClass("verlay-replaced");
        }
    });

});
*/
function scollPos(){
    var elmnt = document.getElementById("h");
    var x = elmnt.scrollLeft;
    var y = elmnt.scrollTop;
    var screenYs = $(window).height();
    document.getElementById ("debug").innerHTML = "Horizontally: " + x + "px<br>Vertically: " + y + "px";
    if (y > 200) {
        
        $(".overlay").addClass("overlay-replaced");
        if(y>=screenYs){ // To get rid of the gradient on box number 2
            $("#me").removeClass("grad");
        }
    } else {
  
        $(".overlay").removeClass("overlay-replaced");
        if(y<=screenYs){ // tog get back the gradient on box number 2
            $("#me").addClass("grad");
        }
    }
}
$(function() {
    var psoem = document.getElementById("h");
    var cookieValue = $.cookie("scrollcookie");
    if (!!$.cookie('scrollcookie')) {
        psoem.scrollTop = cookieValue;
        // have cookie
    }
});
$("form_class").submit(function(e) {
    var expire = date.setDate(date.getDate() + 1);
    var psoem = document.getElementById("h");
    var y = psoem.scrollTop;
    document.cookie = "scrollcookie=" + y + "; max-age=3600";

    $.cookie("scrollcookie", y, { expires : 1 });
    
});