<?php
//check if user is logged in.
session_start();

if (!isset($_SESSION["loggedin"]) or  $_SESSION["loggedin"]!==true){
    header("location:login.php");
    exit();
}



include "header.php";
include "config.php";


if (isset($_POST["update"]) and !empty($_POST["id"])) {

    #updating here

    //pick values
    $id=$_POST["id"];
    $up_firstName = $_POST["firstName"];
    $up_secondName = $_POST["secondName"];
    $up_emailAddress = $_POST["emailAddress"];
    $up_phoneNumber = $_POST["phoneNumber"];
  
   
 
    $up_sql = "UPDATE `customer` SET `firstName`='$up_firstName',`secondName`='$up_secondName',`emailAddress`='up_emailAddress',`phoneNumber`='up_phoneNumber' WHERE ID=$ID";

    $up_result = mysqli_query($link, $up_sql);



    


    if ($up_result) {
        echo "<p class='alert alert-danger'>Record updated successfully!</p>";
        echo  "<a href='admn_dashboard' class='col-md-6 btn btn-primary'> BACK </a>";

    } else {
        echo "error updating record $up_sql" . mysqli_error($link);
    }


} else {

if (isset($_GET["id"]) and !empty($_GET["id"])) {

$id = $_GET["id"];

$sql = "SELECT * FROM `customer_table` WHERE ID=$ID";
$result = mysqli_query($link, $sql);

if ($result) {

$data = mysqli_num_rows($result);

if ($data == 1) {

$row = mysqli_fetch_array($result);

$fullName = $row["firstName"];
$secondName = $row["secondName"];
$emailAddress = $row["emailAddress"];
$phoneNumber = $row['phoneNumber'];


?>

<div class="row m-2">
    <div class="card">
        <div class="card-header text-primary bg-white">UPDATE THE RECORD</div>
        <div class="card-body">
            <form action="update.php" method="post" enctype="multipart/form-data">
                <div class="row m-2 p-2">
                    <div class="col-md-6">
                        <label class="form-label grey">Full Name</label>
                        <input class="form-control" type="text" name="fistName" value="<?php echo $fistName; ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label grey">secondName</label>
                        <input class="form-control" type="text" name="secondName" value="<?php echo $secondName; ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label grey">Email Address</label>
                        <input class="form-control" type="text" name="emailAddress"
                               value="<?php echo $emailAddress; ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label grey">phoneNumber</label>
                        <input class="form-control" type="text" name="phoneNumber"
                               value="<?php echo $phoneNumber; ?>">
                    </div>

                </div>
                
                
                   
                    <div>
                        <input type="hidden" name="ID" value="<?php echo $_GET["ID"]; ?>">
                    </div>

                    <div class="row m-2 p-2">
                        <div class="col-md-6">
                            <input type="submit" name="update" class="col-md-8 btn btn-primary" value="UPDATE">
                        </div>
                        <div class="col-md-6">
                            <a href="adm_dashboard.php" class="col-md-8 btn btn-danger">CANCEL</a>
                        </div>

                    </div>


                </div>
        </div>
    </div>
    <?php
    }


    } else {
        echo "Error executing query $sql" . mysqli_error($link);
    }

    }
    }
    ?>