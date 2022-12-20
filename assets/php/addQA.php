<?php
  require_once("dbtools.inc.php");
  
  //取得表單資料
  $Question = $_POST["Question"];
  $Answer = $_POST["Answer"];

  
  //建立資料連接
  $link = create_connection();
		
  //執行 SQL 命令，新增此帳號
  $sql = "INSERT INTO QA_table (Question,Answer) VALUES ('$Question','$Answer')";
  $result = execute_sql($link, "Business_Website", $sql);
    //釋放 $result 佔用的記憶體
  mysqli_free_result($result);
  //關閉資料連接	
  mysqli_close($link);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>新增QA成功</title>
  </head>
  <body bgcolor="#FFFFFF">
    <p align="center">
      <img src="../img/brand.png">       
    <p align="center">新增QA成功<br>
      回到<a href="../../seller_help.php">幫助</a>。
    </p>
  </body>
</html>