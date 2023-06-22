<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto shadow">
                    <!-- getcomposer.org -->
                    <div class="row">
                        <div class="col-6 bg-warning text-white">
                            <h5 class="mb-3">Welcome to Your Store</h5>
                            <?php
                                session_start();
                                require "dbCrend.php";
                                $store_id = $_SESSION['store_id'];

                                $query = "SELECT * FROM products WHERE store_id = ?";
                                $prepareQuery = $connectDb->prepare($query);
                                $bind_param = $prepareQuery->bind_param('i', $store_id);
                                $execute = $prepareQuery->execute();
                                $getProducts = $prepareQuery->get_result();
                                while ($product = $getProducts->fetch_assoc()) {
                                    $url = "uploads/".$product['picture'];
                                    echo "<div class='shadow'>
                                        <p>" .$product['name']. $product['price']. $product['quantity']."</p>
                                        <img src='$url' style='width: 100px; height: 100px;'>
                                    </div></br>";
                                
                                    } 

                            ?>
                        </div>
                        <div class="col-6 p-3">
                            <form action="add_product.php" method="post" enctype="multipart/form-data">
                                <?php
                                    
                                    if (isset($_SESSION['product_status'])) {
                                        echo "<div class='alert alert-warning'>". $_SESSION['product_status']. "</div>";
                                    }

                                   unset($_SESSION['product_status']);


                                ?>
                                <h4>ADD PRODUCT</h4>
                                <input type="text" placeholder="Product name" name="product_name" class="form-control mb-2" >
                                <input type="text" placeholder="Product Description" name="product_desc" class="form-control mb-2">
                                <input type="number" placeholder="Quantity" name="quantity" class="form-control mb-2">
                                <input type="text" placeholder="Price" name="price" class="form-control mb-2">
                                <input type="file" name="product_pic" class="form-control mb-2">

                                <button class="btn btn-outline-dark" type="submit" name="submit">Add Product</button>
                                <!-- <input type="submit" value="Submit" name="Submit"> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </body>
</html>
