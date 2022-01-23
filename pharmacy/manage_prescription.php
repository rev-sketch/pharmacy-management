<?php
// echo "hii";
require "php/db_connection.php";
// echo "hello";
if($con){
    $query = "SELECT prescription.prescription_id AS presc_id, medicines.NAME AS med_name, prescription_detail.strength AS strength, prescription_detail.dose AS dose, prescription_detail.quantity AS quantity, prescription_detail.date_generated AS date_gen, customers.NAME AS cust_name
    FROM prescription
    JOIN prescription_detail ON prescription_detail.prescription_id = prescription.prescription_id
    JOIN customers ON customers.ID = prescription.customer_id
    JOIN medicines ON medicines.ID = prescription_detail.medicine_id;";
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
    <title>Manage Prescription</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/manage_prescription.js"></script>
    <script src="js/restrict.js"></script>
  </head>
  <body>
    <!-- including side navigations -->
    <?php include("sections/pharmacist_sidenav.html"); ?>

    <div class="container-fluid">
      <div class="container">

        <!-- header section -->
        <?php
          require "php/header.php";
          createHeader('address-book', 'Manage Prescription', 'Manage Existing Prescription');
        ?>
        <!-- header section end -->

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
                            <!-- <th>SL.</th> -->
                            <th>Prescription Number</th>
                            <th>Medicine Name</th>
                            <th>Strength</th>
                            <th>Dose</th>
                            <th>Quantity</th>
                            <th>Customer Name</th>
                            <th>Date</th>
                            
                            <!-- <th>Net Total</th> -->
                            <!-- <th>Action</th> -->
            			</tr>
            		</thead>
                <tbody id="invoices_div">
                <?php 
                    
                    while ($rows = mysqli_fetch_assoc($result)) {
                  ?>
                      <tr>
                        <td><?php echo $rows['presc_id'] ?></td>
                        <td><?php echo $rows['med_name'] ?></td>
                        <td><?php echo $rows['strength'] ?></td>
                        <td><?php echo $rows['dose'] ?></td>
                        <td><?php echo $rows['quantity'] ?></td>
                        <td><?php echo $rows['cust_name'] ?></td>
                        <td><?php echo $rows['date_gen'] ?></td>
                      </tr>
                    <?php
                    }

                    ?>
                </tbody>
            	</table>
            </div>
          </div>

        </div>
        <!-- form content end -->
        <hr style="border-top: 2px solid #ff5252;">
      </div>
    </div>
  </body>
</html>