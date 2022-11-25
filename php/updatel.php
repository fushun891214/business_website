<?php

$server = "localhost";
$dbuser = "superu";
$dbpassword = "class100";
$dbname = "class1005";

$connection = new mysqli($server, $dbuser, $dbpassword, $dbname);

if($connection->connect_error){
        die("連線失敗:" . $connection->connect_error);
}

$sqlQuery = "UPDATE user_table SET name= '許老師', age= 50 WHERE id = 1";

if($connection->query($sqlQuery) === TRUE){
        echo "成功更新資料。";
} else {
        echo "執行失敗:" . $connection->error;
}

$connection->close();

?>
