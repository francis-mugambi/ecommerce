<?php
include "config.php";

if (isset($_POST["submit"]) and !Empty($_POST["ID"])) {

    $ID = $_POST ["ID"];
    $sql = "DELETE FROM `customer` WHERE ID=$ID";

    $result = mysqli_query($link, $sql);
    if ($result) {
        echo "Record deleted succesfully";
        header("location:select.php");
    } else {
        echo "Error executing query $sql" . mysqli_error($link);
    }
}else{
    echo" Try deleting a record";

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <title>DELETE</title>
</head>
<body>


<div>
    <form action="delete.php" method="post">
        <div>
            <label> Are you sure to delete this record?</label><br>
           
        </div>
        <div>
            <input type="SUBMIT" name="SUBMIT" value="YES">
            <a href="select.php">NO</a>
        </div>
    </form>
</div>
</body>
</html>
