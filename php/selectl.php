<?php

$server = "localhost";
$dbuser = "superu";
$dbpassword = "class100";
$dbname = "class1005";

$connection = new mysqli($server, $dbuser, $dbpassword, $dbname);

if($connection->connect_error){
  die("連線失敗:" . $connection->connect_error);
}

$sqlQuery = "SELECT name, age FROM user_table";

if($result = $connection->query($sqlQuery)){
   while ($row = $result->fetch_row()){
           printf("%s : %d\n", $row[0], $row[1]);
        }

        $result->close();
} else {
        echo "執行失敗:" . $connection->error;
}

$connection->close();
?>
<?php

