<?php
    session_start();
    require "dbCrend.php";

    $produt_name = $_POST['product_name'];
    $produt_desc = $_POST['product_desc'];
    $produt_quantity = $_POST['quantity'];
    $produt_price = $_POST['price'];
    $store_id = $_SESSION['store_id'];
    $category_id = 2;
    print_r($_FILES);

    $file_name = $_FILES['product_pic']['name'];
    $new_name = time().$file_name;
    $uploadFile = move_uploaded_file($_FILES['product_pic']['tmp_name'], "uploads/".$new_name);

    //prepared statement
    $query = "INSERT INTO products (`name`, price, quantity, product_desc, picture, store_id, category_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $prepareQuery = $connectDb->prepare($query);
    $bindParam = $prepareQuery->bind_param("sssssii", $produt_name, $produt_price, $produt_quantity, $produt_desc, $new_name, $store_id, $category_id);
    $execute = $prepareQuery->execute();
    if ($execute) {
        $_SESSION['product_status'] = "Product Added Successfully.";
        header("Location: products.php");
    } else {
        $_SESSION['product_status'] = "Unable to add Product.";
        header("Location: products.php");
    }

    // $update = "UPDATE products SET product_name = ?, product_price = ?, quantity = ? WHERE product_id = ?";
    // $prepare = $connectDb->prepare($update);
    // $bindParams = $prepare->bind_param("sssi", $product_name, $product_price, $produt_quantity, $product_id)
    // $insert = $prepare->execute()






?>