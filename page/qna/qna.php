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
          <h2>Q&A</h2>
        </div>
        <div class="qna__container center">
          <ul class="qna__lists">
            <li class="qna__title">
              <span class="qna-num">번호</span>
              <span class="qna-id">아이디</span>
              <span class="qna-tit">제목</span>
              <span class="qna-reg">등록일</span>
              <span class="qna-hit">조회수</span>
            </li>
            <li class="qna__title">
              <span class="qna-num">1</span>
              <span class="qna-id">guest</span>
              <span class="qna-tit">공연 구매 문의합니다.</span>
              <span class="qna-reg">2021-03-23</span>
              <span class="qna-hit">3</span>
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
    </script>
  </body>
</html>
