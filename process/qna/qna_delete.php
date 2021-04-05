<meta charset="UTF-8" />
<?php
  $delete_num=$_REQUEST['num'];

  include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';
  $sql="delete from opc_qna where OPC_QNA_num=$delete_num";

  mysqli_query($dbConn, $sql);

  echo "
    <script>
      alert('삭제가 완료되었습니다.');
      location.href='/openconcert/page/qna/qna.php?page=1';
    </script>
  ";
?>