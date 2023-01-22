
  function validateForm() {
    // First name validation
    var firstname = document.forms["registrationForm"]["firstname"].value;
    if (firstname == "") {
      alert("First name field is required");
      return false;
    }
    // Middle name validation
    var middlename = document.forms["registrationForm"]["middlename"].value;
    if (middlename == "") {
      alert("Middle name field is required");
      return false;
    }
    // Last name validation
    var lastname = document.forms["registrationForm"]["lastname"].value;
    if (lastname == "") {
      alert("Last name field is required");
      return false;
    }
    // Date of Birth validation
    var dob = document.forms["registrationForm"]["dob"].value;
    if (dob == "") {
      alert("Date of Birth field is required");
      return false;
    }
    // Gender validation
    var gender = document.forms["registrationForm"]["gender"].value;
    if (gender == "") {
      alert("Gender field is required");
      return false;
    }
    // ID Proof validation
    var aadharcard = document.forms["registrationForm"]["aadharcard"].value;
    var pancard = document.forms["registrationForm"]["pancard"].value;
    var drivinglicense = document.forms["registrationForm"]["drivinglicense"].value;
    if (aadharcard == "" || pancard == "" || drivinglicense == "") {
      alert("ID Proof field is required");
      return false;
    }
    // Phone number validation
    var phone = document.forms["registrationForm"]["phone"].value;
    if (phone == "") {
      alert("Phone number field is required");
      return false;
    }
    // Email validation
    var emailid = document.forms["registrationForm"]["emailid"].value;
    if (emailid == "") {
      alert("Email field is required");
      return false;
    }
    // Work experience validation
    var workExperience = document.forms["registrationForm"]["workExperience"].value;
    if (workExperience == "") {
      alert("Work experience field is required");
      return false;
    }
    var years = document.forms["registrationForm"]["years"].value;
    if (years == "") {
      alert("Work experience field is required");
      return false;
    }
    var certification = document.forms["registrationForm"]["certification"].value;
    if (certification == "") {
      alert("Certificate field is required");
      return false;
    }
    var certificationInput = document.forms["registrationForm"]["certificationInput"].value;
    if (certificationInput == "") {
      alert("certificationInput field is required");
      return false;
    }
    var profileimage = document.forms["registrationForm"]["profileimage"].value;
    if (profileimage == "") {
      alert("Profile Image field is required");
      return false;
    }
}

function toggleInput() {
  var workExperienceInput = document.getElementById("workExperienceInput");
  if (workExperienceInput.style.display === "none") {
    workExperienceInput.style.display = "block";
  } else {
    workExperienceInput.style.display = "none";
  }
}

function CertificateInput() {
  var certificationInput = document.getElementById("certificationInput");
  if (certificationInput.style.display === "none") {
    certificationInput.style.display = "block";
  } else {
    certificationInput.style.display = "none";
  }
}


function validateCharactersOnly(input) {
  if (isNaN(input.value) && !input.value.match(/[^a-zA-Z ]/g)) {
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