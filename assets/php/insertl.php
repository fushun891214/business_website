<?php

$server = "localhost";
$dbuser = "superu";
$dbpassword = "class100";
$dbname = "business_website";

$connection = new mysqli($server, $dbuser, $dbpassword, $dbname);

if($connection->connect_error){
        die("連線失敗:" . $connection->connect_error);
}

$sqlQuery = "INSERT INTO user_table (firstName,lastName,password,age,email,address,username) VALUES ('張老師', 35,"","","","","")";

if($connection->query($sqlQuery) === TRUE){
	$last_id = $connection->insert_id;
        echo "成功新增資料，新資料ID:" . $last_id;
} else {
        echo "執行失敗:" . $connection->error;
}

$connection->close();

?>
