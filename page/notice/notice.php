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
      <section class="noti__section">
        <div class="sub-title">
          <h2>NOTICE</h2>
        </div>
        <div class="noti__container center">
          <ul class="noti__lists">
            <li class="noti__title">
              <span class="noti-num">번호</span>
              <span class="noti-id">아이디</span>
              <span class="noti-tit">제목</span>
              <span class="noti-reg">등록일</span>
              <span class="noti-hit">조회수</span>
            </li>
            <li class="noti__title">
              <span class="noti-num">1</span>
              <span class="noti-id">admin</span>
              <span class="noti-tit">공지사항입니다</span>
              <span class="noti-reg">2021-03-23</span>
              <span class="noti-hit">3</span>
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
      // const wrapInfo = wrap.getBoundingClientRect();
      // const wrapHeight = wrapInfo.height;
      // console.log(wrapHeight);
      // if (wrapHeight > 768) {
      //   footer.style.position = "relative";
      // } else {
      //   footer.style.position = "fixed";
      //   footer.style.bottom = 0;
      // }
    </script>
  </body>
</html>
