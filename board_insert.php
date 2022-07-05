<?php
    session_start();
    $userid = $_SESSION["userid"];
    $username = $_SESSION["username"];

    $subject = str_replace("'","&#39;",$_POST["subject"]);

    if(strlen($_POST["content"]) > 700){
        echo ("
            <script>
                alert('입력한 내용의 글자수(한글 기준)가 700자를 초과하였습니다. \n확인 후 조정바랍니다.');
                history.go(-1);
            </script>

        ");
    }else{
        $content = str_replace("'", "&#39;", $_POST["content"]);
    }

    $regist_day = date("Y-m-d (H:i)");
    $notice = "0";

    $upload_dir = "./data/";  //저장공간(디렉토리) 정의
    $upfile = $_FILES["upfile"];

    $upfile_name = $_FILES["upfile"]["name"];  //업로드한 최초 이름
    $upfile_tmp_name = $_FILES["upfile"]["tmp_name"];  //첨부파일에 부여된 다름 임시이름
    $upfile_type = $_FILES["upfile"]["type"];  //파일의 형식 또는 형태
    $upfile_size = $_FILES["upfile"]["size"];  //파일의 크기(단위는 byte)
    $upfile_error = $_FILES["upfile"]["error"];  //파일 에러사항

    if($upfile_name && !$upfile_error){
        // 파일 확장자 추출하기
        $file = explode(".", $upfile_name);
        // var_dump($file); // [php 문법,pdf]
        // array(2) { [0]=> string(10) "php 문법" [1]=> string(3) "pdf" }

        $file_ext = strtolower(end($file));
        // var_dump($file_ext);

        $copied_file_name = uniqid("", true).".".$file_ext;
        $uploaded_file = $upload_dir.$copied_file_name;

        // 첨부파일 용량 제한
        if($upfile_size > 50000000){
            echo("
                <script>
                    alert('업로드한 첨부 파일의 크기가 50MB를 초과하였습니다. \n 파일 사이즈를 조정하여 다시 업로드 바랍니다.');
                    history.go(-1);
                </script>
            ");
        }
        else{
            move_uploaded_file($upfile_tmp_name, $uploaded_file);
        }
    }
    else{
        $upfile_name = "";
        $upfile_type = "";
        $copied_file_name = "";
    }

    include "./db_con.php";
    $sql = "insert into board(id, name, subject, content, regist_day, file_name, file_type, file_copied, notice)";

    $sql .= "values('$userid','$username','$subject','$content','$regist_day', '$upfile_name','$upfile_type','$copied_file_name' , '$notice')";
    mysqli_query($con,$sql);

    mysqli_close($con);

        // 모든 작업이 종료되면 게시판 리스트로 이동을 시킴
        echo("
        <script>
            location.href='./community.php';
        </script>
    ");

?>


Warning: Undefined variable $notice in C:\Bitnami\wampstack-8.0.20-0\apache2\htdocs\capriconrnus\board_insert.php on line 65
Warning: Undefined variable $notice in C:\Bitnami\wampstack-8.0.20-0\apache2\htdocs\capriconrnus\board_insert.php on line 65