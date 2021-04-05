<!DOCTYPE html>
<html lang="ko">
  <head>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/head.php" ?>
    <!-- css file -->
    <link rel="stylesheet" href="/openconcert/css/style.css" />
    <link rel="stylesheet" href="/openconcert/css/subpage.css" />
    <link rel="stylesheet" href="/openconcert/css/media.css" />
    <title>OPEN CONCERT</title>
  </head>
  <body>
    <div class="wrap">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/header.php" ?>
      <section class="noti__section">
        <div class="sub-title">
          <h2>UPLOAD</h2>
        </div>
        <div class="noti__container center">
        <?php
        $noti_modi_num=$_GET['num'];
        include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';
        $sql="select * from opc_noti where OPC_NOTI_num=$noti_modi_num";
        $result=mysqli_query($dbConn, $sql);
        $row=mysqli_fetch_array($result);
        $noti_modi_tit=$row['OPC_NOTI_tit'];
        $noti_modi_des=$row['OPC_NOTI_desc'];
        $noti_modi_hit=$row['OPC_NOTI_hit'];
        $noti_modi_reg=$row['OPC_NOTI_reg'];
      ?>
          <form action="/openconcert/process/noti/noti_update.php?num=<?=$noti_modi_num?>" method="post" name="noti_update">
            <label for="title" class="noti-title">제목</label>
            <input type="text" value='<?=$noti_modi_tit?>' id="notiTitle" name="noti_title" spellcheck="false">
            <label for="noti_desc" class="noti-desc">내용</label>
            <textarea id="noti_desc" class="noti__desc" name="noti_desc" spellcheck="false"><?=$noti_modi_des?></textarea>
          </form>
          <div class="noti__btns">
            <button class="write-btn">수정하기</button>
          </div>
        </div>
      </section>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/footer.php" ?>
    </div>
    <!-- js script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/openconcert/js/custom.js"></script>
    <script>
        const submitBtn = document.querySelector(".write-btn");
        submitBtn.addEventListener('click', function(){
          document.noti_update.submit();
        });
    </script>
  </body>
</html>
