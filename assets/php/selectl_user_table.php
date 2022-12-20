<?php

require_once("dbtools.inc.php");

$link = create_connection();
$sql = "SELECT firstName,lastName,age,studentId,userpassword,email,address,studentCard,userCheck FROM user_information_table";
$result = execute_sql($link,"Business_Website",$sql);
if(mysqli_num_rows($result) > 0){
    while($row = $result->fetch_row()){
        $firstName = $row[0];
        $lastName = $row[1];
        $age = $row[2];
        $studentId = $row[3];
        $userpassword = $row[4];
        $email = $row[5];
        $address = $row[6];
        $studentCard = $row[7];
        $userCheck = $row[8];
    }
}
if ($link->mysqli_connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

?>


