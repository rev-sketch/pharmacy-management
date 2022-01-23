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
                <form name="login-form" class="login-form" action="update.php" method="post"
                    onsubmit="newvalidate()">
                    <div class="logo">
                        <img src="images/login_logo_23.png" style="width:120px;height:120px;" class="profile" />
                        <h1 class="logo-caption"><span class="tweak">Reset Password</span></h1>
                    </div> <!-- logo class -->
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user text-white"></i></span>
                        </div>
                        <input name="username" type="text" class="form-control" placeholder="Enter Username"
                            onkeyup="validate();" required>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-mobile text-white"></i></span>
                        </div>
                        <input type="text" class="form-control" id="phone" placeholder="Enter mobile number" name="phone" maxlength="10" pattern="[1-9]{1}[0-9]{9}" minlength="10" required>
                    </div> <!-- input-group class -->
                    <div class="form-group">
    <!-- <label for="position">Example select</label> -->
                    <select class="form-control" name="position" style="text-align:center;background-color:#424242;color:#BBBBBB;" id="position">
                        <option value="">Select Position</option>
                        <option value="admin">Admin</option>
                        <option value="manager">Manager</option>
                        <option value="cashier">Cashier</option>
                        <option value="pharmacist">Pharmacist</option>
                    </select>
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-default btn-block btn-custom">Reset</button>
                    </div>
                </form><!-- form close -->

            </div> <!-- cord-body class -->