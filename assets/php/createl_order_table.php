<?php

$server = "localhost";
$dbuser = "superu";
$dbpassword = "class100";
$dbname = "Business_Website";

$connection = new mysqli($server, $dbuser, $dbpassword, $dbname);

if($connection->connect_error){
        die("連線失敗:" . $connection->connect_error);
}

$sqlQuery = "CREATE TABLE order_table (
    orderID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	customerName VARCHAR(50),
	customerDepartment VARCHAR(50),
	customerID VARCHAR(50),
    customerEmail VARCHAR(50),
	customerPhone VARCHAR(50),
	customerInfo  VARCHAR(50))";

if($connection->query($sqlQuery) === TRUE){
        echo "成功建立產品資料表。";
} else {
        echo "執行失敗:" . $connection->error;
}

$connection->close();

?>