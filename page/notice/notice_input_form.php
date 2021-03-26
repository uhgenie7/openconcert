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
    <!-- smart -->
    <script type="text/javascript" charset="utf-8" src="/openconcert/smarteditor/js/HuskyEZCreator.js"></script>
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
            <label for="title" class="title-name">제목</label>
            <input type="text" placeholder="제목을 입력해주세요." id="title" name="noti_title">
            <textarea id="noti_desc" class="noti__textarea" name="noti_desc"></textarea>
            <script type="text/javascript">
                  var oEditors = [];

                  var sLang = "ko_KR";

                  nhn.husky.EZCreator.createInIFrame({
                    oAppRef: oEditors,
                    elPlaceHolder: "noti_desc",
                    sSkinURI: "/openconcert/smarteditor/SmartEditor2Skin.html",	
                    htParams : {
                      bUseToolbar : true,	
                      bUseVerticalResizer : true,	
                      bUseModeChanger : true,
                      fOnBeforeUnload : function(){
                        //alert("완료!");
                      },
                      I18N_LOCALE : sLang
                    }, //boolean
                    fOnAppLoad : function(){
                      oEditors.getById["noti_desc"].exec("PASTE_HTML", [""]);
                    },
                    fCreator: "createSEditor2"
                  });

                  function showHTML() {
                    var sHTML = oEditors.getById["noti_desc"].getIR();
                    alert(sHTML);
                  }
                    
                  function submitContents(elClickedObj) {
                    oEditors.getById["noti_desc"].exec("UPDATE_CONTENTS_FIELD", []);
                    try {
                      elClickedObj.form.submit();
                    } catch(e) {}
                  }
          </script>
          </form>
        </div>
        <div class="noti__btns center">
          <button class="noti-write" onclick="submitContents(this);" >글쓰기</button>
        </div>
      </section>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/openconcert/include/footer.php" ?>
    </div>
    <!-- js script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/openconcert/js/custom.js"></script>
    <script>
        const submitBtn = document.querySelector(".noti-write");
        submitBtn.addEventListener('click', function(){
          document.noti_form.submit();
        });
    </script>
  </body>
</html>
