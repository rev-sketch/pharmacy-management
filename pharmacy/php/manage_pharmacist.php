<?php
  require "db_connection.php";

  if($con) {
    if(isset($_GET["action"]) && $_GET["action"] == "delete") {
      $pharmacist_id = $_GET["pharmacist_id"];
      $query = "DELETE FROM pharmacist WHERE pharmacist_id = $pharmacist_id";
      $result = mysqli_query($con, $query);
      if(!empty($result))
    		showPharmacists(0);
    }

    if(isset($_GET["action"]) && $_GET["action"] == "edit") {
      $pharmacist_id = $_GET["pharmacist_id"];
      showPharmacists($pharmacist_id);
    }

    if(isset($_GET["action"]) && $_GET["action"] == "update") {
      $pharmacist_id = $_GET["pharmacist_id"];
      $fname = ucwords($_GET["fname"]);
      $lname = ucwords($_GET["lname"]);
      $phone = $_GET["phone"];
      $address = ucwords($_GET["address"]);
      $email = $_GET["email"];
      $staff_id = $_GET["staff_id"];
      $username = $_GET["username"];
      $password = $_GET["password"];
      updatePharmacist($pharmacist_id, $fname, $lname, $phone, $address, $email, $staff_id, $username, $password);
    }

    if(isset($_GET["action"]) && $_GET["action"] == "cancel")
      showPharmacists(0);

    if(isset($_GET["action"]) && $_GET["action"] == "search")
      searchPharmacist(strtoupper($_GET["text"]));
  }

  function showPharmacists($pharmacist_id) {
    require "db_connection.php";
    if($con) {
      $seq_no = 0;
      $query = "SELECT * FROM pharmacist";
      $result = mysqli_query($con, $query);
      while($row = mysqli_fetch_array($result)) {
        $seq_no++;
        if($row['pharmacist_id'] == $pharmacist_id)
          showEditOptionsRow($seq_no, $row);
        else
          showPharmacistRow($seq_no, $row);
      }
    }
  }

  function showPharmacistRow($seq_no, $row) {
    ?>
    <tr>
      <td><?php echo $row['pharmacist_id'] ?></td>
      <td><?php echo $row['first_name']; ?></td>
      <td><?php echo $row['last_name']; ?></td>
      <td><?php echo $row['phone_no']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['staff_id']; ?></td>
      <td><?php echo $row['date_registered']; ?></td>

      <td>
        <button href="" class="btn btn-info btn-sm" onclick="editPharmacist(<?php echo $row['pharmacist_id']; ?>);">
          <i class="fa fa-pencil"></i>
        </button>
        <button class="btn btn-danger btn-sm" onclick="deletePharmacist(<?php echo $row['pharmacist_id']; ?>);">
          <i class="fa fa-trash"></i>
        </button>
      </td>
    </tr>
    <?php
  }

function showEditOptionsRow($seq_no, $row) {
  ?>
  <tr>
    <td><?php echo $seq_no; ?></td>
    <td><?php echo $row['pharmacist_id'] ?></td>
    <td>
      <input type="text" class="form-control" value="<?php echo $row['first_name']; ?>" placeholder="Name" id="customer_name" onkeyup="validateName(this.value, 'name_error');">
      <code class="text-danger small font-weight-bold float-right" id="name_error" style="display: none;"></code>
    </td>
    <td>
      <input type="number" class="form-control" value="<?php echo $row['phone_no']; ?>" placeholder="Contact Number" id="customer_contact_number" onblur="validateContactNumber(this.value, 'contact_number_error');">
      <code class="text-danger small font-weight-bold float-right" id="contact_number_error" style="display: none;"></code>
    </td>
    <td>
      <textarea class="form-control" placeholder="Address" id="customer_address" onblur="validateAddress(this.value, 'address_error');"><?php echo $row['address']; ?></textarea>
      <code class="text-danger small font-weight-bold float-right" id="address_error" style="display: none;"></code>
    </td>
    <td>
      <input type="text" class="form-control" value="<?php echo $row['email']; ?>" placeholder="Doctor's Name" id="customer_doctors_name" onkeyup="validateName(this.value, 'doctor_name_error');">
      <code class="text-danger small font-weight-bold float-right" id="doctor_name_error" style="display: none;"></code>
    </td>
    <td>
      <textarea class="form-control" placeholder="Doctor's Address" id="customer_doctors_address" onblur="validateAddress(this.value, 'doctor_address_error');"><?php echo $row['username']; ?></textarea>
      <code class="text-danger small font-weight-bold float-right" id="doctor_address_error" style="display: none;"></code>
    </td>
    <td>
      <button href="" class="btn btn-success btn-sm" onclick="updatePharmacist(<?php echo $row['pharmacist_id']; ?>);">
        <i class="fa fa-edit"></i>
      </button>
      <button class="btn btn-danger btn-sm" onclick="cancel();">
        <i class="fa fa-close"></i>
      </button>
    </td>
  </tr>
  <?php
}

function updatePharmacist($pharmacist_id, $fname, $lname, $phone, $address, $email, $staff_id, $username, $password) {
  require "db_connection.php";
  $query = "UPDATE pharmacist SET first_name = '$fname', last_name = '$lname', phone_no = '$phone', address = '$address', email = '$email', staff_id = '$staff_id' WHERE ID = '$pharmacist_id'";
  $result = mysqli_query($con, $query);
  if(!empty($result))
    showPharmacists(0);
}

function searchPharmacist($text) {
  require "db_connection.php";
  if($con) {
    $seq_no = 0;
    $query = "SELECT * FROM pharmacist WHERE UPPER(first_name) LIKE '%$text%'";
    $result = mysqli_query($con, $query);
    while($row = mysqli_fetch_array($result)) {
      $seq_no++;
      showPharmacistRow($seq_no, $row);
    }
  }
}

?>