<?php

//check if user is logged in.
session_start();

if (!isset($_SESSION["loggedin"]) or  $_SESSION["loggedin"]!==true){
    header("location:dashboard.php");
    exit();
}



include "header.php";
include  "config.php";


if (isset($_GET["ID"]) and !empty($_GET["ID"])) {

    $id = $_GET["ID"];

    $sql = "SELECT * FROM `customer` WHERE ID=$ID";

    $result = mysqli_query($link, $sql);

    if ($result) {

        $data = mysqli_num_rows($result);

        if ($data == 1) {

            $row = mysqli_fetch_array($result);

            $fistName = $row['fistName'];
            $secondName = $row['secondName'];
            $emailAddress = $row['emailAddress'];
            $phoneNumber = $row['phoneNumber'];
          
    ?>
            <div class="row m-2">
            <div class="text-center">
                <p><?php echo "<img class='rounded-circle' src='$filepath' width='100' height='100'>";?> </p>
            </div>
            </div>
            <div class="row m-2">
              <div class="card col-md-5 m-2 p-2">
                  <div class="card-body">

                      <div class="text-center">
                          <div>
                              <label class="form-label h5">firstName</label>
                              <p><?php echo $firstName; ?></p>
                          </div>
                          <hr>
                          <div>
                              <label class="form-label h5">secondName</label>
                              <p><?php echo $secondName; ?></p>
                          </div>
                          <hr>
                          <div>
                              <label class="form-label h5">EMAIL </label>
                              <p><?php echo $emailAddress ; ?></p>
                          </div>
                          <hr>
                          <div>
                              <label class="form-label h5">PHONE NUMBER </label>
                              <p><?php echo $phoneNumber ; ?></p>
                          </div>
                          <hr>
                      </div>

                  </div>
              </div>
              


          </div>




            <?php
        }
    }else{
        echo "Error executing query $sql".mysqli_error($link);
    }
}
?>
