<?php

$server = "localhost";
$dbuser = "superu";
$dbpassword = "class100";
$dbname = "Business_Website";

$connection = new mysqli($server, $dbuser, $dbpassword, $dbname);

if($connection->connect_error){
        die("連線失敗:" . $connection->connect_error);
}

$sqlQuery = "CREATE TABLE user_information_table (
        fullname VARCHAR(50),
	personal_introduce VARCHAR(50),
	department VARCHAR(50),
	phone_number VARCHAR(50) PRIMARY KEY,
	email VARCHAR(50)) ";

if($connection->query($sqlQuery) === TRUE){
        echo "成功建立使用者個資資料表。";
} else {
        echo "執行失敗:" . $connection->error;
}

$connection->close();

?>

