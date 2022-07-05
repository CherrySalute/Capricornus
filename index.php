<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAPRICORNUS</title>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/index.css">

    <script src="./js/wow.js"></script>
    <script>
        new WOW().init();
    </script>
</head>
<body>
    
    <header>
        <?php include "./header.php" ?>
    </header>
    
    <?php include "./menupopup.php"?>
    <main>
        <ul>
            <!-- <li><img src="./img/main_bread_01.jpg" alt=""></li>
            <li><img src="./img/main_bread_02.jpg" alt=""></li>
            <li><img src="./img/main_bread_03.jpg" alt=""></li>  -->
        </ul>
    </main>

    <section id="Brand">
        <div class="wrap">   
             <div class="pointBox">
                <div class="point point1 active"></div>
                <div class="point point2"></div>
                <div class="point point3"></div>     
             </div>
            <h2>Brand</h2>
            <div class="box">
                <div class="cont active">
                    <h3>수호신 판</h3>
                    <p class="tag">#열정의신 #광기의신</p>
                    <p class="text">열정이 넘치는 브랜드</p>        
                </div>

                <div class="cont">
                    <h3>황도 12궁</h3>
                    <p class="tag">#가장어두움</p>
                    <p class="text">묵묵하게 일하는 브랜드</p>        
                </div>
                
                <div class="cont">
                    <h3>한국의 공휴일</h3>
                    <p class="tag">#크리스마스 #새해첫날</p>
                    <p class="text">일년의 끝과 시작을 함께하는 브랜드</p>        
                </div>
                
                
                <ul>
                    <li class="left"><a href="#"><i class="fas fa-chevron-left"></i></a></li>
                    <li class="right"><a href="#"><i class="fas fa-chevron-right"></i></a></li>
                </ul>  
            </div>        
        </div>
    </section>

    <section id="Products">
        <div class="backimage">
            <img src="./img/capricornus.svg" alt="">
        </div>
        <div class="wrap">
            <h2>Products</h2>
            <div class="gridBox">
                <div class="box box1">
                    <div class="imgPart">
                        <div class="textPart">
                            <p>BREAD</p>
                        </div>
                    </div>                
                </div>
    
                <div class="box box2">
                    <div class="imgPart">
                        <div class="textPart">
                            <p>CAKE</p>
                        </div>
                    </div>                
                </div>
    
                <div class="box box3">
                    <div class="imgPart">
                        <div class="textPart">
                            <p>CHOCOLATE</p>
                        </div>
                    </div>                
                </div>
    
                <div class="box box4">
                    <div class="imgPart">
                        <div class="textPart">
                            <p>COOKIE</p>
                        </div>
                    </div>                
                </div>
    
                <div class="box box5">
                    <div class="imgPart">
                        <div class="textPart">
                            <p>COFFEE</p>
                        </div>
                    </div>                
                </div>
            </div>
        </div>
    </section>

    <section id="sns">
        <div class="bg_dark">
            <div class="wrap">
                <h2>SNS</h2>
                <div class="cont">
                    <div class="box box1"></div>
                    <div class="box box2"></div>
                    <div class="box box3"></div>
                    <div class="box box4"></div>
                    <div class="box box5"></div>
                    <div class="box box6"></div>
                    <div class="box box7"></div>
                </div>            
             </div>
        </div>        
    </section>

    <footer>
        <?php include "./footer.php" ?>
    </footer>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/common.js"></script>
    <script src="./js/index.js"></script>
    <script src="https://kit.fontawesome.com/717cba6381.js" crossorigin="anonymous"></script>
</body>
</html>