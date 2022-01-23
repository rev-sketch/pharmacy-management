function deletePharmacist(pharmacist_id) {
  var confirmation = confirm("Are you sure?");
  if(confirmation) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if(xhttp.readyState = 4 && xhttp.status == 200)
        document.getElementById('pharmacist_div').innerHTML = xhttp.responseText;
    };
    xhttp.open("GET", "php/manage_pharmacist.php?action=delete&pharmacist_id=" + pharmacist_id, true);
    xhttp.send();
  }
}

function editPharmacist(pharmacist_id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if(xhttp.readyState = 4 && xhttp.status == 200)
      document.getElementById('pharmacist_div').innerHTML = xhttp.responseText;
  };
  xhttp.open("GET", "php/manage_pharmacist.php?action=edit&pharmacist_id=" + pharmacist_id, true);
  xhttp.send();
}

function updatePharmacist(pharmacist_id) {
  // var customer_name = document.getElementById("customer_name");
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");

  // var contact_number = document.getElementById("customer_contact_number");
  var phone = document.getElementById("phone");

  // var customer_address = document.getElementById("customer_address");
  var address = document.getElementById("address");

  // var doctor_name = document.getElementById("customer_doctors_name");
  var email = document.getElementById("email");
  // var doctor_address = document.getElementById("customer_doctors_address");
  var username = document.getElementById("username");
  var password = document.getElementById("password");
  if(!validateName(fname.value, "name_error"))
    customer_name.focus();
  // else if(!validateContactNumber(contact_number.value, "contact_number_error"))
  //   contact_number.focus();
  // else if(!validateAddress(customer_address.value, "address_error"))
  //   customer_address.focus();
  // else if(!validateName(doctor_name.value, 'doctor_name_error'))
  //   doctor_name.focus();
  // else if(!validateAddress(doctor_address.value, 'doctor_address_error'))
  //   doctor_address.focus();
  else {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if(xhttp.readyState = 4 && xhttp.status == 200)
        document.getElementById('pharmacist_div').innerHTML = xhttp.responseText;
    };
    xhttp.open("GET", "php/manage_pharmacist.php?action=update&pharmacist_id=" + pharmacist_id + "&fname=" + fname.value + "&lname=" + lname.value + "&phone=" + phone.value + "&address=" + address.value + "&email=" + email.value + "&username=" + username.value + "&password=" + password.value, true);
    xhttp.send();
  }
}

function cancel() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if(xhttp.readyState = 4 && xhttp.status == 200)
      document.getElementById('pharmacist_div').innerHTML = xhttp.responseText;
  };
  xhttp.open("GET", "php/manage_pharmacist.php?action=cancel", true);
  xhttp.send();
}

function searchPharmacist(text) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if(xhttp.readyState = 4 && xhttp.status == 200)
      document.getElementById('pharmacist_div').innerHTML = xhttp.responseText;
  };
  xhttp.open("GET", "php/manage_pharmacist.php?action=search&text=" + text, true);
  xhttp.send();
}