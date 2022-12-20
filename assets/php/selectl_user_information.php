<?php

require_once("dbtools.inc.php");

$link = create_connection();

$sql = "SELECT fullName,department,personal_introduce FROM user_information_table";
$result = execute_sql($link,"Business_Website",$sql);

if ($link->mysqli_connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

