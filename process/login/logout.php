<?php 
  session_start();
  unset($_SESSION['userID']);
  unset($_SESSION['userLevel']);


  echo "
    <script>
      alert('로그아웃 되었습니다.');
      location.href='/openconcert/index.php';
    </script>
  "
?>