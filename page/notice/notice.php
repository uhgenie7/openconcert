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
          <h2><a href="/openconcert/page/notice/notice.php">NOTICE</a></h2>
        </div>
        <div class="noti__container center">
          <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/noti-search.php" ?>
          <ul class="noti__lists">
            <li class="noti__title">
              <span class="noti-num">번호</span>
              <span class="noti-id">아이디</span>
              <span class="noti-tit">제목</span>
              <span class="noti-reg">등록일</span>
              <span class="noti-hit">조회수</span>
            </li>
                <?php
                    include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';
                    $sql="select * from opc_noti order by OPC_NOTI_num desc limit 5";
                    $noti_result=mysqli_query($dbConn, $sql);
                    while($noti_row=mysqli_fetch_array($noti_result)){
                      $noti_res_num=$noti_row['OPC_NOTI_num'];
                      $noti_res_tit=$noti_row['OPC_NOTI_tit'];
                      $noti_res_reg=$noti_row['OPC_NOTI_reg'];
                      $noti_res_hit=$noti_row['OPC_NOTI_hit'];
                ?>
              <li class="noti__title">
                <span class="noti-num"><?=$noti_res_num?></span>
                <span class="noti-id">ADMIN</span>
                <span class="noti-tit"><a href="/openconcert/page/notice/noti_view.php?num=<?=$noti_res_num?>" class="noti-link"><?=$noti_res_tit?></a></span>
                <span class="noti-reg"><?=$noti_res_reg?></span>
                <span class="noti-hit"><?=$noti_res_hit?></span>
              </li>
                <?php
                }
                ?>
          </ul>
          <div class="noti__btns">
            <?php
                if($userlevel == 1){
            ?>
              <button class="write-btn" onclick="location.href='/openconcert/page/notice/notice_input_form.php'">글쓰기</button>
            <?php
                } else {
            ?>
            <?php
                }
            ?>
        </div>
        </div>


      </section>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/footer.php" ?>
    </div>
    <!-- js script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/openconcert/js/custom.js"></script>
  </body>
</html>
