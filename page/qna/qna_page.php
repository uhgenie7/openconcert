<?php
    $page = ($_GET['page']) ? $_GET['page'] : 1;
    $list_num = 5; //한 페이지에 보여줄 목록 갯수 (data)
    $page_num = 5; //한 화면에 보여줄 페이지 링크(묶음) 갯수 (paging num count)
    $offset = $list_num*($page-1); 
    //한 페이지의 시작 글 번호(listnum 수만큼 나누었을 때 시작하는 글의 번호)
    // 0=10*(1-1) ???  10=10*(2-1)

    //전체 글 수를 구합니다.
    include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';
    $query = "SELECT * FROM opc_qna";
    $data = mysqli_query($dbConn, $query);
    $total_no = mysqli_num_rows($data);
    // echo "총 데이터수: $total_no 개 <br>";

    //전체 페이지 수와 현재 글 번호를 구합니다.
    $total_page=ceil($total_no/$list_num); 
    // 전체글수를 페이지당글수로 나눈 값의 올림 값을 구합니다. 
    // 5페이지 = 25개의 글 / 노출된 5개의 글 
    $cur_num=$total_no - $list_num*($page-1); 
    //현재 글번호,  20번 = 25개의 글 - 5*(2페이지-1)

//     $sql="select * from opc_qna order by OPC_QNA_num desc limit $offset, $list_num";
//     $qna_result=mysqli_query($dbConn, $sql);

    // 여기부터 페이지
    //먼저, 한 화면에 보이는 블록($page_num 기본값 이상일 때 블록으로 나뉘어짐 )
    $total_block=ceil($total_page/$page_num);
    // 1블록 = 5개의 페이지 / 10개의 페이징 넘버
    $block=ceil($page/$page_num); //현재 블록
    // 1블록 =  2페이지 / 10개의 페이징 넘버


    
    $first=($block-1)*$page_num; 
    // 페이지 블록이 시작하는 첫 페이지
    // 0 = (1블록 - 1) * 10

    $last=$block*$page_num; 
    //페이지 블록의 끝 페이지
    // 10 = 1블록 * 10페이지
    
    if($block >= $total_block) {
            $last=$total_page;
    }
?>