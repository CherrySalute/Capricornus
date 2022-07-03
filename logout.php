<?php

    // 로그아웃시 : 세션스토리지 내부에 key 항목을 제거하면 각각의 value 값도 동시에 삭제된다.
    session_start();

    unset($_SESSION["userid"]);
    unset($_SESSION["username"]);

    // 세션으로 부터 등록된 모든 항목을 삭제한다.(unset, destroy);

    echo ("
        <script>
            location.href='./';
        </script>
    ");

?>