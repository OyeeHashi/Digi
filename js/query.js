$(document).ready(function(){

    $(".about").waypoint(function(direction){
       if(direction=="down")
        $("nav").addClass('sticky-nav');
        else
        $("nav").removeClass('sticky-nav');
        
    
    });


    $(".nav a").click(function(e){
            if(this.hash!==''){
                e.preventDefault();
                const hash= this.hash;
                $('html,body').animate({
                    scrollTop: $(hash).offset().top
                },1000
                )
            }
});

});


