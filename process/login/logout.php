<?php 
  session_start();
  unset($_SESSION['userid']);
  unset($_SESSION['userlevel']);


  echo "
    <script>
      alert('로그아웃 되었습니다.');
      location.href='/openconcert/index.php';
    </script>
  "
?>