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
        <?php
            $num = $_GET["num"];
            $page = $_GET["page"];
            
            include "./db_con.php";
            $sql = "select *from board where num='$num'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);

            $id = $row["id"];
            $name = $row["name"];
            $subject = $row["subject"];
            $content = $row["content"];
            $regist_day = $row["regist_day"];
            
            $file_name = $row["file_name"];
            $file_type = $row["file_type"];
            $file_copied = $row["file_copied"];

            mysqli_close($con);
        ?>

        <ul class="view">
            <li>
                <span><b>제목 : </b> <?=$subject?></span>
                <span><?=$name?> / <?=$regist_day?></span>
            </li>
            <li>
            <?php
                    if($file_name){
                        // DB의 board 테이블에 $file_name 이 있다면
                        $real_name = $file_copied;
                            // DB에 저장된 진짜 이름 (업로드한 원본 파일과는 다른 이름)
                        $file_path = "./data/".$real_name;
                        // var_dump($file_path);
                        
                        $file_size = filesize($file_path);
                            // filesize(경로 및 파일이름) : 저장된 파일의 크기를 가져오는 내장함수
                        // var_dump($file_size);
            
                        echo("

                            <div>
                                <img src='./img/clipL.gif' alt=''> $file_name ($file_size Byte) &nbsp;
                                <a href='./board_download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>첨부파일 다운로드</a>
                            </div>

                        ");

                   
      
                    }
                ?>
                <p><?=$content?></p>
            </li>
        </ul>
        <ul class="buttons">
                <li><button type="button" onclick="location.href='./community.php?page=<?=$page?>'">목록</button></li>

            <?php
                if($userid == $id){
            ?>
            <li><button type="button" onclick="location.href='./board_edit_form.php?num=<?=$num?>&page=<?=$page?>'">수정</button></li>
            <li><button type="button" onclick="location.href='./board_delete.php?num=<?=$num?>&page=<?=$page?>'">삭제</button></li>
            <?php 
                }
            ?>
        </ul>
        </div>
     


    </section>


    <footer>
        <?php include "./footer.php" ?>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/common.js"></script>
</body>
</html>