<?php

$server = "localhost";
$dbuser = "superu";
$dbpassword = "class100";
$dbname = "Business_Website";

$connection = new mysqli($server, $dbuser, $dbpassword, $dbname);

if($connection->connect_error){
        die("連線失敗:" . $connection->connect_error);
}

$sqlQuery = "CREATE TABLE QA_table (
    QuestionID INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        Question VARCHAR(50),
        Answer VARCHAR(100))";


if($connection->query($sqlQuery) === TRUE){
        echo "成功建立QA資料表。";
} else {
        echo "執行失敗:" . $connection->error;
}

$connection->close();

?>

