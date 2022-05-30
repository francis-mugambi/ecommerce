<?php
session_start();
?>
<?php


include "config.php";
if ($_SERVER['REQUEST_METHOD']=="POST") {

    $emailAddress = $_REQUEST["emailAddress"];
    $password = $_REQUEST["password"];
   
//allow login
     
    $sql1 = "SELECT * FROM users WHERE emailAddress='$emailAddress' AND (password ='$password' AND is_staff=True) ";
     $sql2 = "SELECT * FROM users WHERE emailAddress='$emailAddress' AND password ='$password' ";

      $result1 = mysqli_query($link, $sql1);
      $result2 = mysqli_query($link, $sql2);
    

// Validate
    if(empty($emailAddress) | empty($password)){
        header("location:admin_login.php?error=All the fields must be filled");
        exit();
    }
    if((mysqli_num_rows($result1) > 0) == False){
     header("Location: admin_login.php?error=Invalid email or password!");
      exit();
    }
    if(mysqli_num_rows($result1) > 0){
     $_SESSION['login'] = $emailAddress;
     header("Location: adm_dashboard.php");
      exit();
    }
    if(mysqli_num_rows($result2) > 0){
     header("Location: admin_login.php?error=Please you are not allowed to access  this page!");
      exit();
    }
    mysqli_close($link);

    
    
}

//check if user is logged in using sessions
//if (isset($_SESSION["loggedin"]) and $_SESSION["loggedin"]==true){
//
//header("location:dashboard.php");
// exit()
//}


//session_start();


//if (isset($_POST['Admin_login'])) {

    //$userEmail = $_POST["emailAddress"];
    //$userPassword = $_POST["password"];

// compare
   // $sql = "SELECT * FROM `admin_table` WHERE  emailAddress='$userEmail'";

   // $result = mysqli_query($link, $sql);

  //  if ($result) {

      ///  $data = mysqli_num_rows($result);
//
       // if ($data == 1) {
          //  while ($row = mysqli_fetch_array($result)) {

              //  $ID = $row['ID'];
               // $emailAddress = $row["emailAddress"];
                //$password = $row["password"];
                //$firstName = $row["firstname"];

// verify the password
                //if (password_verify($userPassword, $password)) {
                    
                       // session_start();
                       // $_SESSION["loggedin"] = true;
                       // $_SESSION["ID"] = $ID;
                       // $_SESSION["username"] = $firstName;
                       // header("location:admindashboard.php");
                    

               // } else {
                   // echo "Passwords are not matching";
                //}
          //  }
       // } else {
           /// echo "No such email address found";
       // }
    //}
//}
