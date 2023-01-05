function validateForm() {
  // Get the value of the username field
  var emailid = document.forms["form"]["emailid"].value;
  // Get the value of the password field
  var password = document.forms["form"]["password"].value;

  // Validate the username
  if (emailid == "") {
    alert("emaild id must be filled out");
    return false;
  }
 

  // Validate the password
  if (password == "") {
    alert("Password must be filled out");
    return false;
  }



  // If the username and password are not blank, submit the form
  return true;
}
