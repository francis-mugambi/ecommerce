<?php
session_start();

include "config.php";
if (isset($_POST["order"])) {
    $order_name = $_POST["order_name"];
    $order_description = $_POST["order_description"];
    $order_price = $_POST['order_price'];
    $order_person = $_SESSION['login'];
    


// Validate
    if(empty($order_name)|empty($order_description)|empty($order_price)){
        header("location:index.php?error=Order not placed!");
    }
    

        $sql = "INSERT INTO `orders`(`order_name`, `order_description`, `order_price`,`order_person`)
         VALUES ('$order_name','$order_description','$order_price','$order_person')";


        $result = mysqli_query($link, $sql);

        if($result){

            header("location:index.php?error=Order successfully placed!");
        } else {
            echo "Error executing query" . mysqli_error($link);
        }
    
    mysqli_close($link);
}

if (isset($_POST["service"])) {
    $service_type = $_POST["service_type"];
    $service_price = $_POST["service_price"];
    $service_person = $_SESSION["login"];
   
    


// Validate
    if(empty($service_type)|empty($service_person)|empty($service_price)){
        header("location:index.php?error=Order not placed!");
    }
    

        $sql = "INSERT INTO `service_requests`(`service_type`, `service_price`, `service_person`)
         VALUES ('$service_type','$service_price','$service_person')";


        $result = mysqli_query($link, $sql);

        if($result){

            header("location:index.php?error=Service successfully placed!");
        } else {
            echo "Error executing query" . mysqli_error($link);
        }
    
    mysqli_close($link);
}
?>