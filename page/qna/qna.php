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
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- css file -->
    <link rel="stylesheet" href="/openconcert/css/style.css" />
    <link rel="stylesheet" href="/openconcert/css/subpage.css" />
    <link rel="stylesheet" href="/openconcert/css/media.css" />
    <title>OPEN CONCERT</title>
  </head>
  <body>
    <div class="wrap">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/header.php" ?>
      <section class="qna__section">
        <div class="sub-title">
          <h2><a href="/openconcert/page/qna/qna.php">Q&A</a></h2>
        </div>
        <div class="qna__container center">
          <ul class="qna__lists">
            <li class="qna__title">
              <span class="qna-num">번호</span>
              <span class="qna-id">아이디</span>
              <span class="qna-tit">제목</span>
              <span class="qna-reg">등록일</span>
              <span class="qna-hit">조회수</span>
            </li>
                <?php
                    include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';
                    $sql="select * from opc_qna order by OPC_QNA_num desc limit 5";
                    $qna_result=mysqli_query($dbConn, $sql);
                    while($qna_row=mysqli_fetch_array($qna_result)){
                      $qna_res_num=$qna_row['OPC_QNA_num'];
                      $qna_res_id=$qna_row['OPC_QNA_name'];
                      $qna_res_tit=$qna_row['OPC_QNA_tit'];
                      $qna_res_reg=$qna_row['OPC_QNA_reg'];
                      $qna_res_hit=$qna_row['OPC_QNA_hit'];
                ?>
              <li class="qna__title">
                <span class="qna-num"><?=$qna_res_num?></span>
                <span class="qna-id"><?=$qna_res_id?></span>
                <span class="qna-tit"><a href="/openconcert/page/qna/qna_view.php?num=<?=$qna_res_num?>"class="qna-link"><?=$qna_res_tit?></a></span>
                <span class="qna-reg"><?=$qna_res_reg?></span>
                <span class="qna-hit"><?=$qna_res_hit?></span>
              </li>
                <?php
                }
                ?>
          </ul>
          <div class="pager">
                  <a href="#" class="page">
                    <img src="/openconcert/img/pager-prev-2.png" alt="pager-prev-2">
                  </a>
                  <a href="#" class="page">
                    <img src="/openconcert/img/pager-prev-1.png" alt="pager-prev-1">
                  </a>
                  <a href="#" class="on">1</a>
                  <a href="#">2</a>
                  <a href="#">3</a>
                  <a href="#">4</a>
                  <a href="#">5</a>
                  <a href="#" class="page">
                    <img src="/openconcert/img/pager-next-1.png" alt="pager-next-1">
                  </a>
                  <a href="#" class="page">
                    <img src="/openconcert/img/pager-next-2.png" alt="pager-prev-2">
                  </a>
          </div>
          <div class="qna__btns">
            <?php
              if($userid==''){
            ?>
                <button class="write-btn" onclick="plzLogin()">글쓰기</button>
            <?php
              } else {
              ?>
                <button class="write-btn" onclick="location.href='/openconcert/page/qna/qna_input_form.php'">글쓰기</button>
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
      function plzLogin(){
        alert('글쓰기를 하시려면 로그인이 필요합니다.');
      }
    </script>
  </body>
</html>
