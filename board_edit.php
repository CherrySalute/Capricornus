<?php
    // http://localhost/oclass/board_modify.php?num=17&page=1
    $num = $_GET["num"];
    $page = $_GET["page"];

    $subject = str_replace("'", "&#39;", $_POST["subject"]);

    
    //textarea에서 예시글로 "700자 이내로 작성해 주세요."  라는 문구에 근거하여 시스템을 통제
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


    // var_dump($_FILES["upfile"]["name"]);

    include "./db_con.php";
    
    if($_FILES["upfile"]["name"]){

    // 첨부파일을 수정하고 접근했다면

        //첨부파일 저장하는 구성
        //첨부파일의 저장공간은 data라는 폴더
        $upload_dir = "./data/";  //저장공간(디렉토리) 정의
        $upfile = $_FILES["upfile"];

        // var_dump($upfile);
        
        // array(5) { 
        //     ["name"]=> string(14) "php 문법.pdf" 
        //     ["type"]=> string(15) "application/pdf" 
        //     ["tmp_name"]=> string(49) "C:\Bitnami\wampstack-8.0.20-0\php\tmp\phpB20D.tmp" ["error"]=> int(0) ["size"]=> int(2215959) 
        // }
        
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

        $sql = "update board set subject='$subject',content='$content',file_name='$upfile_name',file_type='$upfile_type',file_copied='$copied_file_name' where num='$num',notice='$notice' ";
    }
    else{
         // 첨부파일을 수정하지 않고 접근했다면
         $sql = "update board set subject='$subject',content='$content',notice='$notice' where num='$num'";
    }
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo ("
        <script>
            location.href='./community.php?num=$num&page=$page';
        </script>
    ");
?>