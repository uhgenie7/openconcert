<!DOCTYPE html>
<html lang="ko">
  <head>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/head.php" ?>
    <!-- css file -->
    <link rel="stylesheet" href="/openconcert/css/style.css" />
    <!-- light slider css -->
    <link type="text/css" rel="stylesheet" href="/openconcert/plugin/lightslider.css" /> 
    <!-- responsive css -->
    <link rel="stylesheet" href="/openconcert/css/media.css" />
    <title>OPEN CONCERT</title>
  </head>
  <body>
    <div class="wrap">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/header.php" ?>
      <section class="search__section">
        <h2 class="search__title">Search</h2>
        <div class="search__container">
          <input
            type="text"
            class="search__input"
            placeholder="제목을 입력해주세요"
            spellcheck="false"
          />
          <button type="button" class="send__btn">검색</button>
        </div>
        <div class="movie__back">
          <video loop autoplay muted controls>
            <source src="/openconcert/img/movie1.mov" />
          </video>
        </div>
      </section>
      <section class="best__section center">
        <div class="best__container">
          <h2 class="best__title">Best Contents</h2>
          <p class="best__p">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat
            corporis reiciendis voluptate id, rem iste cupiditate amet quos
            nihil consequuntur molestiae dolor perferendis quis commodi suscipit
            distinctio hic reprehenderit ipsum!
          </p>
        </div>
        <ul id="bestLists" class="best__lists">
          <li class="best__list">
                <div class="best__video">
                  <img src="/openconcert/img/best/best1.jpg" alt="best1">
                </div>
                <h3>꽃이 없으면 쓸쓸한</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel
                  nostrum consequuntur,
                </p>
          </li>
          <li class="best__list">
                <div class="best__video">
                  <img src="/openconcert/img/best/best2.jpg" alt="best2">
                </div>
                <h3>꽃이 없으면 쓸쓸한</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel
                  nostrum consequuntur,
                </p>
          </li>
          <li class="best__list">
                <div class="best__video">
                  <img src="/openconcert/img/best/best3.jpg" alt="best3">
                </div>
                <h3>꽃이 없으면 쓸쓸한</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel
                  nostrum consequuntur,
                </p>
          </li>
                    <li class="best__list">
                <div class="best__video">
                  <img src="/openconcert/img/best/best4.jpg" alt="best4">
                </div>
                <h3>꽃이 없으면 쓸쓸한</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel
                  nostrum consequuntur,
                </p>
          </li>
        </ul>
      </section>
        <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/footer.php" ?>
    </div>
    <!-- js script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- light slider -->
    <script src="/openconcert/plugin/lightslider.js"></script>
    <script src="/openconcert/js/slider.js"></script>
    <!-- custom js -->
    <script src="/openconcert/js/custom.js"></script>
  </body>
</html>
