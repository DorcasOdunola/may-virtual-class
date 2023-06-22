<?php
    require realpath("vendor/autoload.php");
    $dotenv = Dotenv\dotenv::createImmutable(__DIR__);
    $dotenv->load();

    // $host = "localhost";
    // $username = "root";
    // $dbname = "virtual_class";
    // $password = "";
    $host = $_ENV['HOST'];
    $username = $_ENV['USERNAME'];
    $dbname = $_ENV['DBNAME'];
    $password = $_ENV['PASSWORD'];

    $connectDb = mysqli_connect($host, $username, $password, $dbname);
    if ($connectDb->error) {
        die ("An error occured". $connectDb->error);
    }

?>