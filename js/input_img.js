$(function(){
  const fileTarget = $(".uploadHidden");
  $("#performImg").on("change", imgFileSelect);

  fileTarget.on('change', function(){
    if(window.FileReader){
      let filename = $(this)[0].files[0].name;
      $(this).siblings('.uploadName').val(filename);
    }
  }); 
});


  // filereader
  let imgFileSelect = function(e){
    let reader = new FileReader();
    reader.readAsDataURL(e.target.files[0]);
    
    reader.onload = function(){
      let dataURL = reader.result;
      // console.log(dataURL);
      
      let output = document.querySelector("#per-img");
      // #per-img DOM으로 가져옴
      
      output.src=dataURL;
      // #per-img.src = dataURL
    };
    
  }