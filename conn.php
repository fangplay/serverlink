<?php
    $host = "10.20.5.59";
    $username = "root";
    $password = "";
    $dbname = "alumni";
    
    $conn = mysql_connect($host,$username,$password,$dbname);
    
    if (!$conn){
        echo ("Can't link database server.".mysqli_connect_error());
    }else {
        echo "Connection Completed";
    }
?>
