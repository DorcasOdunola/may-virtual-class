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
                <div class="col-7 mx-auto shadow">
                    <div class="row">
                        <div class="col-6 bg-dark text-white">
                            <h5 class="mb-3">Welcome to Your Store</h5>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ad tenetur, veritatis deleniti voluptatem exercitationem veniam perspiciatis sapiente officia atque rem voluptates at non praesentium impedit! Dolorum rem animi incidunt.
                            </p>
                        </div>
                        <div class="col-6 p-3">
                        <?php
                            if (isset($_POST['submit'])) {
                                require "dbCrend.php";
                                $email = $_POST['email'];
                                $password = $_POST['password'];

                                $query = "SELECT * FROM store WHERE email = '$email'";
                                    $insert = $connectDb->query($query);
                                // $insert = mysqli_query($connectDb, $query);
                                if ($insert->num_rows == 0) {
                                    echo "<div class='alert alert-danger'>Incorrect Email! </div>";
                                } else {
                                    $store = $insert->fetch_assoc();
                                    $hashedPassword = $store['password'];
                                    $verify_password = password_verify($password, $hashedPassword);
                                    if ($verify_password) {
                                        echo "<div class='alert alert-success'>You are signed In Succesfully</div>";
                                    } else {
                                        echo "<div class='alert alert-danger'>Incorrect Password!</div>";
                                    }
                                }
                            }
    

                        ?>
                            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                                <input type="email" placeholder="Store's Email" name="email" class="form-control mb-2">
                                <input type="text" placeholder="Store's Password" name="password" class="form-control mb-2">
                                <button class="btn btn-outline-dark" type="submit" name="submit">Sign In</button>
                                <!-- <input type="submit" value="Submit" name="Submit"> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </body>
</html>
