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
                 include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';
                  $sql="select * from opc_qna order by OPC_QNA_num desc limit $offset, $list_num";
                  $qna_result=mysqli_query($dbConn, $sql);
                  while($qna_row=mysqli_fetch_array($qna_result)){
                    $qna_res_num=$qna_row['OPC_QNA_num'];
                    $qna_res_id=$qna_row['OPC_QNA_name'];
                    $qna_res_tit=$qna_row['OPC_QNA_tit'];
                    $qna_res_reg=$qna_row['OPC_QNA_reg'];
                    $qna_res_hit=$qna_row['OPC_QNA_hit'];
            ?>
            <li class="qna__title">
              <span class="qna-num"><?=$cur_num?></span>
              <span class="qna-id"><?=$qna_res_id?></span>
              <span class="qna-tit"><a href="/openconcert/page/qna/qna_view.php?page=<?=$page?>&num=<?=$qna_res_num?>"class="qna-link"><?=$qna_res_tit?></a></span>
              <span class="qna-reg"><?=$qna_res_reg?></span>
              <span class="qna-hit"><?=$qna_res_hit?></span>
            </li>
            <?php
              $cur_num --;}
            ?>
          </ul>
          <!-- pager -->
          <div class="pager">
            <?php
            //  페이징 디자인  // 
            if($block > 1) {
                $prev=$first-1;
            ?>  
              <a href='/openconcert/page/qna/qna.php?page=1' id='prev' class="page"><img src='/openconcert/img/pager-prev-2.png' alt='pager-prev-2'></a>
            <?php
                }
            if($page > 1) {
              $go_page=$page-1;
            ?>
                  <a href='/openconcert/page/qna/qna.php?page=<?=$go_page?>' class="page"><img src='/openconcert/img/pager-prev-1.png' alt='pager-prev-1'></a>
          <?php
                }
            for ($page_link=$first+1;$page_link<=$last;$page_link++) {
              if($page_link==$page) {
          ?>
              <a class="page on"><?=$page_link?></a>
          <?php 
            }else {
          ?>
            <a href='/openconcert/page/qna/qna.php?page=<?=$page_link?>' class="page"><?=$page_link?></a> 
          <?php
            }
          ?>
          <?php
                }
                if ($block < $total_block) {
                  $next=$last+1;
          ?>
                    <a href='/openconcert/page/qna/qna.php?page=<?=$total_page?>' class="page"><img src='/openconcert/img/pager-next-1.png' alt='pager-next-1'></a>
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
