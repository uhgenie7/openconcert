<?php
  $url=$_SERVER["DOCUMENT_ROOT"]."/openconcert/data/json/perform.json";
  $json_string=file_get_contents($url);
  echo $json_string;
?>