<?php
// echo "hii";
require "php/db_connection.php";
// echo "hello";
if($con){
    $query = "SELECT * FROM cashier";
    $result = mysqli_query($con, $query);

}
// else{
//   echo "hi";
  
// }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manage Cashier</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/home.css">
    <!-- <script src="js/manage_manager.js"></script>
    <script src="js/validateForm.js"></script>
    <script src="js/restrict.js"></script> -->
  </head>
  <body style="max-height: 100%;">
    <!-- including side navigations -->
    <?php include("sections/admin_sidenav.html"); ?>

    <div class="container-fluid">
      <div class="container">

        <!-- header section -->
        <?php
          require "php/header.php";
          createHeader('handshake', 'Manage Cashier', 'Manage Existing Cashier');
        ?>
        <!-- form content -->
        <div class="row">


          <div class="col col-md-12">
            <hr class="col-md-12" style="padding: 0px; border-top: 2px solid  #02b6ff;">
          </div>

          <div class="col col-md-12 table-responsive">
            <div class="table-responsive">
            	<table class="table table-bordered table-striped table-hover">
            		<thead>
            			<tr>
                  <!-- <th style="width: 2%;">SL.</th> -->
                  <th style="width: 10%;">cashier ID</th>
                  <th style="width: 13%;">First Name</th>
                  <th style="width: 13%;">Last Name</th>
                  <th style="width: 13%;">Contact</th>
                  <th style="width: 17%;">Address</th>
                  <th style="width: 13%;">Email</th>
                  <th style="width: 17%;">Staff ID</th>
                  <!-- <th style="width: 13%;">Username</th> -->
                  <th style="width: 13%;">Date</th>
                  <th style="width: 15%;">Action</th>
            			</tr>
            		</thead>
            		<tbody id="">
                <?php 
                    
                  while ($rows = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                      <td><?php echo $rows['cashier_id'] ?></td>
                      <td><?php echo $rows['first_name'] ?></td>
                      <td><?php echo $rows['last_name'] ?></td>
                      <td><?php echo $rows['phone_no'] ?></td>
                      <td><?php echo $rows['address'] ?></td>
                      <td><?php echo $rows['email'] ?></td>
                      <td><?php echo $rows['staff_id'] ?></td>
                      <td><?php echo $rows['date_registered'] ?></td>
                      <td>
                        
                        
                        <form style="display: inline-block;" method="post" action="delete_cashier.php">
                          <input type="hidden" name="cashier_id" value="<?php echo $rows['cashier_id'] ?>">
                          <button class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                          </button>
                        </form>
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
            		</tbody>
            	</table>
            </div>
          </div>

        </div>
        
        <hr style="border-top: 2px solid #ff5252;">
        
      </div>
    </div>
  </body>
</html>