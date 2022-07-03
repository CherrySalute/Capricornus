<?php
    $id = $_POST["id"];
    $pass = $_POST["pw"];

    include "./db_con.php";

    $sql = "select * from member where id='$id'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    //    var_dump($num);

    if(!$num){
        echo("
            <script>
                alert('등록되지 않은 아이디입니다.');
                history.go(-1);
            </script>
        ");
    }
    else{
        $row = mysqli_fetch_array($result);
        // var_dump($row);

        $db_pass = $row["pass"];

        if($pass != $db_pass){
            echo ("
                <script>
                    alert('입력한 비밀번호가 다릅니다..');
                    history.go(-1);
                </script>
            ");
            exit;
        }else{
            session_start(); 
            
            $_SESSION["userid"] = $row["id"];
            $_SESSION["username"] = $row["name"];

            echo ("
                <script>
                    location.href='./';
                </script>   
            ");
        }
    }

?>