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
          <h2><a href="/openconcert/page/perform/perform.php">PERFORM LIST</a></h2>
        </div>
        <div class="perform__container center">
        <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/perform-search.php" ?>
          <div class="perform__boxes">
            <ul class="perform__lists">
            <!-- json start -->
            </ul>
          </div>
          <div class="perform__btns">
            <button class="loadMore">더보기</button>
            <!-- <button href="#" class="write-btn toTop">Go To Top</button> -->
            <a href="/openconcert/page/perform/perform_input_form.php" class="write-btn">업로드</a>
          </div>
      </section>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/footer.php" ?>
    </div>
    <!-- js script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/openconcert/js/custom.js"></script>
    <script src="/openconcert/js/perform.js"></script>
  </body>
</html>
