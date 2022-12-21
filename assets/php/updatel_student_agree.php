<?php
$server = "localhost";
$dbuser = "superu";
$dbpassword = "class100";
$dbname = "Business_Website";

$connection = new mysqli($server, $dbuser, $dbpassword, $dbname);

if($connection->connect_error){
        die("連線失敗:" . $connection->connect_error);
}

$sqlQuery = "UPDATE user_table SET user_check= '已通過' WHERE studentID = 08156311";

if($connection->query($sqlQuery) === TRUE){
        echo "成功審核完畢，已通過。";
} else {
        echo "執行失敗:" . $connection->error;
}

$connection->close();

?>
