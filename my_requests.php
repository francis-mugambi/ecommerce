
<?php
session_start();
include "customer_header.php";
?>

<div class="row m-2 p-2">
    <div class="col-4 ">
        <p class="h3 grey"> Services</p>
    </div>
    <div class="col-8">
        <!-- Button trigger modal -->
        
        <a href= "getreport.php" class="m-1 btn btn-danger float-end">Get Report</a>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                       
                       
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include "config.php";
$service_data = $_SESSION['login'];
$sql = "SELECT * FROM `service_requests` WHERE service_person = '$service_data' ";
$results = mysqli_query($link,$sql);

if ($results){
    $data =mysqli_num_rows($results);
    if ($data>0){
        echo "<table class='table table-striped table-hover'>
          <tr>
         
          <th>Service Name</th>
          <th>Service Price</th>
                  
          </tr>";
          while ($row =mysqli_fetch_array($results)) {
              echo "<tr>";
           
              echo "<td>" . $row['service_type'] . "</td>";
              echo "<td>" . $row['service_price'] . "</td>";
                          
            echo "</tr>";

          }
          echo "</table>";
    }else{
        echo "<p class = 'alert alert-primary'>No Record found in the database</p>";
    }
}
?>