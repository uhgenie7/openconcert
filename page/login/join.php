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
      <section class="join__section">
        <div class="join__container center">
           <!-- contact title -->
          <div class="join__title">
            <h2 class="join__h2">회원가입</h2>
          </div>
          <!-- login box -->
          <div class="join-form">
            <form action="/openconcert/process/login/insertMembers.php" method="post" name="memberForm">
              <p class="idInputBox inputBox">
                <label for="id">아이디</label>
                <input type="text" name="id" class="form-join" id="id" placeholder="아이디를 입력해주세요." spellcheck="false">
              </p>
              <p class="nameInputBox inputBox">
                <label for="name">닉네임</label>
                <input type="text" name="name" class="form-join" id="name" placeholder="닉네임을 입력해주세요." spellcheck="false">
              </p>
              <p class="passInputBox inputBox">
                <label for="pass">비밀번호</label>
                <input type="password" name="pass" class="form-join" id="pass" placeholder="비밀번호를 입력해주세요." spellcheck="false">
              </p>
              <p class="checkInputBox inputBox">
                <label for="pass">비밀번호 확인</label>
                <input type="password" name="check" class="form-join" id="check" placeholder="비밀번호를 다시 한 번 입력해주세요." spellcheck="false">
              </p>
              <p class="emailInputBox inputBox">
                <label for="email1">이메일</label>
                <input type="text" name="email1" class="email1 form-join" id="email1" placeholder="이메일을 입력해주세요." spellcheck="false">
              </p>
              <div class="formBtns">
                <button type="button" class="sendBtn join-btn">SEND</button>
              </div>
            </form>
          </div>
          <!-- end of join box -->
        </div>

      </section>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/footer.php" ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/openconcert/js/custom.js"></script>
    <script src="/openconcert/js/join_check.js"></script>
    <script>
      // $(function(){
      //   $("#idCheck").click(function(){
      //     const url = '/openconcert/process/login/member_check_id.php?id=' + $("#id").val();
      //     $.get(url, function(data){
      //       alert(data);
      //     });
      //   });
      // });
    </script>
  </body>
</html>
