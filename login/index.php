
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel='stylesheet' href="login_style.css" />
    <title>Login</title>

</head>

<body>
    <div class="container">
        <div class="column1">
            <form class="form-container" action="login.php" onsubmit="return validateForm()" id="form" method="post" >
                <h2>Admin Login</h2>
                <div class="form-control">
                    <label for='emailid'>Email</label>
                    <input type="emailid" class="form-control" id="emailid" aria-describeby="emailHelp" placeholder="Enter email" name="emailid">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for='password'>Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    <small>Error message</small>
                </div>
                <button class="btn btn-primary btn-block">Login</button>
                <div class="form-footer">

                </div>
            </form>
        </div>
        <div class="column2">

            <img src="../image\login_page.png" alt="pablo-sign-up" border="0"
                class='signup-image'>
        </div>

    </div>
</body>

</html>

<script src="login_script.js"></script>