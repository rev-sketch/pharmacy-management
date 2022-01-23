<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Pharmacy Management - Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/index.css">
    <!-- <script src="js/index.js"></script> -->
    <script src="js/login.js"></script>
    <!-- <script src="js/validateForm.js"></script> -->
    <!-- <script>
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState = 4 && xhttp.status == 200)
            xhttp.responseText;
    };
    xhttp.open("GET", "php/db_connection.php?action=is_logged_in", false);
    xhttp.send(); -->

    <!-- //alert(xhttp.responseText);
    if (xhttp.responseText == "")
        window.location.href = "http://localhost/Pharmacy-Management/index.html";
    if (xhttp.responseText == "true")
        window.location.href = "http://localhost/Pharmacy-Management/home.php";
    </script> -->
</head>
<body>
<div class="container">

    <div id="login-form" class="card m-auto p-2">
        <div class="card-body">
                    <div class="logo">
                        <img src="images/login_logo_23.png" style="width:120px;height:120px;" class="profile" />


<?php
// echo "hi";
require "php/db_connection.php";
// echo "hi";
if ($con) {
    // echo "hi";
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "UPDATE `login` SET `password` = '$password' WHERE `login`.`username` = '$username'";
    $result = mysqli_query($con, $query);
    echo(mysqli_error($con));
        ?>
        <h1 class="logo-caption"><span class="tweak">Password Reset Successfull</span></h1>
        <div class="border border-light p-3 mb-4">
        <div class="text-center">
          <button type="button" class="btn btn-danger"  onclick="window.location.href='login.php';">Login Now</button>
        </div>
      </div>
        </div> 
        <?php
    
}
?>                  
    </div>
    </div>
</div>
</body>
</html>


