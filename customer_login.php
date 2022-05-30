<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>REGISTER</title>
    <link rel="stylesheet" href="CSS/dashstyles.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>
<body class="bg-primary">
<div class="container p-4">
    <center><h2 style="width:50%;">Login as customer</h2></center><br>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-5">
                    <img src="images/background.jpg" alt="" width="420" height="400" class="d-inline-block align-text-top">
                </div>
                <div class="col-lg-7">
                    <div class="text-center">

                        <?php  if (isset($_GET['error'])){ ?>
                           <p style="color:red;"><?php echo $_GET['error']; ?></p>
                       <?php } ?>
                        <h4 class="">Welcome to Gkad Electronics Solution!</h4>
                    </div>
                    <form action="customer_verification.php" method="post" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <div>
                                <input class="form-control rounded-pill" type="email" name="emailAddress" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div>
                                <input class="form-control rounded-pill" type="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <input type="submit" name="login" class= "rounded-pill btn btn-primary" href="add_order.php" value="Login">
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <a href="" class="rounded-pill btn btn-danger"> <i class="fa fa-google"></i> Login with Google </a>
                        </div>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="">Forgot password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="customer_reg.php">Create an Acount</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
