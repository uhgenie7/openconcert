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
        $qna_detail_num=$_GET['num'];
        include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';
        // 해당 게시물 정보
        $sql="select * from opc_qna where OPC_QNA_num=$qna_detail_num";
        $result=mysqli_query($dbConn, $sql);
        $row=mysqli_fetch_array($result);
        $qna_detail_tit=$row['OPC_QNA_tit'];
        $qna_detail_name=$row['OPC_QNA_name'];
        $qna_detail_des=$row['OPC_QNA_desc'];
        $qna_detail_new_des=nl2br($qna_detail_des);
        $qna_detail_hit=$row['OPC_QNA_hit'];
        $new_hit=$qna_detail_hit + 1;
        $sql="update opc_qna set OPC_QNA_hit=$new_hit where OPC_QNA_num=$qna_detail_num";
        $qna_detail_reg=$row['OPC_QNA_reg'];
        mysqli_query($dbConn, $sql);
        // DB ROW COUNT
        $query = "SELECT * FROM opc_qna";
        $data = mysqli_query($dbConn, $query);
        $total_rows = mysqli_num_rows($data);
        // 이전글 넘버
        $prev_num=$qna_detail_num-1;
        // 다음글 넘버
        $next_num=$qna_detail_num+1;
      ?>
      <section class="view__section">
        <div class="sub-title">
          <h2><a href="/openconcert/page/qna/qna.php">Q&A</a></h2>
        </div>
        <div class="view__container center">
          <div class="view-title">
            <h4><?=$qna_detail_tit?></h4>
          </div>
          <div class="view-reg">
            <p>등록일: <?=$qna_detail_reg?></p><p>조회수: <?=$qna_detail_hit?></p>
          </div>
          <div class="view-des">
            <p><?=$qna_detail_new_des?></p>
          </div>
            <div class="view-list">이전글<span class="view-prev">
            <?php
            if($qna_detail_num - 1 == 0){
            ?>
              등록된 이전글이 없습니다.</span>
            </div>
            <?php
                } else {
            ?>
            <a href="/openconcert/page/qna/qna_view.php?num=<?=$prev_num?>">
              등록된 이전글이 있습니다.</a></span>
              </div>
            <?php
                }
            ?>
            <div class="view-list">다음글<span class="view-next">
            <?php
            if($qna_detail_num == $total_rows){
            ?>
              등록된 다음글이 없습니다.
            </span>
            </div>
            <?php
                } else {
            ?><a href="/openconcert/page/qna/qna_view.php?num=<?=$next_num?>">
              등록된 다음글이 있습니다.
            </a></span>
              </div>
            <?php
                }
            ?>

          <div class="qna__btns">
            <div class="qna__btn">
              <a href="/openconcert/page/qna/qna.php" class="list-btn">목록</a>
            </div>
          <?php
            if($userid == $qna_detail_name){
          ?>
            <div class="qna__btn">
              <a href="/openconcert/page/qna/qna_modi.php?num=<?=$qna_detail_num?>" class="modi-btn">수정</a>
              <button class="delete-btn">삭제</button>
            </div>
            <?php
                } else if($userlevel == 1){
            ?>
              <div class="qna__btn">
              <a href="/openconcert/page/qna/qna_modi.php?num=<?=$qna_detail_num?>" class="modi-btn">수정</a>
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
