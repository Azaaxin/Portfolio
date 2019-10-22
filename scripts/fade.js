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
