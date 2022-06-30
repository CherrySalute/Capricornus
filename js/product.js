$(document).ready(function () {

    var $bread = [
        ["bread01.jpg","우유식빵","우유가 들어가 부드러운 빵","4,000"],
        ["bread02.jpg","옥수수식빵","옥수수의 고소한 맛이 나는 빵","4,500"],
        ["bread03.jpg","호밀식빵","호밀의 구수한 풍미와 묵직한 식감이 나는 빵","5,000"],
        ["bread04.jpg","밤식빵","공주 밤이 들어가 달달하고 맛있는 빵","4,500"],
        ["bread05.jpg","바게트","프랑스 밀가루를 사용하여 만든 프랑스의 대표빵 ","4,500"],
        ["bread06.jpg","호밀빵","글루텐 함량이 적어 건강한 빵","4,500"],
        ["bread07.jpg","크로와상","초승달 모양을 한 페이스트리","3,300"],
        ["bread08.png","몽블랑","겹겹이 돌돌말아 시럽을 바른 페이스트리","6,000"],
        ["bread09.jpg","뺑오쇼콜라","초콜렛을 넣은 페이스트리","4,500"],
        ["bread10.jpg","소세지빵","낙엽모양을 한 단과자빵","3,200"],
        ["bread11.jpg","단팥빵","100% 수제로 만든 팥이 들어간 단과자빵","3,000"],
        ["bread12.jpg","모카빵","고소한 모카의 향이 가득담긴 단과자빵","3,500"],
    ];

    var $cake = [
        ["cake01.jpg","딸기생크림케이크","동물성 생크림을 사용하여 고소하고 달달한 생크림위에 상콤한 딸기를 얹은 케이크","30,000"],
        ["cake02.jpg","자허토르테","초콜렛과 살구잼을 곁들여 만든 초콜렛 케이크","39,000"],
        ["cake03.png","화이트쇼콜라케이크","화이트 초콜렛을 묻힌 달달한 쇼콜라케이크","42,000"],
        ["cake04.jpg","고구마케이크","고구마 무스를 겹겹히 바른 후 고구마빵가루를 묻힌 고구마 케이크","35,000"],
    ];
    
    var $choco = [
        ["choco01.jpg","12구 수제초콜릿","수제로 만든 초콜렛 12구","30,000"],
        ["choco02.jpg","10구 수제초콜릿","수제로 만든 초콜렛 10구","25,000"],
    ]

    var $cookie = [
        ["cookie01.jpg","마카롱","아몬드 가루를 이용해 만든 프랑스의 대표 제품","2,500"],
        ["cookie02.jpg","까눌레","부드러운 커스터드와 두꺼운 캬라멜 껍질, 그리고 바닐라향이 가득한 프랑스식 디저트","2,000"],
        ["cookie03.png","3종 쿠키","초코,아몬드,플레인 3가지 쿠키로 이루어져는 제품","5,500"],
        ["cookie04.jpg","스콘","플레인, 말차, 초코, 애플 4종류로 구성된 제품","2,500"],
    ]

    var $coffee = [
        ["coffee00.jpg","에스프레소","정통 이탈리안 방식으로 고압을 이용하여 추출된 커피","3,500"],
        ["coffee01.jpg","아메리카노","진한 에스프레소와 물을 섞어 깔끔하고 부드럽게 느낄수 있는 커피","4,500"],
        ["coffee02.jpg","카페라떼","진한 에스프레소와 신선한 스팀 밀크가 만나 부드러워진 커피","4,800"],
        ["coffee04.jpg","카푸치노","진한 에스프레소와 우유와 우유거품이 1:1 비율로 마무리된 커피","4,700"],
        ["coffee03.jpg","카라멜 마끼아또","향긋한 바닐라 시럽과 따듯한 스팀밀크 위에 에스프레소를 부은 후 카라멜을 올린 커피 ","5,500"],
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
                        <p>${evt[i][3]}원</p>
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