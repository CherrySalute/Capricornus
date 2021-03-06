<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAPRICORNUS</title>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="./css/common.css">    
    <link rel="stylesheet" href="./css/login.css">    
</head>
<body>

<?php
    // if(isset($_GET[]))
?>
    <header>
        <?php include "./header.php" ?>
    </header>

    <?php include "./menupopup.php"?>

    <section class="common">
        <div class="subpage">
            <div class="frame">
                <div class="title">
                    <h3>Welcome to <span>CAPRICORNUS</span></h3>
                </div>
            </div>
        </div>

        <div id="login_content">
            <div id="loginBox">
                <form action="./login_ok.php" name="loginForm" method="post">
                    <h2>:: 로그인</h2>
                    
                    <ul>
                        <li><input type="text" name="id" placeholder="아이디" autocomplete="off"></li>
                        <li><input type="password" name="pw" placeholder="비밀번호" autocomplete="off"></li>
                    </ul>
                    <div id="loginBtn">
                        <button type="button" onclick="chk_input();">로그인</button>
                        <button type="button" onclick="location.href='./member.php'">회원가입</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <?php include "./footer.php" ?>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/common.js"></script>
    <script src="./js/login.js"></script>
</body>
</html>