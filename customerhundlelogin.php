<?php


include "config.php";

//session_start();

//check if user is logged in using sessions
//if (isset($_SESSION["loggedin"]) and $_SESSION["loggedin"]==true){
//
//header("location:dashboard.php");
// exit()
//}


//session_start();


if (isset($_POST['customer_login'])) {
    $userEmail = $_POST["emailAddress"];
    $userPassword = $_POST["password"];
// compare
    $sql = "SELECT * FROM `customer_table` WHERE  emailAddress='$userEmail'";
    $result = mysqli_query($link, $sql);
    if ($result) {
        $data = mysqli_num_rows($result);
        if ($data == 1) {
            while ($row = mysqli_fetch_array($result)) {
                $id = $row['ID'];
                $firstName = $row["firstname"];
                $secondName = $row["secondName"];
                $phoneNumber = $row["phoneNumber"];
        
                $password = $row["password"];
// verify the password
                if (password_verify($userPassword, $password)) {
                    if ($row["usertype"] == "nuser") {

                        $_SESSION["loggedin"] = true;
                        $_SESSION["ID"] = $ID;
                        $_SESSION["username"] = $firstName;

                        $_SESSION["usertype"] = $user_type;
                        header("location:dashboard.php");

                    } elseif ($row["usertype"] == "customer") {

                        $_SESSION["loggedin"] = true;
                        $_SESSION["ID"] = $ID;
                        $_SESSION["username"] = $firstName;
                        header("location:dashboard.php");
                    } else {
                        echo "Please ask admin to assign you a usertype";

                    }

                } else {
                    echo "Passwords are not matching";
                }
            }
        } else {
            echo "No such email address found";
        }
    }
}
