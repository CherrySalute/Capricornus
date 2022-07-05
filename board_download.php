<?php
    $real_name = $_GET["real_name"];
    $file_name = $_GET["file_name"];
    $file_type = $_GET["file_type"];

    $file_path = "./data/".$real_name;
  

    if(file_exists($file_path)){

        $fp = fopen($file_path, "rb");
        Header("Content-type:application/x-msdownload");
        Header("Content-Length:".filesize($file_path)); // 파일의 용량 사이즈를 전송
        Header("Content-Disposition:attachment; filename=".$file_name) ; // 파일의 오리지널 이름을 전송
        Header("Content-Transfer-Encoding:binary"); // 컴퓨터 언어로 인코딩 방식을 통해 전송(server -> client로 이동을 시킴 by 바이너리 언어로)
        Header("Content-Description:File Transfer"); // 파일에 대한 구체성을 변형된 형태로 전송
        Header("Expires:0"); // 만료일에 대한 전송방식. "0"이라는 의미는 다운을 받자마자 캐시메모리에 저장을 시키지 않겠다는 의미(=> 이미 만료되었음)
    }

    if(!fpassthru($fp)){
        // 읽을 수 있는 파일이 더이상 존재하지 않는다면
        fclose($fp);
        // 파일을 닫겠다는 의미
    }
?>