
<?php

function myValidate()
{
    require "php/db_connection.php";
    if ($con) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $role = $_POST["position"];
        $query = "SELECT * FROM login WHERE username = '$username' AND password = '$password' AND role = '$role'";

        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
        if ($row) {
            
            if ($row['role'] == 'pharmacist') {
                header("Location:pharmacist.php");
            }
            else if ($row['role'] == 'admin') {
                header("Location:admin.php");
            }
            else if ($row['role'] == 'cashier') {
                header("Location:cashier.php");
            }
            else if ($row['role'] == 'manager') {
                header("Location:manager.php");
            }
            
        } else {
            
            echo "<script>
            alert('invalid credentials');
            window.location.href='login.php';
            </script>";

        }

    }
}

function writeMsg() {
    echo "Hello world!";
  }
  

myValidate();