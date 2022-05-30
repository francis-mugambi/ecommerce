<?php


include "config.php";
if ($_SERVER['REQUEST_METHOD']=="POST") {

    $firstName = $_REQUEST["firstName"];
    $secondName = $_REQUEST["secondName"];
    $emailAddress = $_REQUEST["emailAddress"];
    $phoneNumber = $_REQUEST["phoneNumber"];
    $password = $_REQUEST["password"];




// insert
    if(empty($firstName)|empty($secondName)|empty($emailAddress)|empty($phoneNumber)|empty($password)){
        header("location:customer_reg.php?error=All the fields must be filled")
        exit();
    }
    
    $sql = "INSERT INTO `customer`(`firstName`, `secondName`, `emailAddress`, `phoneNumber`, `password`) VALUES ('$firstName','$secondName','$emailAddress','$phoneNumber','$password')";


    $results = mysqli_query($link, $sql);


    if ($results) {
        echo "<p class='alert alert-success'>Records have been Added</p>";

    } else {
        echo "<p class='alert alert-success'>Error Excuting querry $sql</p>" . mysqli_error($link);
    }
}