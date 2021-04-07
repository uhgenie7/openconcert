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
          <h2><a href="/openconcert/page/perform/perform.php">PERFORM LIST</a></h2>
        </div>
        <div class="perform__container center">
          <div class="perform__boxes">
            <ul class="perform__lists">
              <li class="perform__list">
                <div class="perform__imgbox">
                  <img src="/openconcert/img/poster_1.png" alt="poster1" class="perform__img">
                </div>
                <div class="perform__des">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque sit molestiae totam quam labore temporibus sunt voluptate dolorum fuga laudantium perferendis culpa nihil assumenda, ducimus optio distinctio nostrum id earum?</p>
                  <div class="perform__btns">
                    <button class="perform-preview" onClick="alert('준비중입니다')">미리보기</button>
                    <button class="perform-buy" onClick="alert('준비중입니다')">결제하기</button>
                  </div>
                </div>
              </li>
              <li class="perform__list">
                <div class="perform__imgbox">
                  <img src="/openconcert/img/poster_2.png" alt="poster2" class="perform__img">
                </div>
                <div class="perform__des">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque sit molestiae totam quam labore temporibus sunt voluptate dolorum fuga laudantium perferendis culpa nihil assumenda, ducimus optio distinctio nostrum id earum?</p>
                  <div class="perform__btns">
                    <button class="perform-preview" onClick="alert('준비중입니다')">미리보기</button>
                    <button class="perform-buy" onClick="alert('준비중입니다')">결제하기</button>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <!-- dummy -->
          <div class="appBoxes"></div>
          <!-- btn 수정 요망 -->
          <div class="btns">
            <button class="commonBtn loadMore">Loard More</button>
            <a href="#" class="commonBtn toTop">Go To Top</a>
            <a href="#" class="commonBtn">Upload Contents</a>
        </div>
        <!-- btn 수정 요망 end-->
      </section>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/footer.php" ?>
    </div>
    <!-- js script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/openconcert/js/custom.js"></script>
    <script src="/openconcert/js/perform.js"></script>
  </body>
</html>
