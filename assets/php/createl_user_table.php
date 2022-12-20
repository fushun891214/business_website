<?php

$server = "localhost";
$dbuser = "superu";
$dbpassword = "class100";
$dbname = "Business_Website";

$connection = new mysqli($server, $dbuser, $dbpassword, $dbname);

if($connection->connect_error){
        die("連線失敗:" . $connection->connect_error);
}

$sqlQuery = "CREATE TABLE user_table (
    firstName VARCHAR(50),
	lastName VARCHAR(50),
	age INT UNSIGNED,
	studentId VARCHAR(50) PRIMARY KEY,
	userpassword VARCHAR(50),
	email VARCHAR(50),
	address VARCHAR(50),
	studentCard LONGBLOB
	user_check VARCHAR(50)) ";

if($connection->query($sqlQuery) === TRUE){
        echo "成功建立使用者資料表。";
} else {
        echo "執行失敗:" . $connection->error;
}

$connection->close();

?>

