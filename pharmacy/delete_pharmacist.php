<?php

require "php/db_connection.php";

if ($con) {
  $pharmacist_id = $_POST['pharmacist_id'] ?? null;

  if (!$pharmacist_id) {
    header('Location: manage_pharmacist.php');
    exit;
  }

  $query = "DELETE FROM `pharmacist` WHERE pharmacist_id = '$pharmacist_id'";
  $result = mysqli_query($con, $query);

  if ($result) {
    header('location:manage_pharmacist.php');
  }
  else {
    die(mysqli_error($con));
  }
}

?>