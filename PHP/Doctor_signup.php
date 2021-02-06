<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor_signup</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Doctor_signup_styles.css">
    <link rel="stylesheet" href="assets/css/Doctor_signup.css">
</head>

<body>
    <div class="register-photo">
        <div class="form-container"><div class="image-holder"></div>
            <form method="post" action="new_doctor_data.php">
                <h2 class="text-center"><strong>Create an account.</strong></h2>
                <div class="form-group"><input type="text" class="form-control" placeholder="Full name" name="fullname" id="fullname"required /></div>
                <div class="form-group"><input class="form-control" type="text" placeholder="Qualification" name="qualification" id="qualification"required/></div>
                <div class="form-group"><input class="form-control" type="tel" placeholder="Phone number" name="phonenumber" id="phonenumber" required/></div>
                <div class="form-group"><input class="form-control" type="email" name="email" id="email" placeholder="Email" required></div>
				<div class="form-group"><input class="form-control" type="text" name="doctorid" id="doctorid" placeholder="Doctorid" required></div>
                <div class="form-group"><input class="form-control" type="password" name="password" id="password" placeholder="Password"></div>
                <div class="form-group"><input class="form-control" type="password" name="confirmpassword" id="confirmpassword" placeholder="Password (repeat)"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Sign Up</button></div><a href="Doctor_login.php" class="already">You already have an account? <strong>Login here</strong>.</a>
<a href="Home.php" class="back" type="text" style="margin-left:44%;color:black;margin-top:15%;">Back</a></form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>