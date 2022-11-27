<?php

$server = "localhost";
$dbuser = "superu";
$dbpassword = "class100";
$dbname = "class1005";

$connection = new mysqli($server, $dbuser, $dbpassword, $dbname);

if($connection->connect_error){
        die("連線失敗:" . $connection->connect_error);
}

$sqlQuery = "DELETE FROM user_table WHERE id = 1";

if($connection->query($sqlQuery) === TRUE){
        echo "成功刪除資料。";
} else {
        echo "執行失敗:" . $connection->error;
}

$connection->close();

?>


