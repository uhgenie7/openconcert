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
          <h2><a href="/openconcert/page/notice/notice.php?page=1">NOTICE</a></h2>
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
                $search_select=$_GET['findType'];
                $search_input=$_GET['findWord'];

                // echo $search_select, $search_input;
                //database connect
                include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';

                if($search_select == 'all'){
                  $sql="select * from opc_noti where OPC_NOTI_tit LIKE '%$search_input%' || OPC_NOTI_desc LIKE '%$search_input%' order by OPC_NOTI_num desc";
                } else if($search_select == 'title') {
                   $sql="select * from opc_noti where OPC_NOTI_tit LIKE '%$search_input%' order by OPC_NOTI_num desc";
                } else {
                  $sql="select * from opc_noti where OPC_NOTI_desc LIKE '%$search_input%' order by OPC_NOTI_num desc";
                }

                $search_result=mysqli_query($dbConn, $sql);
                $search_result_num=mysqli_num_rows($search_result);

                if(!$search_result_num){
                  echo '<li style="padding:10px; width:100%; text-align:center;">등록된 게시물이 없습니다.</li>';
                } else {
                  while($search_result_row=mysqli_fetch_array($search_result)){
                    $result_num=$search_result_row['OPC_NOTI_num'];
                    $result_tit=$search_result_row['OPC_NOTI_tit'];
                    $result_reg=$search_result_row['OPC_NOTI_reg'];
                    $result_hit=$search_result_row['OPC_NOTI_hit'];
                ?>

                <li class="noti__title">
                  <span class="noti-num"><?=$result_num?></span>
                  <span class="noti-id">ADMIN</span>
                  <span class="noti-tit"><a href="/openconcert/page/notice/noti_view.php?num=<?=$result_num?>" class="noti-link"><?=$result_tit?></a></span>
                  <span class="noti-reg"><?=$result_reg?></span>
                  <span class="noti-hit"><?=$result_hit?></span>
                </li>
                <?php
                  }
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
          <div class="noti__btns">
            <?php
              if($userid==''){
            ?>
                <button class="write-btn" onclick="plzLogin()">글쓰기</button>
            <?php
              } else {
              ?>
                <button class="write-btn" onclick="location.href='/openconcert/page/noti/noti_input_form.php'">글쓰기</button>
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
