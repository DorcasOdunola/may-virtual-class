<?php
    session_start();

    $host = "localhost";
    $username = "root";
    $dbname = "virtual_class";
    $password = "";

    $connectDb = mysqli_connect($host, $username, $password, $dbname);
    if ($connectDb->error) {
        die ("An error occured". $connectDb->error);
    }

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_no'];
        $password = $_POST['password'];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


        $query = "INSERT INTO store (`name`, `address`, `email`, `phone_number`, `password`) VALUES ('$name', '$address', '$email', '$phone_number', '$hashedPassword')";
        $insert = $connectDb->query($query);
        if ($insert) {
            header("Location: store_signin.php");
        } else {
            header("Location: store-signup.php");
            $_SESSION["signup_error"] = "Email already exist!";
        }
    } 



?>