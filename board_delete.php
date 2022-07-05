<?php
    // http://localhost/capriconrnus/board_delete.php?num=6&page=1

    $num = $_GET["num"];
    $page = $_GET["page"];

    
    include "./db_con.php";

    $sql = "select * from board where num='$num'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $copied_name = $row["file_copied"];
    if($copied_name){
        $file_path = "./data/".$copied_name; // 경로 연결된 상태
        unlink($file_path);
        // unlink(저장된 파일의 경로까지 포함된 변수명 또는 데이터) -> 파일(또는 데이터) 제거
    }

    // 본인이 작성하고 상세페이지까지 접근한 게시글을 삭제
    $sql_del = "delete from board where num='$num'";
    mysqli_query($con, $sql_del);
    mysqli_close($con);

    echo ("
        <script>
            location.href='./community.php?page=$page';
        </script>
    ");
?>
