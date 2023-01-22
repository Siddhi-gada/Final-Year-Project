function validateForm() {
  // Get the values of the form fields
  const title = document.getElementById("title").value;
  const description = document.getElementById("description").value;
  const Fees = document.getElementById("Fees").value;
  const courses_image = document.getElementById("courses_image").value;
  const start_date = document.getElementById("start_date").value;
  const end_date = document.getElementById("end_date").value;
  
  // Validate the firstname field
  if (title.trim() === "") {
  alert("Title must be filled out");
  return false;
  }
  
  // Validate the email field
  if (description.trim() === "") {
  alert("Description must be filled out");
  return false;
  }
  
  // Validate the password field
  if (Fees.trim() === "") {
  alert("Fees must be filled out");
  return false;
  }
  
  // Validate the middlename field
  if (courses_image.trim() === "") {
  alert("Courses Image must be filled out");
  return false;
  }
  if (start_date.trim() === "") {
  alert("Start Date name must be filled out");
  return false;
  }

  if (end_date.trim() === "") {
    alert("End Date must be filled out");
    return false;
    }
  
  
  // If all fields are valid, submit the form
  return true;
  }