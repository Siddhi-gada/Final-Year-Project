function validateForm() {
  // Get the value of the username field
  var emailid = document.forms["form"]["emailid"].value;
  // Get the value of the password field
  var password = document.forms["form"]["password"].value;
  var firstname = document.forms["form"]["firstname"].value;
  var lastname = document.forms["form"]["lastname"].value;
  var middlename = document.forms["form"]["middlename"].value;
  var address = document.forms["form"]["address"].value;
  var phone = document.forms["form"]["phone"].value;

  // Validate the username
  if (emailid == "") {
    alert("emaild must be filled out");
    return false;
  }

 

  // Validate the password
  if (password == "") {
    alert("Password must be filled out");
    return false;
  }

  if (firstname == "") {
    alert("First Name must be filled out");
    return false;
  }
  if (middlename == "") {
    alert("Middle Name must be filled out");
    return false;
  }
  if (lastname == "") {
    alert("Last Name must be filled out");
    return false;
  }
  if (phone == "") {
    alert("Phone number must be filled out");
    return false;
  }
  if (address == "") {
    alert("Address must be filled out");
    return false;
  }
    
  // If the username and password are not blank, submit the form
  return true;
}
