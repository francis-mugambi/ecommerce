<?php


include "config.php";
if (isset($_POST["register"])) {
    $firstName = $_POST["firstName"];
    $secondName = $_POST["secondName"];
    $emailAddress = $_POST['emailAddress'];
    $password = $_POST['password'];
 


// Validate
    if (strlen($password) < 6) {
        $passError = "Password must have more than 6 characters";
        echo $passError;
    } else {
        $storePass = password_hash($password, PASSWORD_DEFAULT);
    }
  
    if (empty($passError) and empty($conPassErr)) {
        $sql = "INSERT INTO `admin_table`(`firstName`, `secondName`, `emailAddress`, `password`)
         VALUES ('$firstName','$secondName','$emailAddress','$password')";


        $result = mysqli_query($link, $sql);

        if($result){

            header("location:Admin_login.php");
        } else {
            echo "Error executing query" . mysqli_error($link);
        }
    }
    mysqli_close($link);
}
?>