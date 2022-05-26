$(document).ready(function(){

    $(".about").waypoint(function(direction){
       if(direction=="down")
        $("nav").addClass('sticky-nav');
        else
        $("nav").removeClass('sticky-nav');

    });



    $(".about").waypoint(function(direction){
        if(direction=="down")
         $("nav").addClass('animate__animated');
         else
         $("nav").removeClass('animate__animated');
 
     });

});