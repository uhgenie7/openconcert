<!DOCTYPE html>
<html lang="ko">
  <head>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/head.php" ?>
    <!-- css file -->
    <link rel="stylesheet" href="/openconcert/css/style.css" />
    <link rel="stylesheet" href="/openconcert/css/login.css" />
    <link rel="stylesheet" href="/openconcert/css/media.css" />

    <title>OPEN CONCERT</title>
  </head>
  <body>
    <div class="wrap">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/header.php" ?>
      <section class="login__section">
        <div class="login__container center">
          <div class="login__title">
            <h2 class="login__h2">로그인</h2>
          </div>
          <!-- login box -->
          <form
            action="/openconcert/process/login/login.php"
            method="post"
            name="loginForm"
            class="login-form"
          >
            <div>
              <p>
                <input type="text" placeholder="ID" name="loginId" class="form-login" spellcheck="false" />
              </p>
              <p>
                <input
                  type="password"
                  placeholder="Password"
                  name="loginPass"
                  class="form-login"
                  spellcheck="false"
                />
              </p>
              <div>
                <a href="#" class="login-btn">로그인</a>
              </div>
            </div>
          </form>
          <!-- end of login box -->
          <div class="findInfo">
            <a href="#">아이디 찾기</a>
            <a href="#">비밀번호 찾기</a>
            <a href="/openconcert/page/login/join.php"
                  class="joinBtn"
                  >회원가입</a>
          </div>
        </div>
        <!-- end of center -->
      </section>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/footer.php" ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/openconcert/js/custom.js"></script>
    <script>
      const logBtn = document.querySelector(".login-btn");
      logBtn.addEventListener("click", checkLogin);

      function checkLogin() {
        if (!document.loginForm.loginId.value) {
          alert("아이디를 입력해주세요");
          document.loginForm.loginId.focus();
          return;
        }

        if (!document.loginForm.loginPass.value) {
          alert("비밀번호를 입력해주세요");
          document.loginForm.loginPass.focus();
          return;
        }

        document.loginForm.submit();
      }

      (function () {
        document.addEventListener("keydown", function (e) {
          //모든 키 중 하나를 눌렀을 때
          const keyCode = e.keyCode;
          if (keyCode == 13) {
            checkLogin();
          }
        });
      })();
    </script>
  </body>
</html>
