<?php

  session_start();
  if(isset($_SESSION["userid"])){
    $userid=$_SESSION["userid"];
  } else {
    $userid='';
  }

  if(isset($_SESSION["userpoint"])){
    $userpoint=$_SESSION["userpoint"];
  } else {
    $userpoint='';
  }

  if(isset($_SESSION["userlevel"])){
    $userlevel=$_SESSION["userlevel"];
  } else {
    $userlevel='';
  }
?>

<header class="header">
      <div class="header__container">
          <div class="header__info">
            <a href="#" class="header__link">안내</a>
          </div>
          <div class="header__info">
            <a href="/openconcert/index.php"
              ><img src="/openconcert/img/logo.png" alt="logo" class="logo"
            /></a>
          </div>
          <div class="header__info">
            <?php
              if(!$userid){
            ?>
              <a href="/openconcert/page/login/join.php" class="header--join">회원가입</a>
              <a href="/openconcert/page/login/login.php" class="header--login">로그인</a>

            <?php 
              } else {
                  if($userlevel == 1) {
            ?>
              <a href="#" class="header--my">ADMIN</a>
              <a href="/openconcert/process/login/logout.php" class="header--logout">로그아웃</a>

            <?php
            } else {
            ?>
              <a href="#" class="header--my">마이페이지</a>
              <a href="/openconcert/process/login/logout.php" class="header--logout">로그아웃</a>

            <?php
                }
              }
            ?>


            <i class="fas fa-bars"></i>
            <i class="fas fa-times"></i>

          </div>
        </div>
        <div class="header__nav">
          <ul>
            <li class="active"><a href="/openconcert/page/opc/opc.php">오픈콘서트</a></li>
            <li><a href="/openconcert/page/perform/perform.php">공연목록</a></li>
            <li><a href="/openconcert/page/notice/notice.php">공지사항</a></li>
            <li>
              <a href="/openconcert/page/qna/qna.php">Q&A</a>
            </li>
            <li><a href="/openconcert/page/goods/goods.php">굿즈스토어</a></li>
          </ul>
        </div>
</header>