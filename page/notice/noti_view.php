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
      <?php
        $noti_detail_num=$_GET['num'];
        include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';
        // 해당 게시물 정보
        $sql="select * from opc_noti where OPC_NOTI_num=$noti_detail_num";
        $result=mysqli_query($dbConn, $sql);
        $row=mysqli_fetch_array($result);
        $noti_detail_tit=$row['OPC_NOTI_tit'];
        $noti_detail_des=$row['OPC_NOTI_desc'];
        $noti_detail_new_des=nl2br($noti_detail_des);
        $noti_detail_hit=$row['OPC_NOTI_hit'];
        $new_hit=$noti_detail_hit + 1;
        $sql="update opc_noti set OPC_NOTI_hit=$new_hit where OPC_NOTI_num=$noti_detail_num";
        $noti_detail_reg=$row['OPC_NOTI_reg'];
        mysqli_query($dbConn, $sql);
        // DB ROW COUNT
        $query = "SELECT * FROM opc_noti";
        $data = mysqli_query($dbConn, $query);
        $total_rows = mysqli_num_rows($data);
      ?>
      <section class="view__section">
        <div class="sub-title">
          <h2><a href="/openconcert/page/notice/notice.php?page=1">NOTICE</a></h2>
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
          <!-- view-list start -->
            <div class="view-list">이전글<span class="view-prev">
            <?php
            if($noti_detail_num - 1 == 0){
              include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';
              $sql="SELECT * FROM opc_noti WHERE OPC_NOTI_num > $noti_detail_num";
              $prev_result=mysqli_query($dbConn, $sql);
              $prev_row=mysqli_fetch_array($prev_result);
              $prev_qna_detail_tit=$prev_row['OPC_NOTI_tit'];
            ?>
              등록된 이전글이 없습니다.</span>
            </div>
            <?php
                } else {
              // 이전글 넘버
              $sql="SELECT * FROM opc_noti WHERE OPC_NOTI_num < $noti_detail_num ORDER BY OPC_NOTI_num desc limit 1";
              $prev_result=mysqli_query($dbConn, $sql);
              $prev_row=mysqli_fetch_array($prev_result);
              $prev_num=$prev_row['OPC_NOTI_num'];
              $prev_noti_detail_tit=$prev_row['OPC_NOTI_tit'];
            ?>
            <a href="/openconcert/page/notice/noti_view.php?num=<?=$prev_num?>">
              <?=$prev_noti_detail_tit?></a></span>
              </div>
            <?php
                }
            ?>
            <div class="view-list">다음글<span class="view-next">
            <?php
            // 현재 페이지가 마지막 페이지?
            $sql="SELECT * FROM opc_noti WHERE OPC_NOTI_num ORDER BY OPC_NOTI_num desc limit 1";
            $result=mysqli_query($dbConn, $sql);
            $row=mysqli_fetch_array($result);
            $number=$row['OPC_NOTI_num'];
            if($noti_detail_num==$number){
              // 현재 페이지 번호 31번, 전체 로우 갯수 28개, 다음 게시글??
              // 전체 로우 갯수를 세고, 
            ?>
              등록된 다음글이 없습니다.
            </span>
            </div>
            <?php
                } else {
            // 다음글 넘버
              $next_sql="SELECT * FROM opc_noti WHERE OPC_NOTI_num > $noti_detail_num limit 1";
              $next_result=mysqli_query($dbConn, $next_sql);
              $next_row=mysqli_fetch_array($next_result);
              $next_num=$next_row['OPC_NOTI_num'];
              $next_noti_detail_tit=$next_row['OPC_NOTI_tit'];
            ?>
              <a href="/openconcert/page/notice/noti_view.php?num=<?=$next_num?>">
              <?=$next_noti_detail_tit?>
              </a></span>
            </div>
            <?php
                }
            ?>
          <div class="noti__btns">
            <div class="noti__btn">
              <a href="/openconcert/page/notice/notice.php?page=1" class="list-btn">목록</a>
            </div>
          <?php
                if($userlevel == 1){
          ?>
            <div class="noti__btn">
              <a href="/openconcert/page/notice/noti_modi.php?num=<?=$noti_detail_num?>" class="modi-btn">수정</a>
              <button class="delete-btn" onclick="confirmDel()">삭제</button>
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
    <script>
              function confirmDel(){
                let confirmCheck = confirm('정말로 삭제하시겠습니까?')
                if(confirmCheck == false){
                  return false;
                } else {
                  location.href='/openconcert/process/noti/noti_delete.php?num=<?=$noti_detail_num?>';
                }            
              }
    </script>
  </body>
</html>
