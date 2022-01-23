isLoggedin = false;

function newvalidate() {
    var uname = document.forms["login-form"]["username"].value;
    var pswd = document.forms["login-form"]["password"].value;
    var position = document.forms["login-form"]["position"].value;
    // console.log(role)
    // alert(uname + pswd + role);
    var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
          if(xhttp.readyState = 4 && xhttp.status == 200)
              isLoggedin = xhttp.responseText;
      };
      xhttp.open("GET", "/home/tarunchakitha/projects/pms/Pharmacy-Management/test.php?action=validateLogin&username=" + uname + "&password=" + pswd, "&position=" + role);
      xhttp.send();
    //   validateCredentials()
    window.location.href = "http://localhost/Pharmacy-Management/index.html";
  }

function validateCredentials() {
    if(isLoggedin == "true"){
    alert("Username or password or role invalid!");
      return true;
    }
    alert(isLoggedin)
    // alert("Username or password or role invalid!");
    return false;
  }
  