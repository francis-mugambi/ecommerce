<?php
include "header.php";
?>


<br>
<br>
<br>
<br>
<br>
<br><br><br>

<main id="main">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div style="position: relative;">
        <img src="images/Gkad.jpg" alt="Chicago"
            style="margin-top: -24px; border:solid gray 2px; width: 100%; max-height:400px">
        <span class="text-info"
            style="position: absolute;top:20%;left:35%;font-size: 25px;"> <span style="font-size: 14px;"><input type="text" placeholder="Search something here..."></span><hr> Welcome
            to askgooglehub</span>
    </div>

    <div class="item">
      <img src="images/Gkad.jpg" alt="Chicago" width="70%" height="400px">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>
    </div>


  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <center> <h4>ABOUT</h4></center>

                <p>Gkad ia a company that offers you affodable services whenever you need it..</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <img src="images/assembling-and-service.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>The best services.</h3>
                    <p class="fst-italic">
                        That will Give you a long term solution
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> High Quality Products.</li>
                        <li><i class="bi bi-check-circle"></i> Less cost.</li>
                        <li><i class="bi bi-check-circle"></i> Free delivary on all products.</li>
                    </ul>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Cards Section ======= -->
    <section id="cards" class="cards">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="card">
                        <img src="images/products/customer%20sert.jpg." class="card-img-top" alt="...">
                        <div class="card-body">

                            <p class="card-text">Ensuaring that our customers are well Served</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="card">
                        <img src="images/products/educating.jpg" class="card-img-top" alt="...">
                        <div class="card-body">

                            <p class="card-text">Educating others</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="card">
                        <img src="images/Gmachine.jpg" class="card-img-top" alt="...">
                        <p class="card-text">Team Building</p>
                    </div>
            </div>

        </div>
    </section><!-- End Cards Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title m-3">
                <center class="btn-primary">  <h2>Services</h2> </center>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box">
                        <form action="record_iteam.php" method="POST">
                        <i class="bi bi-briefcase"></i>
                        <h4><a href="#"><input type="text" name="service_type" value="Repair services" readonly=""></a></h4>
                        <span>Price</span><input type="text" name="service_price" value="900" readonly="">
                        <p>We do repair services of all machines</p>
                         <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          <input type="submit" name="service" value="Request Service" class="btn btn-danger">
                        </form>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <form action="record_iteam.php" method="POST">
                        <i class="bi bi-card-checklist"></i>
                        <h5><a href="#"><input class="text" type="text" name="service_type" value="Hardware Trouble Shooting" readonly=""></a></h5>
                        <span>Price</span><input type="text" name="service_price" value="500" readonly="">
                        <p> we make sure your hardware is well working</p>
                         <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          <input type="submit" name="service" value="Request Service" class="btn btn-danger">
                        </form>
                    </div><br>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <form action="record_iteam.php" method="POST">
                        <i class="bi bi-bar-chart"></i>
                        <h4><a href="#"><input type="text" name="service_type" value="Software Installation" readonly=""></a></h4>
                        <span>Price</span><input type="text" name="service_price" value="800" readonly="">
                        <p>We install softawares at an affortable prices</p>
                         <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          <input type="submit" name="service" value="Request Service" class="btn btn-danger">
                        </form>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <form action="record_iteam.php" method="POST">
                    <div class="icon-box">
                        <form action="record_iteam.php" method="POST">
                        <i class="bi bi-binoculars"></i>
                        <h4><a href="#"><input type="text" name="service_type" value="Sales services" readonly=""></a></h4>
                        <span>Price</span><input type="text" name="service_price" value="500" readonly="">
                        <p>We sell both New and refurbished Labtops and CPU</p>
                         <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                         <input type="submit" name="service" value="Request Service" class="btn btn-danger">
                        </form>
                    </div>
                </form>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

 <br>
  <br>
   <br>


    <!-- ======= Product  Section ======= -->
    <section id="Products" class="products">
        <div class="container">

            <div class="section-title">
                <h2>Products</h2>
                <p>Products that we sell.</p>
                 <?php  if (isset($_GET['error'])){ ?>
                    <p style="color:red;"><?php echo $_GET['error']; ?></p>
                <?php } ?>
            </div>
