<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAPRICORNUS</title>

    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/animate.css">
</head>
<body>

    <header>
        <?php include "./header.php" ?>
    </header>
    <?php include "./menupopup.php"?>


    <section id="detailMenu">
        <div class="wrap">
            <h1>PRODUCT</h1>
            <div class="productMenu wow fadeInUp">
                <div><a class="Bread active" href="">Bread</a></div>
                <div><a class="Cake" href="">Cake</a></div>
                <div><a class="Chocolate" href="">Chocolate</a></div>
                <div><a class="Cookie" href="">Cookie</a></div>
                <div><a class="Coffee" href="">Coffee</a></div>
            </div>
        </div>
    </section>

    <section id="productList">
        <div class="wrap wow fadeInUp" data-wow-delay="0.5s">

        </div>
    </section>








    <footer>
        <?php include "./footer.php" ?>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/common.js"></script>
    <script src="./js/product.js"></script>
    <script src="./js/wow.js"></script>
 
    <script>
        new WOW().init();
    </script>
</body>
</html>