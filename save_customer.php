<?php

include "config.php";
if ($_SERVER['REQUEST_METHOD']=="POST") {

    $firstName = $_REQUEST["firstName"];
    $secondName = $_REQUEST["secondName"];
    $emailAddress = $_REQUEST["emailAddress"];
    $phoneNumber = $_REQUEST["phoneNumber"];
    $password = $_REQUEST["password"];
    $is_staff = $_REQUEST["is_staff"];



// insert
    if(empty($firstName)|empty($secondName)|empty($emailAddress)|empty($phoneNumber)|empty($password)|empty($is_staff)){
        header("location:adm_dashboard.php?error=All the fields must be filled");
        exit();
    }
    
    $sql = "INSERT INTO `users`(`firstName`, `secondName`, `emailAddress`, `phoneNumber`, `password`,`is_staff`) VALUES ('$firstName','$secondName','$emailAddress','$phoneNumber','$password','$is_staff')";


    $results = mysqli_query($link, $sql);


    if ($results) {
        header("location:adm_dashboard.php?error=User added successfuly");
        exit();

    } else {
        echo "<p class='alert alert-success'>Error Excuting querry $sql</p>" . mysqli_error($link);
    }
}
//date_default_timezone_set('Asia/Kolkata');
//$current_date = date('Y-m-d');

//extract($_POST);
  //$sql="INSERT INTO `addcustomer`(`firstName`, `secondName`, `emailAddress`, `phoneNumber`)
         // VALUES  ('$firstName','$secondName','$emailAddress','$phoneNumber')";


 //if ($conn->query($sql) === TRUE) {
      //$_SESSION['success']=' Record Successfully Added';
     //?>
/