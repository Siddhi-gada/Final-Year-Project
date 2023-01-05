function validateCharactersOnly(input) {
  if (isNaN(input.value) && !input.value.match(/[^a-zA-Z ]/g)) {
  // Input is valid (only characters)
  alert("hello");
  return true;
  } else {
  // Input is invalid (contains a number)
  alert("Name should only contain characters (letters)");
  window.close();

  return false;
  }
  }
  function validateName(input) {
    if (input.value.match(/^[a-zA-Z]/)) {
      // Input is valid
      return true;
    }
    else{
      // Input starts with a number
      alert("Email id should not start with a number");
      return true;
    }
      return false;
    }
  
function validateForm() {
  // Get the values of the form fields
  const firstname = document.getElementById("firstname").value;
  const middlename = document.getElementById("middlename").value;
  const lastname = document.getElementById("lastname").value;
  const phone = document.getElementById("phone").value;
  const address = document.getElementById("address").value;
  const emailid = document.getElementById("emailid").value;
  const password = document.getElementById("password").value;
  
  // Validate the firstname field
  if (firstname.trim() === "") {
  alert("Firstname must be filled out");
  return false;
  }

  // Validate the email field
  if (emailid.trim() === "") {
  alert("Email must be filled out");
  return false;
  }
  
  // Validate the password field
  if (password.trim() === "") {
  alert("Password must be filled out");
  return false;
  }
  
  // Validate the middlename field
  if (middlename.trim() === "") {
  alert("Middle must be filled out");
  return false;
  }
  if (lastname.trim() === "") {
  alert("Last name must be filled out");
  return false;
  }

  if (phone.trim() === "") {
    alert("Phone must be filled out");
    return false;
    }
  
    if (emailid.trim() === "") {
      alert("Email Id must be filled out");
      return false;
      }
    
  
  
  if (address.trim() === "") {
  alert("Address must be filled out");
  return false;
  }

    // If all fields are valid, submit the form
    return true; 
  }

