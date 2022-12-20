<?php

$server = "localhost";
$dbuser = "superu";
$dbpassword = "class100";
$dbname = "Business_Website";

$connection = new mysqli($server, $dbuser, $dbpassword, $dbname);

if($connection->connect_error){
        die("連線失敗:" . $connection->connect_error);
}

$sqlQuery = "DELETE FROM product_table WHERE id = 1";

if($connection->query($sqlQuery) === TRUE){
        echo "成功下架商品。";
} else {
        echo "執行失敗:" . $connection->error;
}

$connection->close();

?>


