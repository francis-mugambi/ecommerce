<?php

#connection
include "config.php";
#query
$sql = "SELECT * FROM `customer` ";
#execute query
$result = mysqli_query($link, $sql);

#check
if ($result) {

    $data = mysqli_num_rows($result);
    #is there data here?


    if ($data > 0) {
        echo " < h3>Data here </h3 > ";
        echo "<table > ";
        echo "<tr > ";
        echo "<td > ";
        echo "<th > First Name </th > ";
        echo "<th > Second Name </th > ";
        echo "<th > Email Address </th > ";
        echo "<th > Phone Number </th > ";
        echo "<th > Action</th > ";
        echo "<th > </th > ";


        while ($row = mysqli_fetch_array($result)) {
            echo "<tr > ";
            echo $ID = $row['ID'];
            echo "<td > " . $firstName = $row['firstName'] . "</td > ";
            echo "<td > " . $secondName = $row['secondName'] . "</td > ";
            echo "<td > " . $emailAddress = $row['emailAddress'] . "</td > ";
            echo "<td > " . $phoneNumber = $row['phoneNumber'] . "</td > ";
            echo "<td ><a href = 'delete.php?ID=" . $ID . "' > <button > Delete</button ></a ></td > ";
            echo "<td ><a href = 'update.php?ID=" . $ID . "' ><button > Update</button ></a ></td > ";
            echo "</tr > ";
            echo "</table > ";
            echo "<hr > ";

        }
    } else {
        echo "no records were found in your database!";
    }
} else {
    echo "Error executing your query" . mysqli_error($link);
}



