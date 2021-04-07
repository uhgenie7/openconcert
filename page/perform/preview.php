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
      <section class="opc__section">
        <div class="sub-title">
          <h2><a href="/openconcert/page/perform/perform.php">공연이름 DB 공간</a></h2>
        </div>
        <div class="preview__container center">
          <div class="preview__video">
            <video src="#"></video>
          </div>
          <div class="preview__Info">
            <ul class="preview__lists">
              <li class="preview__list">
                <strong>포스트(숨김처리)</strong>
                <span><img src="#" alt="포스트 제목"></span>
              </li>
              <li class="preview__list">
                <strong>제목</strong>
                <span>공연이름</span>
              </li>
              <li class="preview__list">
                <strong>장르</strong>
                <span>장르이름</span>
              </li>
              <li class="preview__list">
                <strong>설명</strong>
                <span>공연설명</span>
              </li>
              <li class="preview__list">
                <strong>컨텐츠 등급</strong>
                <span>등급</span>
              </li>
            </ul>
          </div>
            <div class="buy__btns">
                <button class="perform-buy" onClick="alert('준비중입니다')">결제하기</button>
            </div>
      </section>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/footer.php" ?>
    </div>
    <!-- js script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/openconcert/js/custom.js"></script>
  </body>
</html>
