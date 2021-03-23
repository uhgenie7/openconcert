<?php 
  $member_id = $_POST['id'];
  $name = $_POST['name'];
  $member_pass = $_POST['pass'];
  $email1 = $_POST['email1'];

  date_default_timezone_set('Asia/Seoul');
  $regist_day = date("Y-m-d H:i:s");
  $level = 9;
  $point = 0;

  // echo $input_id, $name, $pass, $email, $regist_day, $level, $point;

  include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';

  $sql="insert into opc_mem(
    OPC_mem_id,
    OPC_mem_name,
    OPC_mem_email,
    OPC_mem_pass,
    OPC_mem_regi_day,
    OPC_mem_level,
    OPC_mem_point
    )values('$member_id','$name','$email1','$member_pass','$regist_day','$level','$point')";

  mysqli_query($dbConn, $sql);

  echo "
    <script>
      alert('회원가입이 완료되었습니다');
      location.href='/openconcert/index.php';
    </script>
  ";
?>