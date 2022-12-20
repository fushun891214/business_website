<?php

require_once("dbtools.inc.php");

$link = create_connection();
$sql = "SELECT user_img,fullName,department,phone_number,personal_introduce,email FROM user_information_table";
$result = execute_sql($link,"Business_Website",$sql);
if(mysqli_num_rows($result) > 0){
    while($row = $result->fetch_row()){
        $user_img = $row[0];
        $name = $row[1];
        $department = $row[2];
        $phone = $row[3];
        $introduce = $row[4];
        $email = $row[5];
    }
}
if ($link->mysqli_connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

