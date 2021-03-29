<meta charset="UTF-8" />
<?php
  $noti_title = $_REQUEST['noti_title'];
  $noti_title = addslashes($noti_title);
  $noti_desc = $_REQUEST['noti_desc'];
  $noti_desc = addslashes($noti_desc);
  $regist_day = date("Y-m-d");
  $noti_hit = 0;

    //database connect
    include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';
    $sql="insert into opc_noti(
    OPC_NOTI_tit,
    OPC_NOTI_desc, 
    OPC_NOTI_reg,
    OPC_NOTI_hit) values(
      '$noti_title',
      '$noti_desc',
      '$regist_day',
      '$noti_hit')";

  mysqli_query($dbConn, $sql);


  echo "
    <script>
      alert('공지사항이 등록되었습니다.');
      location.href='/openconcert/page/notice/notice.php';
    </script>
    ";
?>