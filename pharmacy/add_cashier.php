<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add New Cashier</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/home.css">
    <!-- <script src="js/validateForm.js"></script> -->
    <!-- <script src="js/restrict.js"></script> -->
  </head>
  <body>
    <!-- including side navigations -->
    <?php include "sections/admin_sidenav.html";?>
    <div class="container-fluid">
      <div class="container">
        <!-- header section -->
        <?php
require "php/header.php";
createHeader('handshake', 'Add Cashier', 'Add New Cashier');
// header section end
?>
        <div class="row">
          <div class="row col col-md-6">
            <?php
// form content
//   require "sections/add_new_Cashier.html";
?>
<div class="container">

<div id="login-form" >
    <div class="card-body">
    <form name="login-form" class="login-form" action="php/add_new_cashier.php" method="post">
            </div>
            <label for="fname">First Name:</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user icon"></i></span>
                </div>
                <input name="fname" type="text" class="form-control" placeholder="First Name" required>
            </div>

            <label for="lname">Last Name:</label>
            <div class="input-group form-group">
            
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user icon"></i></span>
                </div>
                
                <input name="lname" type="text" class="form-control" placeholder="Last Name" id required>
            </div>

            <label for="phone">Contact Number:</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-mobile"></i></span>
                </div>
                <input type="text" class="form-control" id="phone" placeholder="Enter mobile number" name="phone" maxlength="10" pattern="[1-9]{1}[0-9]{9}" minlength="10" required>
            </div>
            <label for="address">Address:</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                </div>
                <input name="address" id = "address" type="text" class="form-control" placeholder="Address" required>
            </div>
            <label for="email">Email:</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-envelope icon"></i></span>
                </div>
                <input name="email" id = "email" type="email" class="form-control" placeholder="Email" id="email" required>
            </div>
            <label for="staff_id">Staff ID:</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-id-card-o"></i></span>
                </div>
                <input name="staff_id" id = "staff_id" type="text" class="form-control" placeholder="Staff Id" required>
            </div>
            <label for="username">Username:</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <input name="username" id = "username" type="text" class="form-control" placeholder="Username" required>
            </div>
            <label for="password">Password:</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-key icon"></i></span>
                </div>
                <input name="password" id = "password" type="password" class="form-control" placeholder="password" required>
            </div>
            
            <div class="form-group">
            
                <button class="btn btn-default btn-block btn-custom" style="background-color:blue;color:white;" >ADD</button>

            </div>
        </form><!-- form close -->

          </div>
        </div>
        <hr style="border-top: 2px solid #ff5252;">
      </div>
    </div>
  </body>
</html>