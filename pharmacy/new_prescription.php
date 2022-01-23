<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add New Prescription</title>
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
    <?php
    require "php/db_connection.php";
    include "sections/pharmacist_sidenav.html";?>
    <div class="container-fluid">
      <div class="container">
        <!-- header section -->
        <?php
require "php/header.php";
createHeader('handshake', 'Add Prescription', 'Add New Prescription');
// header section end
?>
        <div class="row">
          <div class="row col col-md-6">
            <?php
// form content
//   require "sections/add_new_manager.html";
?>
<div class="container">

<div id="login-form" >
    <div class="card-body">
    <form name="login-form" class="login-form" action="php/add_new_prescription.php" method="post">
            </div>

            <!-- <label for="username">Prescription ID:</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <input name="presc_id" id = "presc_id" type="text" class="form-control" placeholder="Enter Prescription Id" required>
            </div>
             -->
            <label for="fname">Customer Name:</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user icon"></i></span>
                </div>
                <input name="name" type="text" class="form-control" placeholder="Enter Customer Name" required>
            </div>
            
            <label for="phone">Contact Number:</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-mobile"></i></span>
                </div>
                <input type="text" class="form-control" id="phone" placeholder="Enter mobile number" name="phone" maxlength="10" pattern="[1-9]{1}[0-9]{9}" minlength="10" required>
            </div>
            
            <!-- <hr style="border-top: 2px solid #ff5252;"> -->
            <label for="address">Medicine Name:</label>
            
            <div class="input-group form-group">
            <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-file-medical"></i></span>
                </div>
                <?php
                
                echo"<select  class=\"browser-default custom-select\" name=\"med_name\" style=\"width:170px\" id=\"med_name\">";
                    $getpayType=mysqli_query($con, "SELECT NAME FROM medicines");
                    echo"<option>Select Medicine Name</option>";
                    while($pType=mysqli_fetch_array($getpayType))
                    {
                      echo"<option>".$pType['NAME']."</option>";
                    }
                  
                    echo"</select>";?>
            </div>
       
            <label for="email">Strength:</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-capsules"></i></span>
                </div>
                <input name="strength" id = "strength" type="text" class="form-control" placeholder="Enter Strength" id="email" required>
            </div>
            
            <label for="staff_id">Dose:</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-pills"></i></span>
                </div>
                <input name="dose" id = "dose" type="text" class="form-control" placeholder="Enter Dosage" required>
            </div>

            <label for="username">Quantity:</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-weight"></i></span>
                </div>
                <input name="quantity" id = "quantity" type="text" class="form-control" placeholder="Enter Quantity" required>
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