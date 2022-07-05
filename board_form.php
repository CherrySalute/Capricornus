<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAPRICORNUS</title>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="./css/common.css">    
    <link rel="stylesheet" href="./css/community.css">    
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


        <div id="boardBox">
            <h2>공지 작성하기</h2>
            <form action="./board_insert.php" name="board_form" method="POST" enctype="multipart/form-data">
                <ul id="board_form">
                    <li>
                        <div class="labelBox">
                            <label for="username">작성자</label>
                        </div>
                        <div class="inputBox">
                            <p><?=$userid?>(<?=$username?>)</p>
                        </div>
                    </li>

                    <li>
                        <div class="labelBox">
                            <label for="subject">제목</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="subject" id="subject">
                        </div>
                    </li>

                    <li>
                        <div class="labelBox">
                            <label for="content">내용</label>
                        </div>
                        <div class="inputBox">
                           <textarea name="content" id="content"></textarea>
                        </div>
                    </li>

                    <li>
                        <div class="labelBox">
                            <label for="upfile">첨부파일</label>
                        </div>
                        <div class="inputBox">
                            <input type="file" name="upfile" id="upfile">
                        </div>
                    </li>
                    <li>
                        <select name="notice" id="notice">
                            <option value="0" selected>공지</option>
                        </select>
                    </li>
                </ul>
                <ul class="buttons">
                    <li><button type="button" onclick="check_input();">작성완료</button></li>
                    <li><button type="button" onclick="location.href='./community.php'">목록보기</button></li>
                </ul>
            </form>
        </div>
    </section>




    <footer>
        <?php include "./footer.php" ?>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/common.js"></script>
    <script src="./js/community.js"></script>
</body>
</html>