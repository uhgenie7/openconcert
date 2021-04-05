<meta charset="UTF-8" />
<?php
    $qna_update_num=$_GET['num'];
    $qna_title = $_REQUEST['qna_title'];
    $qna_title = addslashes($qna_title);
    $qna_desc = $_REQUEST['qna_desc'];
    $qna_desc = addslashes($qna_desc);
    $regist_day = date("Y-m-d");

    //database connect
    include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';
    $sql="update opc_qna set OPC_QNA_tit='$qna_title', OPC_QNA_desc='$qna_desc' where OPC_QNA_num='$qna_update_num'";
  
    mysqli_query($dbConn, $sql);
    echo "
    <script>
      alert('수정이 완료되었습니다.');
      location.href='/openconcert/page/qna/qna.php?page=1';
    </script>
  ";
?>