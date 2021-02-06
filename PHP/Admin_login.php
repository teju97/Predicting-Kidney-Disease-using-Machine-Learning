<?php
session_start();
$_SESSION['authuser']=1;

?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Admin_login.css">
    <link rel="stylesheet" href="assets/css/Admin_style.css">
</head>

<body>
    <div class="login-clean">
        <form method="post" action="Admin_data.php">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group"><input class="form-control" type="text" placeholder="Username" name="MyUsername" id="MyUsername"required /></div>
            <div class="form-group"><input class="form-control" type="password" name="MyPassword" id="MyPassword"placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div>
			<a href="Home.php" class="back" type="text" style="margin-left:44%;color:black;margin-top:15%;">Back</a>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>