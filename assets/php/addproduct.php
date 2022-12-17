<?php
  require_once("dbtools.inc.php");
  
  //取得表單資料
  $productName = $_POST["productName"];
  $productIntroduction = $_POST["productIntroduction"];
  $productName = $_POST["productPrice"];
  $productSize = $_POST["productSize"];
  $productPhoto = $_POST["productPhoto"];
  $productDate = $_POST["productDate"];
  $productInformation = $_POST["productInformation"];
  
  //建立資料連接
  $link = create_connection();
		
  //執行 SQL 命令，新增此帳號
  $sql = "INSERT INTO user_table (productName, productIntroduction, productPrice, productSize, 
          productPhoto, productDate, productInformation) VALUES ('$productName', '$productIntroduction', 
          '$productName', '$productSize', '$productPhoto', '$productDate', '$productInformation')";
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
    <title>新增商品成功</title>
  </head>
  <body bgcolor="#FFFFFF">
    <p align="center">
      <img src="../img/brand.png">       
    <p align="center">商品已經新增完成，請至我的商品確認。<br>
      回到<a href="../../seller_my_product.html">我的商品</a>。
    </p>
  </body>
</html>