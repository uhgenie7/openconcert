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
      <section class="qna__section">
        <div class="sub-title">
          <h2>UPLOAD</h2>
        </div>
        <div class="qna__container center">
        <?php
        $qna_modi_num=$_GET['num'];
        include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';
        $sql="select * from opc_qna where OPC_QNA_num=$qna_modi_num";
        $result=mysqli_query($dbConn, $sql);
        $row=mysqli_fetch_array($result);
        $qna_modi_tit=$row['OPC_QNA_tit'];
        $qna_modi_des=$row['OPC_QNA_desc'];
        $qna_modi_hit=$row['OPC_QNA_hit'];
        $qna_modi_reg=$row['OPC_QNA_reg'];
      ?>
          <form action="/openconcert/process/qna/qna_update.php?num=<?=$qna_modi_num?>" method="post" name="qna_update">
            <label for="title" class="qna-title">제목</label>
            <input type="text" value='<?=$qna_modi_tit?>' id="qnaTitle" name="qna_title" spellcheck="false">
            <label for="qna_desc" class="qna-desc">내용</label>
            <textarea id="qna_desc" class="qna__desc" name="qna_desc" spellcheck="false"><?=$qna_modi_des?></textarea>
          </form>
          <div class="qna__btns">
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
          document.qna_update.submit();
        });
    </script>
  </body>
</html>
