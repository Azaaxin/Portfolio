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
    document.getElementById ("debug").innerHTML = "Horizontally: " + x + "px<br>Vertically: " + y + "px";
    if (y > 200) {
        
        $(".overlay").addClass("overlay-replaced");
    } else {
  
        $(".overlay").removeClass("overlay-replaced");
    }
}