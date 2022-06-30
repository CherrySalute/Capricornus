$(document).ready(function(){

    $("#header").load("./header.html");

    
    $(window).scroll(function () { 

        var scroll = $(document).scrollTop();
        // console.log(scroll);
        var $width = window.innerWidth;
        // console.log($width);
        if($width > 767){
            if(scroll >= 40){
                $("#header header").addClass("active");
            }
            else{
                $("#header header").removeClass("active");
            }
        }    
        else{
            $("#header header").removeClass("active");
        }     
    });


   
   
    $(document).on("click","header .menubtn button img", function(e){
        $(".menuClick_dark").addClass("active");
        $('html, body').css({'overflow': 'hidden'});          
    })

    $(document).on("click",".menuClick_dark .menuBox .close", function(){
        $(".menuClick_dark").removeClass("active");
        $('html, body').css({'overflow': ''});
    })


    $("#footer").load("./footer.html");
})