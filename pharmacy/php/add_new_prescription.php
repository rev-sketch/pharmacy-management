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
$back = false;
require "db_connection.php";
if ($con) {
    $name = ucwords($_POST["name"]);
    $phone = $_POST["phone"];
    $med_name = $_POST["med_name"];
    $strength = $_POST["strength"];
    $dose = $_POST["dose"];
    $quantity = $_POST["quantity"];
    // $presc_id = $_POST["presc_id"];


    // FETCHING MEDICINE ID 
    $query = "SELECT ID FROM medicines WHERE NAME = '$med_name'";
    $result = mysqli_query($con, $query);
    $med_row = mysqli_fetch_array($result);


    
    $query = "SELECT ID FROM customers WHERE CONTACT_NUMBER = '$phone'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    // echo "row".$row["ID"];
    if (!$row) {
        ?>
      <div class="row">
          <div class="col-md-12" style="background-color: red;margin: 0 auto;color: white">
            <h1 style="text-align: center;">Customer with <?php echo $phone ?> does not exist!</h1>
        </div>
      </div>
      <?php
      exit();
      $back = true;
    }

    $query = "INSERT INTO prescription (customer_id,prescription_id) VALUES ('$row[0]','$med_row[0]')";

    $result = mysqli_query($con, $query);
    
    $last_presc_id = mysqli_insert_id($con);
    
    $query = "INSERT INTO prescription_detail (strength, dose, quantity, medicine_id, prescription_id) VALUES ('$strength', '$dose', '$quantity', '$med_row[0]','$last_presc_id')";

    ?>
    <div class="row">
        <div class="col-md-12" style="background-color: green;margin: 0 auto;">
          <h2 style="text-align: center;">succesfull</h2>
      </div>
    </div>
          <div class="border border-light p-3 mb-4">
            <div class="text-center">
              <button type="button" class="btn btn-success"  onclick="window.location.href='../add_prescription.php';">Back</button>
            </div>
          </div>
          <?php
        }
        exit();
?>
