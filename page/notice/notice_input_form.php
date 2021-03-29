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
          <h2>UPLOAD</h2>
        </div>
        <div class="noti__container center">
          <form action="/openconcert/process/noti_insert.php" method="post" name="noti_form">
            <label for="title" class="noti-title">제목</label>
            <input type="text" placeholder="제목을 입력해주세요." id="notiTitle" name="noti_title">
            <label for="noti_desc" class="noti-desc">내용</label>
            <textarea id="noti_desc" placeholder="내용을 입력해주세요." class="noti__desc" name="noti_desc" spellcheck="false"></textarea>
          </form>
          <div class="noti__btns">
            <button class="write-btn">글쓰기</button>
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
          document.noti_form.submit();
        });
    </script>
  </body>
</html>
