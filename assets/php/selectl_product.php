<?php

require_once("dbtools.inc.php");

$link = create_connection();
$sql = "SELECT productName, productIntroduction, productPhoto FROM product_table";
$result = execute_sql($link,"Business_Website",$sql);

if ($link->mysqli_connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

if(mysqli_num_rows($result) > 0){
    while($row = $result->fetch_row()){
        $name = $row[0];
        $introduce = $row[1];
        $photo = $row[2];
    }
}
?>

