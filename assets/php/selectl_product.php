<?php

require_once("dbtools.inc.php");

$link = create_connection();
$sql = "SELECT productName, productIntroduction, productPrice, productSize, productPhoto, productDate, productInformation, product_check FROM product_table";
$result = execute_sql($link,"Business_Website",$sql);

if ($link->mysqli_connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

if(mysqli_num_rows($result) > 0){
    while($row = $result->fetch_row()){
        $name = $row[0];
        $introduce = $row[1];
        $price = $row[2];
        $size = $row[3];
        $photo = $row[4];
        $date = $row[5];
        $info = $row[6];
        $checkP = $row[7];
    }
}
?>

