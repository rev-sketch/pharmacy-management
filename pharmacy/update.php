<?php
$confirmation = false;

require "php/db_connection.php";
    if ($con) {
        $username = $_POST["username"];
        $phone = $_POST["phone"];
        $position = $_POST["position"];

        $query = "SELECT username,role FROM login WHERE username = '$username' AND role = '$position'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
        if ($row) {
            if ($row['role'] == 'pharmacist') {
                $query = "SELECT phone_no FROM pharmacist WHERE phone_no = '$phone'";
                $result = mysqli_query($con, $query);
                $phone_row = mysqli_fetch_array($result);
                if($phone_row){
                    $confirmation = true;
                    header("Location:update-creds.php");
                }
                else{
                    echo "<script>
                    alert('invalid credentials');
                    window.location.href='login.php';
                    </script>";        
                }
                
            }
            else if ($row['role'] == 'admin') {
                $query = "SELECT phone_no FROM admin WHERE phone_no = '$phone'";
                $result = mysqli_query($con, $query);
                $phone_row = mysqli_fetch_array($result);
                if($phone_row){
                    $confirmation = true;
                    header("Location:update-creds.php");
                }
                else{
                    echo "<script>
                    alert('invalid credentials');
                    window.location.href='login.php';
                    </script>";        
                }
            }
            else if ($row['role'] == 'cashier') {
                $query = "SELECT phone_no FROM cashier WHERE phone_no = '$phone'";
                $result = mysqli_query($con, $query);
                $phone_row = mysqli_fetch_array($result);
                if($phone_row){
                    $confirmation = true;
                    header("Location:update-creds.php");
                }
                else{
                    echo "<script>
                    alert('invalid credentials');
                    window.location.href='login.php';
                    </script>";        
                }
            }
            else if ($row['role'] == 'manager') {
                $query = "SELECT phone_no FROM manager WHERE phone_no = '$phone'";
                $result = mysqli_query($con, $query);
                if($phone_row){
                    $confirmation = true;
                    header("Location:update-creds.php");
                }
                else{
                    echo "<script>
                    alert('invalid credentials');
                    window.location.href='login.php';
                    </script>";        
                }
            }
            
        } else {
            
            echo "<script>
            alert('invalid credentials');
            window.location.href='login.php';
            </script>";

        }
    }
?>