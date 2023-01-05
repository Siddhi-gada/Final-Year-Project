<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel='stylesheet' href="student_register.css" />
    <title>Form Validator</title>

</head>

<body>
    <div class="container">
        <div class="column1">
        <form name="registrationForm" onsubmit="return validateForm()" action="connect.php" method="post">
                <h2>Student Register</h2>
                <div class="form-control">
  <label for='Inputfirstname'>First name</label>
  <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter first name" onchange ="validateCharactersOnly(this)">
</div>
                <div class="form-control">
                    <label for='Inputmiddlename'>Middle name</label>
                    <input type="text" onchange ="validateCharactersOnly(this)" name="middlename" class="form-control" id="middlename" placeholder="Enter middle name">
                
                </div>
                <div class="form-control">
                    <label for='lastname'>Last name</label>
                    <input type="text"onchange ="validateCharactersOnly(this)" name="lastname" class="form-control" id="lastname" placeholder="Enter last name">

                </div>
                <div class="form-control">
                    <label for='phoneno'>Phone Number</label>
                    <input type="phone" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" id="phone" placeholder="Enter Phone Number">
                    
                </div>
                <div class="form-control">
                    <label for='email'>Email</label>
                    <input type="email" onchange="validateName(this)"name="emailid" id="emailid" placeholder="Enter email">
                </div>
                <div class="form-control">
                    <label for='password'>Password</label>
                    <input type="password" name="password"class="form-control" id="password" placeholder="Enter password">
                </div>
                <div class="form-control">
                    <label for='address'>Address</label>
                    <input type="txt" onchange ="validateCharactersOnly(this)" name="address"class="form-control"id="address" placeholder="Enter Address">
                    </div>
                <button  class="btn btn-primary btn-block">Register</button>
                <div class="form-footer">
                    <p> Have a account ? <a href="../Student_login\index.php">Sign in</a></p>

                </div>
            </form>
        </div>
        <div class="column2">

            <img src="../image\car-driving-concept-illustration_114360-8091.webp" alt="pablo-sign-up" border="0"
                class='signup-image'>
        </div>

    </div>
</body>

</html>

<script src="srscript.js"></script>