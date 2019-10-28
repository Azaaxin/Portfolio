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
