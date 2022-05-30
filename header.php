<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>REGISTER</title>
    <link rel="stylesheet" href="CSS/dashstyles.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>
<body>
<header id="header" class="fixed-top d-flex align-items-center bg-primary ">
    <div class="container d-flex bg-primary">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="images/comp1.jpg" alt="" width="100" height="80" class="d-inline-block align-text-top">
                </a>
                <a class="navbar-brand" href="#">
                    <br>GKaD Electronics <br>Solutions
                </a>
            </div>
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active " href="#hero">Home</a></li>
                        <li><a class="nav-link active" href="#about">About</a></li>
                        <li><a class="nav-link active" href="#services">Services</a></li>
                        <li><a class="nav-link active " href="#products">Products</a></li>
                        <li><a class="nav-link active" href="#team">Team</a></li>
                        <li><a class="nav-link active" href="#contact">Contact</a></li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle float-end" href="#" id="navbarDropdownMenuLink"  role="button"  data-bs-toggle="dropdown" aria-expanded="false" >
                                Log in
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="Admin_login.php">Admin</a></li>
                                <li><a class="dropdown-item" href="customer_login.php">Customer</a></li>
                            </ul>
                        </li>



                    </ul>

                </div>

            </div>


        </nav><!-- .navbar -->
    </div>
</header>
</body>

</html>