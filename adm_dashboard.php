<?php
include "admn.php";
?>


<section>
    <div class="row m-2 p-2 ">
    <div class="col-4 ">
        <p class="h3 grey"> CUSTOMERS</p>
    </div>
    <div class="col-8">
        <!-- Button trigger modal -->
        <button type="button" class="m-1 btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
           Add USERS
        </button>
        <a href= "getreport.php" class="m-1 btn btn-danger float-end">Get Report</a>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <span class="text-center"><?php  if (isset($_GET['error'])){ ?>
                           <p style="color:red;"><?php echo $_GET['error']; ?></p>
                       <?php } ?></span>
                    <div class="modal-header">
                        <h5 class="text-center modal-title" id="exampleModalLabel">ADD  USER</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="save_customer.php" method="POST" enctype="multipart/form-data">
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <label class="form-label grey">First Name</label>
                                    <input class="form-control" type="text" name="firstName" placeholder="">
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <label class="form-label grey">Second Name</label>
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
                                    <label class="form-label grey">Phone Number</label>
                                    <input class="form-control" type="text" name="phoneNumber">
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <label class="form-label grey">Password</label>
                                    <input class="form-control" type="password" name="password">
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <label>Select a User</label>
                                    <select  name="is_staff" class="p-1">
                                    <option value="0">Customer</option>
                                    <option value="1">Staff</option>        
                                    </select>
                                </div>
                            </div> 
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="col-6 btn btn-outline-danger" value="SUBMIT">
                            </div>
                        </form>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<br><br>
<span class="bg-info mt-5 p-5 text-white"> No of customers:
<?php
include "Config.php";
$sql = "SELECT * FROM users ";
$result = mysqli_query($link, $sql);
if ($total = mysqli_num_rows($result)) {
    echo $total;
}
else{
    echo("No record(s)");
}
?>
</span>
<span class="bg-info mt-5 p-5 text-white"> No of Orders:
<?php
include "Config.php";
$sql = "SELECT * FROM orders ";
$result = mysqli_query($link, $sql);
if ($total = mysqli_num_rows($result)) {
    echo $total;
}
else{
    echo("No record(s)");
}
?>
</span>
<span class="bg-info mt-5 p-5 text-white"> No of Services:
<?php
include "Config.php";
$sql = "SELECT * FROM services ";
$result = mysqli_query($link, $sql);
if ($total = mysqli_num_rows($result)) {
    echo $total;
}
else{
    echo("No record(s)");
}
?>
</span>