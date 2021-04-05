<meta charset="UTF-8" />
<?php
  $delete_num=$_REQUEST['num'];

  include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';
  $sql="delete from opc_noti where OPC_NOTI_num=$delete_num";

  mysqli_query($dbConn, $sql);

  echo "
    <script>
      alert('삭제가 완료되었습니다.');
      location.href='/openconcert/page/notice/notice.php';
    </script>
  ";
?>