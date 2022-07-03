<?php
    $id = $_POST["id"];
    $pass = $_POST["pw"];
    $name = $_POST["name"];
    $email1 = $_POST["email1"];
    $email2 = $_POST["email2"];
    $email = $email1."@".$email2;
    $regist_day = date("Y-m-d (H:i)");


    // var_dump($id);
    // var_dump($pass);
    // var_dump($name);
    // var_dump($email);
    // var_dump($regist_day);

    include "./db_con.php";


    $sql = "insert into member (id, pass, name, email, regist_day) values ('$id', '$pass', '$name', '$email', '$regist_day')";

    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
        <script>
            location.href='./';
        </script>        
    ";


?>