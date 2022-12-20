<?php

require_once("dbtools.inc.php");

$link = create_connection();
$sql = "SELECT fullName,department,phone_number,personal_introduce,email FROM user_information_table";
$result = execute_sql($link,"Business_Website",$sql);
if(mysqli_num_rows($result) > 0){
    while($row = $result->fetch_row()){
        $name = $row[0];
        $department = $row[1];
        $phone = $row[2];
        $introduce = $row[3];
        $email = $row[4];
    }
}
if ($link->mysqli_connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

