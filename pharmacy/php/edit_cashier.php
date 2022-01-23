<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<?php
echo "hi";
require "db_connection.php";
echo "hi";
if ($con) {
  echo "hi";
    $cashier_id = $_POST["cashier_id"];
    $fname = ucwords($_POST["fname"]);
    $lname = ucwords($_POST["lname"]);
    $phone = $_POST["phone"];
    $address = ucwords($_POST["address"]);
    $email = $_POST["email"];
    $staff_id = $_POST["staff_id"];
    
    // $query = "UPDATE `cashier` SET `cashier`.`first_name`='$fname', `cashier`.`last_name`='$lname', `cashier`.`phone_no`='$phone', `cashier`.`address`='$address', `cashier`.`email`='$email', `cashier`.`staff_id`='$staff_id' WHERE `cashier`.`cashier_id` = '$cashier_id'";
    $query = "UPDATE `cashier` SET `first_name` = '$fname', `last_name` = '$lname', `phone_no` = '$phone', `address` = '$address', `email` = '$email', `staff_id` = '$staff_id' WHERE `cashier`.`cashier_id` = '$cashier_id'";
    // $query = "UPDATE `cashier` SET `first_name` = 'Ta' WHERE `cashier`.`cashier_id` = '5'";
  
    $result = mysqli_query($con, $query);
    // $row = mysqli_fetch_array($result);
    echo("error". mysqli_error($con)) ;
    echo "Affected rows: " . mysqli_affected_rows($con);

    exit();
    if ($result) {
      echo "<script>
      alert('Updated...');
      window.location.href='../manage_cashier.php';
      </script>";
    }
    else {
      echo "<script>
      alert(Not updated!);
      window.location.href='../manage_cashier.php';
      
      </script>";
    }

}
?>