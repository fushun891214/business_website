<?php

require_once("dbtools.inc.php");

$link = create_connection();

$sql = "SELECT fullName FROM user_information_table";
$result = execute_sql($link,"Business_Website",$sql);

$row = mysqli_fetch_assoc($result);

?>

