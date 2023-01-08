<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel='stylesheet' href="Driver_register.css" />
    <title>Form Validator</title>

</head>

<body>
    <div class="container">
        <div class="column1">
        <form name="registrationForm" onsubmit="return validateForm()" action="connect.php" method="post">
                <h2>Driver Register</h2>
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
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob">
                    
                </div>
                <div class="form-group" >
                    <label for="gender">Gender : </label>
                        <div class="align">
                            <input type="radio" id="male" name="gender"  value="male">
                            <label for="male">Male</label><br>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label><br>
                            <input type="radio" id="other" name="gender" value="other">
                            <label for="other">Other</label>
                        </div>
                </div>
                <div class="form-control">
                    <label for="proof">Id Proof</label><br>
                    <label for='aadharcard'>Aadhar Card</label>
                    <input type="file" accept="image/*" name="aadharcard"  class="form-control" id="aadharcard">
                    <label for='pancard'>Pan Card</label>
                    <input type="file" accept="image/*" name="pancard"  class="form-control" id="pancard">
                    <label for='drivinglicense'>Driving License</label>
                    <input type="file" accept="image/*" name="drivinglicense"  class="form-control" id="drivinglicense">
                </div>

                <div class="form-control">
                    <label for='phoneno'>Phone Number</label>
                    <input type="phone" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" id="phone" placeholder="Enter Phone Number">
                    
                </div>
                <div class="form-control">
                    <label for='email'>Email</label>
                    <input type="email" onchange="validateName(this)"name="emailid" id="emailid" placeholder="Enter email">
                </div>
                <div class="form-radio">
                    <label for="workExperience">Do you have any work experience?</label><br>
                        <input type="radio" id="workExperience" name="workExperience" value="yes" onchange="toggleInput()">Yes
                        <br>
                        <input type="radio" id="workExperience" name="workExperience" value="no" onchange="toggleInput()">No
                        <br>
                        <div id="workExperienceInput" style="display: none;">
                            <label for="years">How many years of work experience do you have?</label><br>
                            <input type="number" id="years" name="years" min="1" max="50">
                        </div>
                </div>
                <div class="form-radio">
                    <label for="certification">Do you have any certificate ?</label><br>
                    <input type="radio" id="certification" name="certification" value="yes" onchange="CertificateInput()">Yes
                    <br>
                    <input type="radio" id="certification" name="certification" value="no" onchange="CertificateInput()">No
                    <br>
                    <div id="certificationInput" style="display: none;">
                        <label for="certificate">Any Certificate</label><br>
                        <input type="file" accept="image/*" name="certificate"  class="form-control" id="certificate">
                    </div>
                </div>    
                <div class="form-control">
                    <label for='image'>Upload Profile Image</label>
                    <input type="file" accept="image/*" name="profileimage"  class="form-control" id="profileimage">
                    
                </div>

                <button  class="btn btn-primary btn-block">Register</button>
                <div class="form-footer">
                    <p> Have a account ? <a href="../Student_login\index.php">Sign in</a></p>

                </div>
            </form>
        </div>

    </div>
</body>

</html>

<script src="driver_script.js"></script>