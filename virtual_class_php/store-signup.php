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
                            <form action="process_store_signup.php" method="post">
                                <?php
                                    session_start ();
                                    // print_r($_SESSION);

                                    if (isset($_SESSION['signup_error'])) {
                                        echo "<div class='alert alert-danger'>". $_SESSION['signup_error']. "</div>";
                                    }

                                    session_destroy();
                                ?>
                                <input type="text" placeholder="Store's Name" name="name" class="form-control mb-2" >
                                <input type="number" placeholder="Store's Phone Number" name="phone_no" class="form-control mb-2">
                                <input type="text" placeholder="Store's Address" name="address" class="form-control mb-2">
                                <input type="email" placeholder="Store's Email" name="email" class="form-control mb-2">
                                <input type="text" placeholder="Store's Password" name="password" class="form-control mb-2">
                                <button class="btn btn-outline-dark" type="submit" name="submit">Sign Up</button>
                                <!-- <input type="submit" value="Submit" name="Submit"> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </body>
</html>
