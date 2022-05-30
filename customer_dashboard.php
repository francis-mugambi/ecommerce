<?php
session_start();
?>
<?php
    include "customer_header.php";
?>


<section>
    <div class="row m-2 p-2 ">
         <div class="col-4 ">
        <p class="h3 grey"> SERVICE DETAILS</p>
        </div>
    <div class="col-8">
        <!-- Button trigger modal -->
       
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-center modal-title" id="exampleModalLabel">My Services</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
              <div class="card-body">
          <div class="input-states">
     <form class="form-horizontal" method="POST" action="save_myservice.php" name="userform" enctype="multipart/form-data">

  <input type="hidden" name="currnt_date" class="form-control" value="<?php echo $currnt_date;?>">

         <div class="form-group">
          <div class="row">
     <label class="col-sm-3 control-label">service  Name</label>
             <div class="col-sm-9">
     <input type="text" name="sname" class="form-control" placeholder="service name" id="event" onkeydown="return alphaOnly(event);" required="">
           </div>
                            </div>
                             </div>

                                      
         <div class="form-group">
                             <div class="row">
             <label class="col-sm-3 control-label">PRIZES</label>
                                <div class="col-sm-9">
             <input type="text" name="prize" class="form-control" placeholder="PRIZES" id="tbprize"   onkeypress="javascript:return isNumber(event)" required="">
                         </div>
                     </div>
                                        </div>
                 </div>



                             
       


<button type="submit" name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                    
</section>
<br><br>
<span class="bg-info mt-5 p-5 text-white"> My service Requests
<?php
include "Config.php";
$user = $_SESSION['login'];
$sql = "SELECT * FROM users WHERE emailAddress= '$user' ";
$result = mysqli_query($link, $sql);
if ($total = mysqli_num_rows($result)) {
    echo $total;
}
else{
    echo("No record(s)");
}
?>
</span>
<span class="bg-info mt-5 p-5 text-white">My Orders:
<?php
include "Config.php";
$user = $_SESSION['login'];
$sql = "SELECT * FROM orders WHERE order_person= '$user' ";
$result = mysqli_query($link, $sql);
if ($total = mysqli_num_rows($result)) {
    echo $total;
}
else{
    echo("No record(s)");
}
?>
</span>

<?php
include "Config.php";
$sql = "SELECT * FROM `service_tbl` WHERE 1";
$results = mysqli_query($link,$sql);

if ($results){
    $data =mysqli_num_rows($results);
    if ($data>0){
          echo "<table class='table table-striped table-hover'>
          <tr>
         
          <th>service Name</th>
          <th>Price</th>
          
         
          </tr>";
          while ($row =mysqli_fetch_array($results)) {
              echo "<tr>";
           
              echo "<td>" . $row['S_name'] . "</td>";
              echo "<td>" . $row['price'] . "</td>";
             
              echo "<td>

                    <a class='m-2' href='delete.php?id=".$row['ID']."'><span class='fa fa-trash'></span></a>
                    <a class='m-2' href='update.php?id=".$row['ID']."'><span class='fa fa-pencil'></span></a>
                    <a class='m-2' href='view.php?id=".$row['ID']."'><span class='fa fa-eye'></span></a>

                   </td>";
              echo "</tr>";

          }
    }else{
        echo "<p class = 'alert alert-primary'>No Record found in the database</p>";
    }
}
?>


