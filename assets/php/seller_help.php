<?php
        require_once('assets/php/dbtools.inc.php');
        $link = create_connection();
        $sqlQuery = "SELECT Question,Answer FROM QA_table";
        $result = execute_sql($link, "Business_Website", $sqlQuery);

        if ($link->mysqli_connect_error) {
                die("Connection failed: " . mysqli_connect_error());
        }
        if(mysqli_num_rows($result) > 0){
                while($row = $result->fetch_row()){
                echo "<br>$row[0]<br>";
                echo "<br>$row[1]<br>";
                
                }
                $result->close();
        }

        $connection->close($link);
?>
