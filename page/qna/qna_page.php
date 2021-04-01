<?php
    $pageNum = ($_GET['page']) ? $_GET['page'] : 1;     //page : default - 1
    // $list = ($_GET['list']) ? $_GET['list'] : 50; 
    //page : default - 50
 
    $b_pageNum_list = 10; 
    //블럭에 나타낼 페이지 번호 갯수
    $block = ceil($pageNum/$b_pageNum_list); 
    //현재 리스트의 블럭 구하기
    
 
    $b_start_page = ( ($block - 1) * $b_pageNum_list ) + 1; 
    //현재 블럭에서 시작페이지 번호
    $b_end_page = $b_start_page + $b_pageNum_list - 1; 
    //현재 블럭에서 마지막 페이지 번호
 
    // $total_page =  ceil($totalData/$list); 
    //총 페이지 수


            include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';
            $query = "SELECT * FROM opc_qna";
            $data = mysqli_query($dbConn, $query);
            $totalData = mysqli_num_rows($data);

            // echo "총 데이터수: $totalData 개 <br>";
            //총 데이터의 수 8개

            $pageCount = 5; 
            // 한 화면에 나타낼 페이지 수

            $dataPerPage = 5; 
            // 블럭 당 페이지 수

            $total_page = ceil($totalData/$pageCount); // 총 페이지 수
            $pageGroup = ceil($total_page/$dataPerPage); // 총 블록 수

            // echo "총 페이지 수: $total_page 페이지 <br>";
            // echo "총 블럭수: $pageGroup 개<br>";

            $last = $pageGroup * $dataPerPage; 
            // 화면에 보여질 마지막 페이지 번호
            // echo "화면에 보여질 마지막 페이지 번호: $last 번<br>";

            $first = $last - ($pageCount - 1); // 화면에 보여질 첫번째 페이지 번호
            $next = $last + 1; //마지막 번호 바로 다음
            $prev = $first - 1; //첫번째 번호 바로 이전

            if ($prev <= 0) {
                  $prev = 1;
                }

            //음수 페이징 방지

            if ($last > $total_page) {
                  $last = $total_page;
                }

            //최대 페이징 방지

            if ($b_end_page > $total_page) 
            $b_end_page = $total_page;


?>
