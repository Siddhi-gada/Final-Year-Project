function validateForm() {
  // Get the values of the form fields
  const title = document.getElementById("title").value;
  const decsription = document.getElementById("decsription").value;
  const image = document.getElementById("image").value;
  
  // Validate the firstname field
  if (title.trim() === "") {
  alert("Title must be filled out");
  return false;
  }
  
  // Validate the email field
  if (decsription.trim() === "") {
  alert("Description must be filled out");
  return false;
  }
    
  // Validate the middlename field
  if (image.trim() === "") {
  alert("Car Image must be filled out");
  return false;
  }
  
  // If all fields are valid, submit the form
  return true;
  }