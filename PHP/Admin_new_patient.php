<?php
session_start();
$_SESSION['authuser']=1;

?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_new_patient</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Admin_new_patient.css">
    <link rel="stylesheet" href="assets/css/Admin_new_styles.css">
</head>

<body>
    <div class="login-clean">
        <form method="post" action="New_patient_data.php">
            <h2 class="sr-only">Login Form</h2><h1 style="margin-bottom:10%;">New Patient</h1>
            <div class="form-group"><input type="text"  class="form-control" placeholder="Patient Id" name="patientid" /></div>
            <div class="form-group"><input type="text" class="form-control" placeholder="Patient Name" name="name"/></div>
            <div class="form-group"><input type="number" class="form-control"placeholder="Age" name="age" /></div>
            <div class="form-group"><input type="tel" class="form-control" placeholder="Mobile Number" name="mobilenumber" /></div>
            <div class="form-group"><input type="email" class="form-control" placeholder="Email" name="email"  /></div>
            <div class="form-group"><input type="text" class="form-control" placeholder="Gender" name="gender"/></div>
            <div class="form-group"><input type="text" class="form-control" placeholder="Doctorid" name="doctorid"/></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Register</button></div><a type="text" style="color:grey;margin-left:44%;" href="Admin_2nd.php">Home</a></form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>