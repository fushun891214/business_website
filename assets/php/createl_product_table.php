<?php

$server = "localhost";
$dbuser = "superu";
$dbpassword = "class100";
$dbname = "Business_Website";

$connection = new mysqli($server, $dbuser, $dbpassword, $dbname);

if($connection->connect_error){
        die("連線失敗:" . $connection->connect_error);
}

$sqlQuery = "CREATE TABLE product_table (
    productID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	productName VARCHAR(50),
	productIntroduction VARCHAR(50),
	productPrice INT,
	productSize VARCHAR(50),
	productPhoto LONGBLOB,
	productDate DATE,
	productInformation VARCHAR(50)
	product_check VARCHAR(50))";

// $sqlQuery = "CREATE TABLE user_table (
//     firstName VARCHAR(50),
// 	lastName VARCHAR(50),
// 	age INT UNSIGNED,
// 	studentId VARCHAR(50),
// 	userpassword VARCHAR(50),
// 	email VARCHAR(50),
// 	address VARCHAR(50))";

if($connection->query($sqlQuery) === TRUE){
        echo "成功建立產品資料表。";
} else {
        echo "執行失敗:" . $connection->error;
}

$connection->close();

?>

