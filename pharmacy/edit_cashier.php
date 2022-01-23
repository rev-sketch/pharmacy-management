<?php

require "php/db_connection.php";

$cashier_id = $_POST['cashier_id'];
echo $cashier_id;
$query = "SELECT * FROM cashier WHERE cashier_id='$cashier_id'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);

if (isset($_POST['submit'])) {
    echo "HIII";
    $cashier_id = $_POST["cashier_id"];
    $fname = ucwords($_POST["fname"]);
    $lname = ucwords($_POST["lname"]);
    $phone = $_POST["phone"];
    $address = ucwords($_POST["address"]);
    $email = $_POST["email"];
    $staff_id = $_POST["staff_id"];


echo $cashier_id . "<br>";
echo $fname . "<br>";
echo $lname . "<br>";
echo $phone . "<br>";
echo $address . "<br>";
echo $email . "<br>";
echo $staff_id . "<br>";


    // $query = "UPDATE `cashier` SET `cashier_id` = '$cashier_id',`first_name` = '$fname', `last_name` = '$lname', `phone_no` = '$phone', `address` = '$address', `email` = '$email', `staff_id` = '$staff_id' WHERE `cashier_id` = '$cashier_id'";

    // $query = "UPDATE `cashier` SET first_name = '$fname', last_name = '$lname', address = '$address', email = '$email', staff_id = '$staff_id' WHERE cashier_id = $cashier_id";

    // $query = 'UPDATE cashier SET first_name = "$fname" WHERE cashier_id = "$cashier_id"';

    $host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="pharmacy";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();

    $query = "UPDATE cashier SET first_name = \"newfname\" WHERE cashier_id = \"C1\"";


    if ($stmt = $con->prepare($query)) {
        $stmt->execute();
        $stmt->bind_result($field1, $field2);
        while ($stmt->fetch()) {
            //printf("%s, %s\n", $field1, $field2);
        }
        $stmt->close();
        echo "h11";
        exit();
    }


    $result = mysqli_query($con, $query);
    if(! $result ) {
        die('Could not update data: '. mysqli_error());
        exit();
     }  
    echo("error: ".mysqli_error($con));
    if ($result) {
        echo "<br>" . "HII";
        header('Location: manage_cashier.php');
    }
    else {
        die(mysqli_error($con));
    }
}

?>

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
createHeader('handshake', 'Update Cashier', 'Edit Cashier Details');
// header section end
?>
        <div class="row">
          <div class="row col col-md-6">
            
<div class="container">

<div id="login-form" >
    <div class="card-body">
    <form name="login-form" class="login-form" action="" method="post">
            </div>

            <label for="fname">Cashier Id:</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user icon"></i></span>
                </div>
                <input name="cashier_id" type="text" class="form-control" value="<?php echo $row["cashier_id"] ?>" disabled>
            </div>

            <label for="fname">First Name:</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user icon"></i></span>
                </div>
                <input name="fname" type="text" class="form-control" placeholder="First Name" value="<?php echo $row["first_name"] ?>" required>
            </div>
    
            <label for="lname">Last Name:</label>
            <div class="input-group form-group">
            
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user icon"></i></span>
                </div>
                
                <input name="lname" type="text" class="form-control" placeholder="Last Name" value="<?php echo $row["last_name"] ?>" required>
            </div>

            <label for="phone">Contact Number:</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-mobile"></i></span>
                </div>
                <input type="text" class="form-control" id="phone" placeholder="Enter mobile number" name="phone" maxlength="10" pattern="[1-9]{1}[0-9]{9}" minlength="10" value="<?php echo $row["phone_no"] ?>" required>
            </div>
            <label for="address">Address:</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                </div>
                <input name="address" id = "address" type="text" class="form-control" placeholder="Address" value="<?php echo $row["address"] ?>" required>
            </div>
            <label for="email">Email:</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-envelope icon"></i></span>
                </div>
                <input name="email" id = "email" type="email" class="form-control" placeholder="Email" id="email" value="<?php echo $row["email"] ?>" required>
            </div>
            <label for="staff_id">Staff ID:</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-id-card-o"></i></span>
                </div>
                <input name="staff_id" id = "staff_id" type="text" class="form-control" placeholder="Staff Id" value="<?php echo $row["staff_id"] ?>" required>
            </div>
            <!-- <label for="username">Username:</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <input name="username" id = "username" type="text" class="form-control" placeholder="Username" required>
            </div> -->
            <!-- <label for="password">Password:</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-key icon"></i></span>
                </div>
                <input name="password" id = "password" type="password" class="form-control" placeholder="password" required>
            </div> -->
            
            <div class="form-group">
            
                <button class="btn btn-default btn-block btn-custom" style="background-color:blue;color:white;" type="submit" name="submit">UPDATE</button>

            </div>
        </form><!-- form close -->

          </div>
        </div>
        <hr style="border-top: 2px solid #ff5252;">
      </div>
    </div>
  </body>
</html>