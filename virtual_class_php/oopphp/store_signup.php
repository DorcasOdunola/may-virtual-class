<?php
    require "classes/Store.php";


    $name = "Temidayo Stores";
    $address ="Ogun";
    $email = "temidayo@gmail.com";
    $phone_number = "0000000000";
    $password = "temi";
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $store = new Store();
    $insert = $store->saveStore($name, $address, $email, $phone_number, $hashedPassword);
    if ($insert) {
        echo "success";
    } else {
        echo "unsuccessful";
    }

?>





