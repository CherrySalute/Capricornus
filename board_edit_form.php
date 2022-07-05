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
            <h2>공지 수정하기</h2>
            <?php
                //http://localhost/oclass/board_modify_form.php?num=14&page=1
                $num = $_GET["num"];
                $page = $_GET["page"];

                include "./db_con.php";
                $sql = "select * from board where num='$num'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result);

                $subject = $row["subject"];
                $content = $row["content"];
                $file_name = $row["file_name"];
            ?>
            <form action="./board_edit.php?num=<?=$num?>&page=<?=$page?>" name="board_form" method="POST" enctype="multipart/form-data">
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
                            <input type="text" name="subject" id="subject" value="<?=$subject?>">
                        </div>
                    </li>

                    <li>
                        <div class="labelBox">
                            <label for="content">내용</label>
                        </div>
                        <div class="inputBox">
                           <textarea name="content" id="content" placeholder="700자 이내로 작성해 주세요."><?=$content?></textarea>
                        </div>
                    </li>

                    <li>
                        <div class="labelBox">
                            <label for="upfile">첨부파일</label>
                        </div>
                        <div class="inputBox">
                            <input type="file" name="upfile" id="upfile">
                            <p class="origin_file"><?=$file_name?></p>
                            <input type="hidden" name="origin_upfile" value="<?=$file_name?>">
                        </div>
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