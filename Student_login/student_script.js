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

    function validatePassword(input) {
      if (input.value.match(/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&-+=()])(?=\\S+$).{8, 20}$/)) {
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
  const emailid = document.getElementById("emailid").value;
  const password = document.getElementById("password").value;
  
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
  

    // If all fields are valid, submit the form
    return true; 
  }

