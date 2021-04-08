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
      <section class="perform__section">
        <div class="sub-title">
          <h2><a href="/openconcert/page/perform/perform.php">PERFORM</a></h2>
        </div>
        <div class="perform__container center">
          <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/perform-search.php" ?>
          <ul class="perform__lists">
              <?php
                $search_select=$_GET['findType'];
                $search_input=$_GET['findWord'];
                //database connect
                include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';
                if($search_select == 'all'){
                  $sql="select * from opc_per where OPC_PER_tit LIKE '%$search_input%' || OPC_PER_desc LIKE '%$search_input%' order by OPC_PER_num desc";
                } else if($search_select == 'title') {
                  $sql="select * from opc_per where OPC_PER_tit LIKE '%$search_input%' order by OPC_PER_num desc";
                } else {
                  $sql="select * from opc_per where OPC_PER_desc LIKE '%$search_input%' order by OPC_PER_num desc";
                }

                $search_result=mysqli_query($dbConn, $sql);
                $search_result_num=mysqli_num_rows($search_result);

                if(!$search_result_num){
                  echo '<li style="padding:10px; width:100%; text-align:center;">등록된 게시물이 없습니다.</li>';
                } else {
                  while($search_result_row=mysqli_fetch_array($search_result)){
                    $result_num=$search_result_row['OPC_PER_num'];
                    $result_img=$search_result_row['OPC_PER_img'];
                    $result_tit=$search_result_row['OPC_PER_tit'];
                    $result_thumb=$search_result_row['OPC_PER_thumb'];
                    $result_reg=$search_result_row['OPC_PER_reg'];
                ?>
                <li class="perform__list">
                        <div class="perform__imgbox">
                          <img src="/openconcert/data/perform_page/perform_img/<?=$result_img?>" alt="<?=$result_tit?>">
                        </div>
                        <div class="perform__des">
                          <h3><?=$result_tit?></h3>
                          <p><?=$result_thumb?></p>
                          <div class="perform__more">
                            <button class="perform-preview" onClick="alert('준비중입니다')">미리보기</button>
                            <button class="perform-buy" onClick="alert('준비중입니다')">결제하기</button>
                          </div>
                        </div>
                      </li>
                <?php
                  }
                }
                ?>
          </ul>
          <!-- pager 자리 구축 -->
          <!-- pager 자리 구축 end -->
          <div class="per__btns">
            <?php
              if($userid==''){
            ?>
                <button class="write-btn" onclick="plzLogin()">글쓰기</button>
            <?php
              } else {
              ?>
                <button class="write-btn" onclick="location.href='/openconcert/page/per/per_input_form.php'">글쓰기</button>
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
