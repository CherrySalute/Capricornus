<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAPRICORNUS</title>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="./css/common.css">    
    <link rel="stylesheet" href="./css/member.css">    
</head>
<body>

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

        <div id="member_content">
            <div id="joinBox">
                <form action="./member_insert.php" name="memberForm" method="POST">
                    <h2>:: 회원가입</h2>

                    <div class="form">
                        <div class="labelBox">
                            <label for="userid">아이디</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="id" id="userid">
                        </div>
                    </div>
                    
                    <div class="form">
                        <div class="labelBox">
                            <label for="userpw">비밀번호</label>
                        </div>
                        <div class="inputBox">
                            <input type="password" name="pw" id="userpw">
                        </div>
                    </div>

                    <div class="form">
                        <div class="labelBox">
                            <label for="userpw_confirm">비밀번호 확인</label>
                        </div>
                        <div class="inputBox">
                            <input type="password" name="pw_confirm" id="userpw_confirm">
                        </div>
                    </div>

                    <div class="form">
                        <div class="labelBox">
                            <label for="username">이름</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="name" id="username">
                        </div>
                    </div>

                    <div class="form">
                        <div class="labelBox">
                            <label for="useremail">이메일</label>
                        </div>
                        <div class="inputBox emailInput">
                            <input type="text" name="email1">
                            <span>@</span>
                            <input type="text" name="email2">
                        </div>
                    </div>

                    <div class="buttons">
                        <button type="button" onclick="checkInput();">회원가입</button>
                        <button type="button" onclick="resetForm();">취소하기</button>
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
    <script src="./js/member.js"></script>
</body>
</html>