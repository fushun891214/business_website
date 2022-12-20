<?php
  require_once("dbtools.inc.php");
  
  //取得表單資料
  $user_img = $_POST["imgInp"];
  $fullName = $_POST["fullName"];
  $personal_introduce = $_POST["personal_introduce"];
  $department = $_POST["department"];
  $phone_number = $_POST["phone_number"];
  $email = $_POST["email"];
  
  //建立資料連接
  $link = create_connection();
		
  //執行 SQL 命令，新增此帳號
  $sql = "INSERT INTO user_information_table (user_img,fullName, personal_introduce, department, phone_number, 
            email) VALUES ('$user_img','$fullName', '$personal_introduce', '$department', '$phone_number', '$email')";
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
    <title>新增個人資料成功</title>
  </head>
  <body bgcolor="#FFFFFF">
    <p align="center">
      <img src="../img/brand.png">       
    <p align="center">資料已更新完成。<br>
      回到<a href="../../user_member_profile.php">我的資訊</a>。
    </p>
  </body>
</html>