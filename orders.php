
<?php

include "admn.php";
?>

<div class="row m-2 p-2">
    <div class="col-4 ">
        <p class="h3 grey"> Orders</p>
    </div>
    <div class="col-8">
        <!-- Button trigger modal -->
        <button type="button" class="m-1 btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
           Add Orders
        </button>
        <a href= "getreport.php" class="m-1 btn btn-danger float-end">Get Report</a>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-center modal-title" id="exampleModalLabel">ADD Order</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="Add_customer.php" method="POST" enctype="multipart/form-data">
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <label class="form-label grey">firstName</label>
                                    <input class="form-control" type="text" name="firstName" placeholder="">
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <label class="form-label grey">secondName</label>
                                    <input class="form-control" type="text" name="secondName" placeholder="">
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <label class="form-label grey">Email Address</label>
                                    <input class="form-control" type="text" name="emailAddress">
                                </div>
                            </div>
                             <div class="row p-2">
                                <div class="col-md-12">
                                    <label class="form-label grey">phoneNumber</label>
                                    <input class="form-control" type="text" name="phoneNumber">
                                </div>
                            </div> 
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <label class="form-label grey">Password</label>
                                    <input class="form-control" type="password" name="password">
                                </div>
                            </div>                       
                              
                          <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" name="submit" class="col-6 btn btn-outline-danger" value="SUBMIT">
                           </div>

                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "config.php";
$sql = "SELECT * FROM `orders`";
$results = mysqli_query($link,$sql);

if ($results){
    $data =mysqli_num_rows($results);
    if ($data>0){
        echo "<table class='table table-striped table-hover'>
          <tr>
         
          <th>Order Name</th>
          <th>Order Description</th>
          <th>Order Price</th>
          <th>Order Person</th>
          
         
          </tr>";
          while ($row =mysqli_fetch_array($results)) {
              echo "<tr>";
           
              echo "<td>" . $row['order_name'] . "</td>";
              echo "<td>" . $row['order_description'] . "</td>";
              echo "<td>" . $row['order_price'] . "</td>";
              echo "<td>" . $row['order_person'] . "</td>";
             
             
            echo "</tr>";

          }
          echo "</table>";
    }else{
        echo "<p class = 'alert alert-primary'>No Record found in the database</p>";
    }
}
?>