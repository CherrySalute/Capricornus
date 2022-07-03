<div class="menuClick_dark">
    <div class="menuBox">
        <span class="close">×</span>
        <ul>
            <li><a href="./brand.php">Brand</a></li>
            <li><a href="./products.php">Product</a></li>
            <li><a href="./community.php">Community</a></li>
            <li><a href="./shop.php">Shop</a></li>
        </ul>
        <div class="opcityBox">
            <ul class="regist">
                <li><a href=""><img src="./img/icon/search.svg" alt=""></a></li>
        <?php
            if(!$userid){
        ?>
                <li><a href="./login.php"><img src="./img/icon/user.svg" alt=""></a></li>
        <?php
            }
            else{            
        ?>
                <li><a href="./logout.php"><img src="./img/icon/user-regular.svg" alt=""></a></li>
                <li><a href=""><img src="./img/icon/shop_basket.svg" alt=""></a></li>
        <?php
            }
        ?>
            </ul>
        </div>       
    </div>   
</div>