//document.getElementById("menu").onmouseover = function() {mouseOver()};
//document.getElementById("menu").onmouseout = function() {mouseOut()};


$(".mousedect, .invert_effect, .text").hover(
    function(event) {
        mouseOver()
    },
    function (event) {
        mouseOut()
    }
 );

function mouseOver() {
    
  //document.getElementsByClassName(".text").style.display = "block";
    var disabled = document.getElementsByClassName('text');
    for (var u=0;u<4;u+=1){
       
        $(disabled[u]).fadeIn();
        disabled[u].style.display = 'block';
        
    }
}

function mouseOut() {
 // document.getElementsByClassName(".text").style.display = "none";
    var elems = document.getElementsByClassName('text');
    for (var i=0;i<4;i+=1){
        
    elems[i].style.display = 'none';
        
    }
}