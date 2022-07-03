$(document).ready(function () {
    var $product =  [
        ["gift_macaron.jpg","마카롱 선물세트(12개입)","35,000"],
        ["gift_cookie.jpg","초코쿠키 선물세트(6개입)","15,000"],
    ];


    function start(evt){
        for(i in evt){
            $("#shopList .wrap").append(
                `
                <div class="cont">
                    <div class="imgPart">
                        <img src="../img/shop/${evt[i][0]}" alt="">
                    </div>
                    <div class="txtPart">
                        <p>${evt[i][1]}</p>
                        <p>${evt[i][2]}원</p>
                        <a href="">MORE +</a>
                    </div>
                </div>
                `
            ); 
        }
    }
 

    start($product);
});