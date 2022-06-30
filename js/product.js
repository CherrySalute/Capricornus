$(document).ready(function () {

    var $bread = [
        ["bread01.jpg","우유식빵","제품설명1","가격1"],
        ["bread02.jpg","옥수수식빵","제품설명2","가격2"],
        ["bread03.jpg","호밀식빵","제품설명3","가격3"],
        ["bread04.jpg","밤식빵","제품설명4","가격4"],
        ["bread05.jpg","바게트","제품설명4","가격4"],
        ["bread06.jpg","호밀빵","제품설명4","가격4"],
        ["bread07.jpg","크로와상","제품설명4","가격4"],
        ["bread08.png","몽블랑","제품설명4","가격4"],
        ["bread09.jpg","뺑오쇼콜라","제품설명4","가격4"],
        ["bread10.jpg","소세지빵","제품설명4","가격4"],
        ["bread11.jpg","단팥빵","제품설명4","가격4"],
        ["bread12.jpg","단팥빵","제품설명4","가격4"],
    ];

    var $cake = [
        ["cake01.jpg","딸기생크림케이크","제품설명5","가격5"],
        ["cake02.jpg","자허토르테","제품설명6","가격6"],
        ["cake03.png","화이트쇼콜라케이크","제품설명7","가격7"],
        ["cake04.jpg","고구마케이크","제품설명8","가격8"],
    ];
    
    var $choco = [
        ["choco01.jpg","12구 수제초콜릿","제품설명","가격"],
        ["choco02.jpg","10구 수제초콜릿","제품설명","가격"],
    ]

    var $cookie = [
        ["cookie01.jpg","마카롱","제품설명","가격"],
        ["cookie02.jpg","까눌레","제품설명","가격"],
        ["cookie03.png","3종 쿠키","제품설명","가격"],
        ["cookie04.jpg","스콘","제품설명","가격"],
    ]

    var $coffee = [
        ["coffee00.jpg","에스프레소","제품설명","가격"],
        ["coffee01.jpg","아메리카노","제품설명","가격"],
        ["coffee02.jpg","카페라떼","제품설명","가격"],
        ["coffee04.jpg","카푸치노","제품설명","가격"],
        ["coffee03.jpg","카라멜 마끼아또","제품설명","가격"],
    ]
   

    function start(evt){
        $(".productMenu a").find("active");
      
        for(i in evt){
            $("#productList .wrap").append(
                `
                <div class="cont">
                    <div class="imgPart">
                        <img src="../img/product/${evt[i][0]}" alt="">
                    </div>
                    <div class="txtPart">
                        <p>${evt[i][1]}</p>
                        <p>${evt[i][2]}</p>
                        <p>${evt[i][3]}</p>
                        <a href="">MORE +</a>
                    </div>
                </div>
                `
            );
        }
    }


    start($bread);
       
    $(".productMenu a").click(function (e) { 
        e.preventDefault();

        $("#productList .wrap .cont").hide();

        var $index = $(this).parent().index();
        console.log($index);

        $(".productMenu a").removeClass("active");
        $(this).addClass("active");


        if($index == 0){
            start($bread);
        }
        else if($index == 1){
            start($cake);
        }
        else if($index == 2){
            start($choco);
        }  
        else if($index == 3){
            start($cookie);
        }
        else{
            start($coffee);
        }
    });





  



   

});