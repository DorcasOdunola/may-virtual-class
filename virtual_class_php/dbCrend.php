<?php
    $host = "localhost";
    $username = "root";
    $dbname = "virtual_class";
    $password = "";

    $connectDb = mysqli_connect($host, $username, $password, $dbname);
    if ($connectDb->error) {
        die ("An error occured". $connectDb->error);
    }

?>