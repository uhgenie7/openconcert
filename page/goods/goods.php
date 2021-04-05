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
      <section class="goods__section">
        <div class="sub-title">
          <h2>GOODS STORE</h2>
        </div>
        <div class="goods__container center">
          <ul class="goods__lists">
            <li class="goods__list">
                <div class="goods__imgbox">
                  <img src="/openconcert/img/poster_2.png" alt="poster2" class="goods__img">
                </div>
                <div class="goods__des">
                  <p>오픈콘서트: 어서와 굿즈</p>
                  <p>6,000원</p>
                </div>
            </li>
            <li class="goods__list">
                <div class="goods__imgbox">
                  <img src="/openconcert/img/poster_2.png" alt="poster2" class="goods__img">
                </div>
                <div class="goods__des">
                  <p>오픈콘서트: 어서와 굿즈</p>
                  <p>6,000원</p>
                </div>
            </li>
            <li class="goods__list">
                <div class="goods__imgbox">
                  <img src="/openconcert/img/poster_2.png" alt="poster2" class="goods__img">
                </div>
                <div class="goods__des">
                  <p>오픈콘서트: 어서와 굿즈</p>
                  <p>6,000원</p>
                </div>
            </li>
            <li class="goods__list">
                <div class="goods__imgbox">
                  <img src="/openconcert/img/poster_2.png" alt="poster2" class="goods__img">
                </div>
                <div class="goods__des">
                  <p>오픈콘서트: 어서와 굿즈</p>
                  <p>6,000원</p>
                </div>
            </li>
            <li class="goods__list">
                <div class="goods__imgbox">
                  <img src="/openconcert/img/poster_2.png" alt="poster2" class="goods__img">
                </div>
                <div class="goods__des">
                  <p>오픈콘서트: 어서와 굿즈</p>
                  <p>6,000원</p>
                </div>
            </li>
          </ul>
        </div>
      </section>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/footer.php" ?>
    </div>
    <!-- js script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/openconcert/js/custom.js"></script>
    <script>
      // wrap height에 따른 footer 조건문
      // const wrap = document.querySelector(".wrap");
      // const footer = document.querySelector(".footer");
      // const windowHeight = window.innerHeight;
      // console.log(windowHeight);

      // const wrapHeight = wrap.offsetHeight;
      // console.log(wrapHeight);
      // if (windowHeight > 768) {
      //   // 높이가 크면 relative
      //   footer.style.position = "relative";
      // } else {
      //   // 높이가 작으면 아래에 fixed
      //   footer.style.position = "fixed";
      //   footer.style.bottom = 0;
      // }
    </script>
  </body>
</html>
