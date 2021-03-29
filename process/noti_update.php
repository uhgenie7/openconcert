<meta charset="UTF-8" />
<?php
    $noti_update_num=$_GET['num'];
    $noti_title = $_REQUEST['noti_title'];
    $noti_title = addslashes($noti_title);
    $noti_desc = $_REQUEST['noti_desc'];
    $noti_desc = addslashes($noti_desc);
    $regist_day = date("Y-m-d");

    //database connect
    include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';
    $sql="update opc_noti set OPC_NOTI_tit='$noti_title', OPC_NOTI_desc='$noti_desc' where OPC_NOTI_num='$noti_update_num'";
  
    mysqli_query($dbConn, $sql);
    echo "
    <script>
      alert('수정이 완료되었습니다.');
      location.href='/openconcert/page/notice/notice.php';
    </script>
  ";
?>