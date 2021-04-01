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
          <h2><a href="/openconcert/page/qna/qna.php?page=1">Q&A</a></h2>
        </div>
        <div class="qna__container center">
          <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/qna-search.php" ?>
          <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/page/qna/qna_page.php" ?>
          <ul class="qna__lists">
            <li class="qna__title">
              <span class="qna-num">번호</span>
              <span class="qna-id">아이디</span>
              <span class="qna-tit">제목</span>
              <span class="qna-reg">등록일</span>
              <span class="qna-hit">조회수</span>
            </li>
            <?php
              $from = ($pageNum-1) * $pageCount;
                  include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';
                  $sql="select * from opc_qna order by OPC_QNA_num desc limit $from, $pageCount";
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
          <!-- pager -->
          <div class="pager">
            <?php
            //  페이징 디자인  // 
            if($pageGroup >= 2){
              //페이지그룹이 2보다 보다 크거나 같으면? 맨 처음으로 가게 해주세요.
            ?>  
              <a href='/openconcert/page/qna/qna.php?page=1' id='prev' class="page"><img src='/openconcert/img/pager-prev-2.png' alt='pager-prev-2'></a>
            <?php
                }
            if ($prev > 5){
              //prev가 5보다 클 때 (즉, 최초 생성)
            ?>
                  <a href='/openconcert/page/qna/qna.php?page=<?=$prev?>' class="page"><img src='/openconcert/img/pager-prev-1.png' alt='pager-prev-1'></a>
          <?php
                }
            for ($p=$first; $p<=$last; $p++) {
              if($pageNum==$p) {
          ?>
              <a class="page on"><?=$p?></a>
          <?php 
            }else {
          ?>
            <a href='/openconcert/page/qna/qna.php?page=<?=$p?>' class="page"><?=$p?></a> 
          <?php
            }
          ?>
          <?php
                }
                if ($last < $total_page) {
          ?>
                    <a href='/openconcert/page/qna/qna.php?page=<?=$next?>' class="page"><img src='/openconcert/img/pager-next-1.png' alt='pager-next-1'></a>
          <?php
                }
                if ($last = $total_page) {
          ?>
          <a href='/openconcert/page/qna/qna.php?page=<?=$total_page?>' class="page"><img src='/openconcert/img/pager-next-2.png' alt='pager-next-2'></a>
              
              <?php
                }
                ?>      
          <!-- page end -->
          </div>
          <!-- pager end -->
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
