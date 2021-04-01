<?php
  $page = ($_GET['page'])?$_GET['page']:1;

  include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';

  $query = "SELECT * FROM opc_qna";
  $data = mysqli_query($dbConn, $query);

  $totalData = mysqli_num_rows($data);

  echo "총 데이터수: $totalData 개 <br>";
  //총 데이터의 수 8개
  $pageCount = 5; 
  // 한 화면에 나타낼 페이지 수
  $dataPerPage = 5; 
  // 블럭 당 페이지 수

  $totalPage = ceil($totalData/$pageCount); // 총 페이지 수
  $pageGroup = ceil($totalPage/$dataPerPage); // 총 블록 수

  echo "총 페이지 수: $totalPage 페이지 <br>";
  echo "총 블럭수: $pageGroup 개<br>";

  $last = $pageGroup * $dataPerPage; 
  // 화면에 보여질 마지막 페이지 번호
  echo "화면에 보여질 마지막 페이지 번호: $last 번<br>";

  $first = $last - ($pageCount - 1); // 화면에 보여질 첫번째 페이지 번호
  $next = $last + 1; //마지막 번호 바로 다음
  $prev = $first - 1; //첫번째 번호 바로 이전

  if ($prev <= 0) {
        $prev = 1;
      }

  //음수 페이징 방지

  if ($last > $totalPage) {
        $last = $totalPage;
      }

  //최대 페이징 방지


  //  페이징 디자인  // 
  if($pageGroup >= 2){
    //페이지그룹이 2보다 보다 크거나 같으면? 맨 처음으로 가게 해주세요.
  ?>  
    <a href='/openconcert/page/qna/qna.php?page=1' id='prev'><img src='/openconcert/img/pager-prev-2.png' alt='pager-prev-2'></a>
     
  <?php
      }

  if ($prev > 0){
    //prev가 0보다 클 때 (즉, 최초 생성)
  ?>
        <a href='/openconcert/page/qna/qna.php?page=<?=$prev?>'><img src='/openconcert/img/pager-prev-1.png' alt='pager-prev-1'></a>
<?php
      }

  for ($p=$first; $p<=$last; $p++) {
?>
  <a href='/openconcert/page/qna/qna.php?page=<?=$p?>'><?=$p?></a> 
<?php
      }
      if ($last < $totalPage) {
?>
          <a href='/openconcert/page/qna/qna.php?page=<?=$next?>'><img src='/openconcert/img/pager-next-1.png' alt='pager-next-1'></a>
 <?php
      }
      if ($last = $totalPage) {
?>
<a href='/openconcert/page/qna/qna.php?page=<?=$totalPage?>'><img src='/openconcert/img/pager-next-2.png' alt='pager-next-2'></a>
    
    <?php
      }
      ?>      
<!-- page end -->
<?php
$from = ($page-1) * $pageCount;

include $_SERVER['DOCUMENT_ROOT'].'/openconcert/process/connect/db_connect.php';

$sql="select * from opc_qna order by OPC_QNA_num desc limit $from, $pageCount";

$qna_result=mysqli_query($dbConn, $sql);

       while($qna_row=mysqli_fetch_array($qna_result)){
         $qna_res_num=$qna_row['OPC_QNA_num'];
         $qna_res_id=$qna_row['OPC_QNA_name'];
         $qna_res_tit=$qna_row['OPC_QNA_tit'];
         $qna_res_reg=$qna_row['OPC_QNA_reg'];
         $qna_res_hit=$qna_row['OPC_QNA_hit'];
?>

 <li class="qna__title">
   <span class="qna-num"><?=$qna_res_num?></span>
   <span class="qna-id"><?=$qna_res_id?></span>
   <span class="qna-tit"><a href="/openconcert/page/qna/qna_view.php?num=<?=$qna_res_num?>"class="qna-link"><?=$qna_res_tit?></a></span>
   <span class="qna-reg"><?=$qna_res_reg?></span>
   <span class="qna-hit"><?=$qna_res_hit?></span>
 </li>

   <?php
   }
   ?>