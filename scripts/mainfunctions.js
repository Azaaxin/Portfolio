$(document).ready(function(){
    var disabled = document.getElementsByClassName('text');
    for (var x=0;x<4;x+=1){
    disabled[x].style.display = 'none';
    }
    $(document).mousemove(function(){
         if($(".mousedect:hover, .invert_effect:hover, .text:hover").length != 0){
            
            for (var u=0;u<5;u+=1){
            $(disabled[u]).fadeIn();
            disabled[u].style.display = 'block';
            }
        } else{

            for (var i=0;i<5;i+=1){
            $(disabled[u]).fadeOut(300);
            disabled[i].style.display = 'none';  
            }
        }
    });
});
