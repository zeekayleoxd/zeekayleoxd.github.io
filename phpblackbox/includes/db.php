<?php
    $server = "";
    $username = "";
    $password = "";
    $dbname = "	";

    $conn  = mysqli_connect($server, $username, $password, $dbname);

    if(!$conn){
        die("connection Failed:" .mysqli_connect_error());
    }
?>
