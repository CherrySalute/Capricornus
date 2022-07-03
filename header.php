<?php
    session_start();

    if(isset($_SESSION["userid"])){
        $userid = $_SESSION["userid"];
    }
    else{
        $userid = "";
    }

    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    }
    else{
        $username = "";
    }
?>
<div class="wrap">
    <div class="logo">
        <a href="./index.php"><img src="./img/capricornus.png" alt=""></a>
    </div>
    <div class="brand">
        <a href="./index.php"><h2>CAPRICORNUS</h2></a>
    </div>
    <div class="menubar">
        <div class="menubtn">
            <button><img src="./img/icon/bar.svg" alt=""></button>
        </div>
        <ul class="menu">
            <li><a href="./brand.php">Brand</a></li>
            <li><a href="./products.php">Product</a></li>
            <li><a href="./community.php">Community</a></li>
            <li><a href="./shop.php">Shop</a></li>
        </ul>
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