<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="images/products/6.webp"  alt="Card image cap">
    <div class="card-body">
    <form action="record_iteam.php" method="POST">
      <h5 class="card-title bg-info" ><input type="text" name="order_name" value="HP Elite book" readonly=""> </h5>
      <p class="card-text"><input type="text" name="order_description" value="HP Elite book core-i3" readonly=""></p>
     <span>Price: </span> <span class="card-text"><input type="text" name="order_price" value="2700" readonly=""></span>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <input type="submit" name="order" value="Order" class="btn btn-danger">
    </form>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/products/5.png"  alt="Card image cap">
    <div class="card-body">
    <form action="record_iteam.php" method="POST">
      <h5 class="card-title bg-info" ><input type="text" name="order_name" value="Dell LENOVO" readonly=""> </h5>
      <p class="card-text"><input type="text" name="order_description" value="HP Elite book core-i3" readonly=""></p>
     <span>Price: </span> <span class="card-text"><input type="text" name="order_price" value="2500" readonly=""></span>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <input type="submit" name="order" value="Order" class="btn btn-danger">
    </form>
    </div>
  </div>
 <div class="card">
    <img class="card-img-top" src="images/products/2.png"  alt="Card image cap">
    <div class="card-body">
    <form action="record_iteam.php" method="POST">
      <h5 class="card-title bg-info" ><input type="text" name="order_name" value="Lenovo (Thinkpad)" readonly=""> </h5>
      <p class="card-text"><input type="text" name="order_description" value="Lenovo core-i3" readonly=""></p>
     <span>Price: </span> <span class="card-text"><input type="text" name="order_price" value="3500" readonly=""></span>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <input type="submit" name="order" value="Order" class="btn btn-danger">
    </form>
    </div>
  </div>
</div>
       
    </section>

 <br>
  <br>
   <br>

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="section-title">
                <center class="bg-primary ">
                    <h2>Team</h2>
                </center>

                <p>This is our able team that is resposnsiple for your work</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="images/teams/Founders.jpg" class="img-fluid" alt="">

                        </div>
                        <div class="member-info">
                            <h4>Gilbert & Kagwe & Dickson</h4>
                            <span>Founders</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="images/teams/Dicson.jpg" class="img-fluid" alt="">

                        </div>
                        <div class="member-info">
                            <h4>Dickson Kibet</h4>
                            <span>Admin</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                       <div class="member-img">
                            <img src="images/teams/gilbert.jpg" class="img-fluid" alt="">

                        </div>
                        <div class="member-info">
                            <h4>Olekaka Gilbert</h4>
                            <span>Hardware Technician</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="images/teams/peter.jpg" class="img-fluid" alt="">

                        </div>
                        <div class="member-info">
                            <h4>Peter Kagwe</h4>
                            <span>Software Technician</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

 <br>
  <br>
   <br>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact bg-info section-bg">
        <div class="container bg-info">

            <div class="section-title">
                <center><h2>Contact</h2></center>
                <p>Contact us for the beter services.</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p> Tomboya street, 90420-80100, Mombasa </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>gkard@gmail.com</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>+254 719885775</p>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/dir/-4.0350149,39.6827742/gkad+electronic+solutions/@-4.0426622,39.6655018,16z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0x184013e92825088f:0x6791ed9166a19e77!2m2!1d39.6682065!2d-4.0434771" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6">
                    <form action="contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->




<footer id="footer">
    <div class="bg-info">
        <div class="container">
            <div class="row bg-info">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3>GKaD</h3>
                        <p class="pb-3"><em></em></p>
                        <p>
                            Tom Mboya Street <br>
                            90420, Mombasa<br><br>
                            <strong>Phone:</strong>+254 719 885 775<br>
                            <strong>Email:</strong> gkadelec@gmail.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Hardware Repair</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#"> Software instalation</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Please Subscribe to our newslatter to receive new updates</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>

                </div>

            </div>
        </div>
    </div>
    
    <br><br>
    <div class="container bg-">
        <div class="">
        

              <div class="copyright"> © Copyright <strong><span>GKaD</span></strong>. All Rights Reserved</div>
           
        </div>
    </div>
</footer>
</body>
</html>



