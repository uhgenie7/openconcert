<meta charset="UTF-8" />
<?php
  $perform_title = $_REQUEST['perform_title'];
  $perform_title = addslashes($perform_title);

  $perform_genre = $_REQUEST['perform_genre'];

  $perform_actor = $_REQUEST['perform_actor'];

  $perform_esrb = $_REQUEST['perform_esrb'];

  $perform_thumb = $_REQUEST['perform_thumb'];

  $perform_desc = $_REQUEST['perform_desc'];
  $perform_desc = addslashes($perform_desc);

  $perform_day = date("Y-m-d");

  
  $img_upload_dir=$_SERVER['DOCUMENT_ROOT'].'/openconcert/data/perform_page/perform_img/';

  //main image
  $main_name = $_FILES['perform_img']['name'];
  $main_tmp_name=$_FILES['perform_img']['tmp_name'];
  $main_error=$_FILES['perform_img']['error'];

  echo
  $perform_title,
  $perform_genre,
  $perform_actor,
  $perform_esrb,
  $perform_thumb,
  $perform_desc,
  $main_name;

     //main image upload
     if($main_name && !$main_error) {
      $uploaded_main_file = $img_upload_dir.$main_name;
  
      if(!move_uploaded_file($main_tmp_name, $uploaded_main_file)){
        echo "
          <script>
            alert('메인사진이 업로드되지 않았습니다.');
          </script>
        ";
        exit;
      }
    } else {
      $main_name="";
    }



    //database connect
     include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';
     $sql="insert into opc_per(
      OPC_PER_tit,
      OPC_PER_ger,
      OPC_PER_desc,
      OPC_PER_thumb,
      OPC_PER_img,
      OPC_PER_actor,
      OPC_PER_esrb,
      OPC_PER_reg) values(
         '$perform_title',
         '$perform_genre',
         '$perform_desc',
         '$perform_thumb',
         '$main_name',
         '$perform_actor',
         '$perform_esrb',
         '$perform_day')";
         mysqli_query($dbConn, $sql);

        $sql="select*from opc_per order by OPC_PER_num desc";
        $per_result=mysqli_query($dbConn, $sql);
        $arr_result=array();

// 이 아래부터 JSON 코드 수정...
      while($per_row=mysqli_fetch_array($per_result)){
        array_push($arr_result, array(
          'pernum'=>$per_row['OPC_PER_num'],
          'pertitle'=>$per_row['OPC_PER_tit'],
          'perger'=>$per_row['OPC_PER_ger'],
          'perdesc'=>$per_row['OPC_PER_desc'],
          'perthumb'=>$per_row['OPC_PER_thumb'],
          'perimg'=>$per_row['OPC_PER_img'],
          'peractor'=>$per_row['OPC_PER_actor'],
          'peresrb'=>$per_row['OPC_PER_esrb'],
          'perreg'=>$per_row['OPC_PER_reg']
        ));
      }

 // make json file
  file_put_contents($_SERVER["DOCUMENT_ROOT"]."/openconcert/data/json/perform.json", json_encode($arr_result, JSON_PRETTY_PRINT));
  // file_put~ 이기 때문에 0번째에 경로를 지정해주면 파일을 알아서 만들어주는 메서드

  echo "
  <script>
    location.href='/openconcert/index.php';
  </script>
  ";
?>