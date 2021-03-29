<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- favicon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="/openconcert/img/favicon.png"
    />
    <!-- awesome font -->
    <script
      src="https://kit.fontawesome.com/4d645dbcdc.js"
      crossorigin="anonymous"
    ></script>
    <!-- css file -->
    <link rel="stylesheet" href="/openconcert/css/style.css" />
    <link rel="stylesheet" href="/openconcert/css/subpage.css" />
    <link rel="stylesheet" href="/openconcert/css/media.css" />
    <title>OPEN CONCERT</title>
  </head>
  <body>
    <div class="wrap">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/header.php" ?>
      <?php
        $noti_detail_num=$_GET['num'];
        include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';
        $sql="select * from opc_noti where OPC_NOTI_num=$noti_detail_num";
        $result=mysqli_query($dbConn, $sql);
        $row=mysqli_fetch_array($result);
        $noti_detail_tit=$row['OPC_NOTI_tit'];
        $noti_detail_des=$row['OPC_NOTI_desc'];
        $noti_detail_new_des=nl2br($noti_detail_des);
        $noti_detail_hit=$row['OPC_NOTI_hit'];
        $noti_detail_reg=$row['OPC_NOTI_reg'];
        $new_hit=$noti_detail_hit + 1;
        $sql="update opc_noti set OPC_NOTI_hit=$new_hit where OPC_NOTI_num=$noti_detail_num";
        mysqli_query($dbConn, $sql);
      ?>
      <section class="view__section">
        <div class="sub-title">
          <h2><a href="/openconcert/page/notice/notice.php">NOTICE</a></h2>
        </div>
        <div class="view__container center">
          <div class="view-title">
            <h4><?=$noti_detail_tit?></h4>
          </div>
          <div class="view-reg">
            <p>등록일: <?=$noti_detail_reg?></p><p>조회수: <?=$noti_detail_hit?></p>
          </div>
          <div class="view-des">
            <p><?=$noti_detail_new_des?></p>
          </div>
            <div class="view-list">이전글<span class="view-prev">등록된 이전글이 없습니다.</span>
            </div>
            <div class="view-list">다음글<span class="view-next">등록된 다음글이 없습니다.</span>
            </div>
          <div class="noti__btns">
            <div class="noti__btn">
              <a href="/openconcert/page/notice/notice.php" class="list-btn">목록</a>
            </div>
          <?php
                if($userlevel == 1){
          ?>
            <div class="noti__btn">
              <a href="/openconcert/page/notice/noti_modi.php?num=<?=$noti_detail_num?>" class="modi-btn">수정</a>
              <button class="delete-btn">삭제</button>
            </div>
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
