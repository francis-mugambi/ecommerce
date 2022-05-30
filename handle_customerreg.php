<?php


include "config.php";
if (isset($_POST["register"])) {
    $firstName = $_POST["firstName"];
    $secondName = $_POST["secondName"];
    $emailAddress = $_POST['emailAddress'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];
    $rpt_password = $_POST['rpt_password'];

     $sql1 = "SELECT * FROM users WHERE emailAddress='$emailAddress' ";
     $sql2 = "SELECT * FROM users WHERE phoneNumber='$phoneNumber' ";

      $result1 = mysqli_query($link, $sql1);
      $result2 = mysqli_query($link, $sql2);


// Validate
    if(empty($firstName)|empty($secondName)|empty($emailAddress)|empty($phoneNumber)|empty($password)){
        header("location:customer_reg.php?error=All the fields must be filled");
        exit();
    }
    if($rpt_password != $password){
         header("location:customer_reg.php?error=The password must be the same as the confirm password!");
    }
    if(mysqli_num_rows($result1) > 0){
     header("Location: customer_reg.php?error=The Email you have entered is aready taken");
      exit();
    }
    if(mysqli_num_rows($result2) > 0){
     header("Location: customer_reg.php?error=The Phone number you have entered is aready taken");
      exit();
    }
    if (strlen($password) < 5) {
        $passError = "Password must have more than 6 characters";
        header("location:customer_reg.php?error=The password must have atleast 5 characters!");
    } else {
        $storePass = password_hash($password, PASSWORD_DEFAULT);
    }
  
    if (empty($passError) and empty($conPassErr)) {
        $sql = "INSERT INTO `users`(`firstName`, `secondName`, `emailAddress`, `password`,`phoneNumber`)
         VALUES ('$firstName','$secondName','$emailAddress','$password','$phoneNumber')";


        $result = mysqli_query($link, $sql);

        if($result){

            header("location:customer_login.php?error=Account created successfully please login!");
        } else {
            echo "Error executing query" . mysqli_error($link);
        }
    }
    mysqli_close($link);
}
?>