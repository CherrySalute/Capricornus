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

    <section>
        <div id="communityBox">
            <h2>Notice</h2>

            <ul>
                <li>
                    <span class="field1">제목</span>
                    <span class="field2">작성자</span>
                    <span class="field3">등록일</span>
                </li>

                <?php
                    include "./db_con.php";
                    if(isset($_GET["page"])){
                        $page = $_GET["page"];
                    }
                    else{
                        $page = 1;
                    }
                ?>

                <?php
                    $sql = "select * from board where notice not in(1) order by num desc";
                    $result = mysqli_query($con,$sql);
                    $total_record = mysqli_num_rows($result);
                    // var_dump($sql);

                    $scale = 10;

                     // 전체 데이터($total_record)의 개수가 $scale의 배수인가 아닌가
                     if($total_record % $scale == 0){
                        // 전체 데이터의 개수는 $scale(10)의 배수
                        $total_page = $total_record / $scale;
                    }
                    else{
                        $total_page = ceil($total_record / $scale);
                    }
                    
                    // 각 페이지별로 첫번째 보여줄 리스트의 시작번호
                    $start = ($page - 1) * $scale;
                    // 1번페이지일 경우, (1-1) * 10 = 0(~9)
                    // 2번페이지일 경우, (2-1) * 10 = 10(~19)
                    // 3번페이지일 경우, (3-1) * 10 = 20(~29)

                    // 게시글에 번호란에 부열할 숫자
                    $number = $total_record - $start;
                    // 만약 게시글이 101개 존재한다면
                    // 1번 페이지일 경우, 첫번째 라인에 들어갈 번호는 101 - 0 = 101
                    // 2번 페이지일 경우, 두번째 라인에 들어갈 번호는 101 - 10 = 91
                    // 3번 페이지일 경우, 세번째 라인에 들어갈 번호는 101 - 20 = 81

                    for($i = $start; $i < $start + $scale && $i < $total_record; $i++){                
                        mysqli_data_seek($result, $i);
                            // 가져올 각각의 위치($i : 인덱스번호)로 찾는 작업을 수행
                        $row = mysqli_fetch_array($result);
                        // var_dump($row);

                        $num = $row["num"]; // DB의 board 테이블에 실제 등록된 고유번호
                        $name = $row["name"];
                        $subject = $row["subject"];
                        $regist_day = $row["regist_day"];
                        // 첨부파일의 존재여부
                        if($row["file_name"]){ // DB의 board라는 테이블에 첨부파일이 존재한다면, 첨부되었다는 아이콘을 보여주어라
                            $file_icon = "<img src='./img/clipL.gif' alt=''>";
                        }
                        else{ // DB의 board라는 테이블에 첨부파일이 없다면, 보여줄 것이 없음
                            $file_icon = "";
                        }
                ?>
                
                <li>
                    <span class="field1"><a href="./board_view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></span>
                    <span class="field2"><?=$name?></span>
                    <span class="field3"><?=$regist_day?></span>
                </li>

                <?php
                    }
                ?>        
            
            </ul>
            <ul id="page_num">
            <?php

                // 페이지 이동파트

                // 첫페이지로 이동
                if($total_page >= 2 && $page >= 2){ 
                    echo("<li><a href='./board_list.php?page=1'><i class='fas fa-angle-double-left'></i></a></li>");
                }

                // 이전페이지 이동 파트
                if($total_page >= 2 && $page >= 2){ 
                    // 현재 모든 리스트를 담을 페이지가 2개 이상이고, 현재 보이는 페이지가 2번 페이지 이상일 경우
                    $new_page = $page - 1;
                    echo("<li><a href='./board_list.php?page=$new_page'><i class='fas fa-angle-left'></i></a></li>");
                }
                // 각 리스트 별로 넘버를 부여
                // 

                for($i=1;$i<=$total_page;$i++){
                    if($page == $i){
                        // 사용자가 선택한 페이지와 현재 화면에 보이는 페이지의 일치여부를 확인
                        echo("<li><span class='cur_page'>$i</span></li>");
                    }
                    else{
                        echo("<li><a href='./board_list.php?page=$i'>$i</a></li>");
                    }
                }


                // 다음페이지 이동 파트
                if($total_page >= 2 && $page != $total_page){
                    // 현재 모든 리스트를 담을 페이지가 2개이상이고, 현재 보이는 페이지가 마지막 페이지가 아닐 경우
                    $new_page = $page + 1;
                    echo("<li><a href='./board_list.php?page=$new_page'><i class='fas fa-angle-right'></i></a></li>");
                }

                // 마지막 페이지로 이동
                if($total_page >= 2 && $page != $total_page){         
                    echo("<li><a href='./board_list.php?page=$total_page'><i class='fas fa-angle-double-right'></i></a></li>");
                }


            ?>
            </ul>
        <?php
            if($userid == "admin"){
        ?>
            <ul class="buttons">
                <li><button type="button" onclick="location.href='./board_form.php'">작성하기</button></li>
            </ul>
        <?php
            }
        ?>
        </div>
    </section>


    <footer>
        <?php include "./footer.php" ?>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/common.js"></script>
    <!-- <script src="./js/community.js"></script> -->
</body>
</html>