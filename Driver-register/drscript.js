
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
    if (aadharcard == "" && pancard == "" && drivinglicense == "") {
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
    // Address validation
    var address = document.forms["registrationForm"]["address"].value;
    if (address == "") {
      alert("Address field is required");
      return false;
    }
    // City validation
    var city = document.forms["registrationForm"]["city"].value;
    if (city == "") {
      alert("City field is required");
      return false;
    }
    // State validation
    var state = document.forms["registrationForm"]["state"].value;
    if (state == "") {
      alert("State field is required");
      return false;
    }
}