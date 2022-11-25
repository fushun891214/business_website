<?php
  //檢查 cookie 中的 passed 變數是否等於 TRUE
  $passed = $_COOKIE["passed"];
	
  /*  如果 cookie 中的 passed 變數不等於 TRUE
      表示尚未登入網站，將使用者導向首頁 user_index.html	*/
  if ($passed != "TRUE")
  {
    header("location:../user_index.html");
    exit();
  }
  else{
    header("location:../user_index.html");
    exit();
  }
?>
<!--
<!DOCTYPE html>
<html>
  <head>
    <title>大學會員管理</title>
    <meta charset="utf-8">
  </head>
  <body>
    <p align="center"><img src="manage.png"></p>
    <p align="center">
      <a href="select.php">檢視會員資料</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="logout.php">登出網站</a>
    </p>
  </body>
</html>
-->
