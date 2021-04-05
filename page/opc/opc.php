<!DOCTYPE html>
<html lang="ko">
  <head>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/head.php" ?>
    <!-- scrollreveal plugin -->
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
          <h2><a href="/openconcert/page/opc/opc.php">ABOUT OPEN CONCERT</a></h2>
        </div>
        <div class="opc__container center">
          <div class="opc__about">
            <div class="opc__left animate-left">
              <img src="/openconcert/img/opc-1.jpg" alt="opc__img" class="opc__img" />
            </div>
            <div class="opc__right animate-right">
              <p class="opc__p">
                오픈콘서트는 창작 문화 공연을 선도하는 기업입니다.<br><br>
                오픈콘서트는 언택트 시대에 맞추어 온라인 공연을 준비하고 있습니다.
                오픈콘서트는 창작 공연을 제작하는만큼 트렌드에 맞추어 새로운 시도와 창의력을 살릴 수 있는 도전 등 언제나 열려 있는 마음으로 고객에게 다가갑니다.<br><br>
                오픈콘서트는 많은 이들이 공연을 어렵지 않게 즐길 수 있도록 고민합니다. 또한 언제 어디서든 고객의 마음을 위로하고 즐거운 공연을 선보일 것입니다.
              </p>
            </div>
          </div>
          <div class="opc__about">
            <div class="opc__left animate-left">
              <p class="opc__p">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
                voluptatum maiores itaque consectetur numquam harum totam
                voluptatibus. Culpa quisquam itaque expedita quos eum ipsa unde, dolor
                voluptate autem dignissimos quae!<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
              </p>
            </div>
            <div class="opc__right animate-right">
              <img src="/openconcert/img/opc-2.jpg" alt="opc__img" class="opc__img"/>
            </div>
          </div>
        </div>
      </section>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/footer.php" ?>
    </div>
    <!-- js script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/openconcert/js/custom.js"></script>
    <script src="/openconcert/js/scroll.js"></script>

  </body>
</html>
