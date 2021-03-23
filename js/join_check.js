const sendBtn = document.querySelector('.sendBtn');

//id check
//체크 버튼 저장
// const idCheckBtn = document.querySelector('#idCheck');

//체크 버튼 클릭 시 idCheck 함수 실행
// idCheckBtn.addEventListener('click', idCheck);
//checkCount 0으로 초기화
// let checkCount=0;

//초기화된 checkCount변수 1 증가 함수
// function idCheck(){
//   checkCount++;
// }

sendBtn.addEventListener('click', checkInput);



function checkInput() {
  // 아이디 입력창이 비었을 때
  if(!document.memberForm.id.value) {
    alert('아이디를 입력해주세요.');
    document.memberForm.id.focus();
    return;
  }

  // 이름 입력창이 비었을 때
  if(!document.memberForm.name.value) {
    alert('닉네임을 입력해주세요.');
    document.memberForm.name.focus();
    return;
  }

  // 비밀번호 입력창이 비었을 때
  if(!document.memberForm.pass.value) {
      alert('비밀번호를 입력해주세요.');
      document.memberForm.pass.focus();
      return;
  }  

  // 비밀번호 확인 입력창이 비었을 때
  if(!document.memberForm.check.value) {
    alert('비밀번호 확인을 입력해주세요.');
    document.memberForm.check.focus();
    return;
  }

  // 비밀번호와 비밀번호 확인 일치 여부
  if(document.memberForm.pass.value !== document.memberForm.check.value){
    alert('비밀번호가 일치하지 않습니다. \n다시 입력해 주세요.')
    document.memberForm.pass.value = '';
    document.memberForm.check.value = '';
    document.memberForm.pass.focus();
    return;
  }

  // 이메일 아이디 확인 입력창이 비었을 때
  if(!document.memberForm.email1.value) {
    alert('이메일을 입력해주세요.');
    document.memberForm.email1.focus();
    return;
  }

  document.memberForm.submit();

  // if(checkCount === 0){
  //   alert('아이디 중복체크를 눌러 주세요!');
  // } else {
  //   document.memberForm.submit();
  // }
}
