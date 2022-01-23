<?php

require "php/db_connection.php";

if ($con) {
  $cashier_id = $_POST['cashier_id'] ?? null;

  if (!$cashier_id) {
    header('Location: manage_cashier.php');
    exit;
  }

  $query = "DELETE FROM `cashier` WHERE cashier_id = '$cashier_id'";
  $result = mysqli_query($con, $query);

  if ($result) {
    header('location:manage_cashier.php');
  }
  else {
    die(mysqli_error($con));
  }
}

?>