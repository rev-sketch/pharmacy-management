<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Dashboard - Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/restrict.js"></script>
</head>

<body>
    <?php include "sections/pharmacist_sidenav.html"; ?>
    <div class="container-fluid">
        <div class="container">
            <!-- header section -->
            <?php
          require "php/header.php";
          createHeader('home', 'Dashboard', 'Home');
        ?>
            <!-- header section end -->

            <!-- form content -->
            <div class="row">
                <div class="row col col-xs-8 col-sm-8 col-md-8 col-lg-8">

                    <?php
              function createSection1($location, $title, $table) {
                require 'php/db_connection.php';

                $query = "SELECT * FROM $table";
                if($title == "Out of Stock")
                  $query = "SELECT * FROM $table WHERE QUANTITY = 0";

                $result = mysqli_query($con, $query);
                $count = mysqli_num_rows($result);


                if($title == "Expired") {
                  // logic
                  $count = 0;
                  while($row = mysqli_fetch_array($result)) {
                    $expiry_date = $row['EXPIRY_DATE'];
                    if(substr($expiry_date, 3) < date('y'))
                      $count++;
                    else if(substr($expiry_date, 3) == date('y')) {
                      if(substr($expiry_date, 0, 2) < date('m'))
                        $count++;
                    }
                  }
                }

                echo '
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="padding: 10px">
                    <div class="dashboard-stats" onclick="location.href=\''.$location.'\'">
                      <a class="text-dark text-decoration-none" href="'.$location.'">
                        <span class="h4">'.$count.'</span>
                        <span class="h6"><i class="fa fa-play fa-rotate-270 text-warning"></i></span>
                        <div class="small font-weight-bold">'.$title.'</div>
                      </a>
                    </div>
                  </div>
                ';
              }
              createSection1('manage_customer_p.php', 'Total Customer', 'customers');
              createSection1('manage_prescription.php', 'Total Prescriptions', 'prescription');
              createSection1('manage_medicine_stock.php', 'Total Medicine', 'medicines');
              // createSection1('manage_medicine_stock.php?out_of_stock', 'Out of Stock', 'medicines_stock');
              // createSection1('manage_medicine_stock.php?expired', 'Expired', 'medicines_stock');
              // createSection1('manage_invoice.php', 'Total Invoice', 'invoices');
            ?>

                </div>

                
            </div>

            <hr style="border-top: 2px solid #ff5252;">

            <div class="row">

                <?php
            function createSection2($icon, $location, $title) {
              echo '
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" style="padding: 10px;">
              		<div class="dashboard-stats" style="padding: 30px 15px;" onclick="location.href=\''.$location.'\'">
              			<div class="text-center">
                      <span class="h1"><i class="fa fa-'.$icon.' p-2"></i></span>
              				<div class="h5">'.$title.'</div>
              			</div>
              		</div>
                </div>
              ';
            }
            createSection2('address-card', 'new_prescription.php', 'Add New Prescription');
            createSection2('handshake', 'add_customer_p.php', 'Add New Customer');
            // createSection2('shopping-bag', 'add_medicine.php', 'Add New Medicine');
            // createSection2('group', 'add_supplier.php', 'Add New Supplier');
            // createSection2('bar-chart', 'add_purchase.php', 'Add New Purchase');
            // createSection2('book', 'sales_report.php', 'Sales Report');
            // createSection2('book', 'purchase_report.php', 'Purchase Report');
          ?>

            </div>
            <!-- form content end -->

            <hr style="border-top: 2px solid #ff5252;">

        </div>
    </div>
</body>

</html>