$(document).ready(function () {
    
    var $mainImage = ["main_bread_01","main_bread_02","main_bread_03"];

    for(i in $mainImage){
        // console.log(i);
        $("main ul").append(`
            <li><img src="../img/${$mainImage[i]}.jpg" alt=""></li>
        `);
    }

    setInterval(function(){
        var $first = $("main ul li").first();
        $("main ul").stop().animate({"margin-left":"-100%"},1000,function(){
            $("main ul").append($first).css("margin-left","0");
        })
    }, 6000);




// **********************************************************************************
   
    
    $(".point").click(function (e) { 
        e.preventDefault();
        var $index = $(this).index();
        
        $("#Brand .wrap .box .cont").removeClass("active");        
        $("#Brand .wrap .box .cont").eq($index).addClass("active");
        
        $(".point").removeClass("active");
        $(this).addClass("active");
    });



    $(".left a").click(function (e) { 
        e.preventDefault();
        
        var $index = $("#Brand .wrap .box").find(".active").index();
        // console.log($index);

        if($index == 0){
            $index = 2;
            $("#Brand .wrap .box .cont").removeClass("active");        
            $("#Brand .wrap .box .cont").eq($index).addClass("active"); 

            $(".point").removeClass("active");
            $(".point").eq($index).addClass("active");
        }
        else{
            $index -= 1 ;
            $("#Brand .wrap .box .cont").removeClass("active");        
            $("#Brand .wrap .box .cont").eq($index).addClass("active");  

            $(".point").removeClass("active");
            $(".point").eq($index).addClass("active");
        }
    });

    $(".right a").click(function (e) { 
        e.preventDefault();
        
        var $index = $("#Brand .wrap .box").find(".active").index();
        // console.log($index);

        if($index == 2){
            $index = 0;
            $("#Brand .wrap .box .cont").removeClass("active");        
            $("#Brand .wrap .box .cont").eq($index).addClass("active"); 
            
            $(".point").removeClass("active");
            $(".point").eq($index).addClass("active"); 
        }
        else{
            $index += 1 ;
            $("#Brand .wrap .box .cont").removeClass("active");        
            $("#Brand .wrap .box .cont").eq($index).addClass("active");  
            
            $(".point").removeClass("active");
            $(".point").eq($index).addClass("active");
        }
    });

  
// **********************************************************************************

var $width = window.innerWidth;
if($width > 999){
    setInterval(function(){
        var $first = $("#sns .cont .box").first();
        $("#sns .cont").stop().animate({"margin-left":"-25%"},1000,function(){
            $("#sns .cont").append($first).css("margin-left","0");
        })
    }, 3000);
}
else if($width > 767){
    setInterval(function(){
        var $first = $("#sns .cont .box").first();
        $("#sns .cont").stop().animate({"margin-left":"-33%"},1000,function(){
            $("#sns .cont").append($first).css("margin-left","0");
        })
    }, 3000);
}
else if($width > 479){
    setInterval(function(){
        var $first = $("#sns .cont .box").first();
        $("#sns .cont").stop().animate({"margin-left":"-50%"},1000,function(){
            $("#sns .cont").append($first).css("margin-left","0");
        })
    }, 3000);
}
else{
    setInterval(function(){
        var $first = $("#sns .cont .box").first();
        $("#sns .cont").stop().animate({"margin-left":"-100%"},1000,function(){
            $("#sns .cont").append($first).css("margin-left","0");
        })
    }, 3000);
}
   






    

});