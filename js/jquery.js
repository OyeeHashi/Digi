

$(document).ready(function(){

    $(".about").waypoint(function(direction){
       if(direction=="down")
        $("nav").addClass('sticky-nav');
        else
        $("nav").removeClass('sticky-nav');
        
    
    });



    $(".about").waypoint(function(direction){
        if(direction=='down'){
            $(".about-sec").addClass('fade');
            $(".about-img").addClass('fade');}
            else{
            $(".about-sec").removeClass('fade');
            $(".about-img").removeClass('fade');}

    
    },{offset:'50px'}
    );



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

