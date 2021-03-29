<meta charset="UTF-8" />
<?php
  $qna_id = $_GET['id'];
  $qna_title = $_REQUEST['qna_title'];
  $qna_title = addslashes($qna_title);
  $qna_desc = $_REQUEST['qna_desc'];
  $qna_desc = addslashes($qna_desc);
  $regist_day = date("Y-m-d");
  $qna_hit = 0;

    //database connect
    include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';
    $sql="insert into opc_qna(
    OPC_QNA_name,
    OPC_qna_tit,
    OPC_QNA_desc, 
    OPC_qna_reg,
    OPC_qna_hit) values(
      '$qna_id',
      '$qna_title',
      '$qna_desc',
      '$regist_day',
      '$qna_hit')";

  mysqli_query($dbConn, $sql);


  echo "
    <script>
      alert('등록되었습니다.');
      location.href='/openconcert/page/qna/qna.php';
    </script>
    ";
?>