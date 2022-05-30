<?php
session_start();
?>
<?php


include "config.php";
if ($_SERVER['REQUEST_METHOD']=="POST") {

    $emailAddress = $_REQUEST["emailAddress"];
    $password = $_REQUEST["password"];
   
//allow login
    $sql1 = "SELECT * FROM users WHERE emailAddress='$emailAddress' AND password ='$password' ";
     
      $result1 = mysqli_query($link, $sql1);
    

// Validate
    if(empty($emailAddress) | empty($password)){
        header("location:customer_login.php?error=All the fields must be filled");
        exit();
    }
    if((mysqli_num_rows($result1) > 0) == False){
     header("Location: customer_login.php?error=Invalid email or password!");
      exit();
    }
    if(mysqli_num_rows($result1) > 0){
     $_SESSION['login'] = $emailAddress;
     header("Location: customer_dashboard.php");
      exit();
    }
    mysqli_close($link);

    
    
}