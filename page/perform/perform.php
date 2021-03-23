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
      <section class="opc__section">
        <div class="sub-title">
          <h2>PERFORM LIST</h2>
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
      </section>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/footer.php" ?>
    </div>
    <!-- js script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/openconcert/js/custom.js"></script>
  </body>
</html>
