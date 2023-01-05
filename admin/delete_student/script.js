let formIsValid = false;
const form = document.getElementById('form');
const id = document.getElementById('id');
const firstname = document.getElementById('firstname');
const middlename = document.getElementById('middlename');
const lastname = document.getElementById('lastname');
const phone = document.getElementById('phone');
const emailid = document.getElementById('emailid');
const password = document.getElementById('password');
const address = document.getElementById('address');
const register = document.getElementById('register');
const s_delete = document.getElementById('delete');

function showError (input, message) {
  const formControl = input.parentElement;
  formControl.className = 'form-control error';
  let small = formControl.querySelector('small');
  small.innerText = message;

  formIsValid = false;
  return;
}
;
function showSuccess (input) {
  const formControl = input.parentElement;
  formControl.className = 'form-control success';
  formIsValid = true;
}

function checkRequired (inputArr) {
  formIsValid = true ;// reset formIsValid to true before checking inputs
  inputArr.forEach(function (input) {
    if (input.value == '') {
      showError(input, `${getFieldName(input)} is required`);
      formIsValid = false;
      return;
    } else {
      showSuccess(input);
    }
  })
}

function checkLength (input, min, max) {
  if (input.value.length <= min) {
    showError(
      input,
      `${getFieldName(input)} must be more than ${min} characters`
    );
    formIsValid = false;
  } else if (input.value.length >= max) {
    showError(
      input,
      `${getFieldName(input)} must be less than ${max} characters`
    );
    formIsValid = false;
    return
  } else {;
    showSuccess(input)
  }
}

function validatePhoneNumber (input) {
  const phoneNumberRegex = /^\(?\d{3}\)?[-. ]?\d{3}[-. ]?\d{4}$/
  if (phoneNumberRegex.test(input.value)) {
    showSuccess(input);
  } else {
    showError(input, 'Phone number is not valid');
    formIsValid = false;
    return;
  }
}

function checkLength1 (input, min, max) {
  if (input.value.length <= min) {
    showError(input, `${getFieldName(input)} must be more than ${min} number`);
    formIsValid = false;
  } else if (input.value.length >= max) {
    showError(input, `${getFieldName(input)} must be less than ${max} Number`);
    formIsValid = false;
    return;
  } else {
    showSuccess(input);
  };
}

function checkEmail (input) {
  const re =
    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  if (re.test(input.value)) {
    showSuccess(input);
  } else {
    showError(input, 'Email is not valid');
    formIsValid = false;
    return;
  }
}

function confirmDelete() {
  if (confirm("Are you sure you want to delete this Data?")) {
    // Delete the item
    deleteItem();
  } else {
    // Cancel the delete action
    cancelDelete();
    
  }
}
confirmDelete(s_delete);
function cancelDelete() {
  // Go back to the previous page
  window.history.back(-1);
    
}



function getFieldName (input) {
  return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

register.addEventListener('click', function (e) {
  e.preventDefault()

  checkRequired([
    firstname,
    middlename,
    address,
    lastname,
    phone,
    emailid,
    password
  ])
  checkLength(firstname, 3, 15);
  checkLength(middlename, 3, 15);
  checkLength(lastname, 3, 15);
  validatePhoneNumber(phone);
  checkLength(password, 6, 25);
  checkEmail(emailid);
  checkLength(address, 10);
  if (formIsValid) {
    const formData = new FormData(form);
    const url = form.getAttribute('action');
    fetch(url, {
      method: 'POST',
      body: formData
    })
      .then(response => {
        if (response.ok) {
          // handle the response from the server here
          window.location.assign('https://www.example.com/newpage');
        }
      })
      .catch(error => {
        console.error(error);
      })
  }
})