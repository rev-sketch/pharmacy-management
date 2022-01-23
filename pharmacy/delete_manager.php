<?php

require "php/db_connection.php";

if ($con) {
  $manager_id = $_POST['manager_id'] ?? null;

  if (!$manager_id) {
    header('Location: manage_manager.php');
    exit;
  }

  $query = "DELETE FROM `manager` WHERE manager_id = '$manager_id'";
  $result = mysqli_query($con, $query);

  if ($result) {
    header('location:manage_manager.php');
  }
  else {
    die(mysqli_error($con));
  }
}

?>