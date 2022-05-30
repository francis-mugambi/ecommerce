<?php


include "config.php";
if ($_SERVER['REQUEST_METHOD']=="POST") {

    $S_name = $_REQUEST["S_name"];
    $price = $_REQUEST["price"];
   




// insert

    $sql = "INSERT INTO `service_tbl`( `S_name`, `price`)
     VALUES ('$S_name','$price')";


    $results = mysqli_query($link, $sql);


    if ($results) {
        echo "<p class='alert alert-success'>Records have been Added</p>";

    } else {
        echo "<p class='alert alert-success'>Error Excuting querry $sql</p>" . mysqli_error($link);
    }
}