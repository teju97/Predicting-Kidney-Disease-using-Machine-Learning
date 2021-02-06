<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection.");


mysqli_select_db($connect,"ckd");
$fullname = $_POST['fullname'];
$qualification = $_POST['qualification'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$doctorid=$_POST['doctorid'];
$password =$_POST['password'];
$confirmpassword= $_POST['confirmpassword'];

if ($password != $confirmpassword) {
    
        print '<script type="text/javascript">';
            print 'alert("ERROR IN REGISTRATION ENTER CORRECT PASSWORD")';
            print '</script>';
            header("refresh:0; url=Doctor_signup.php"); 
    
    } else {
			$insert = "INSERT INTO doctor(fullname,qualification,phonenumber,email,doctorid,password,confirmpassword)
values('$fullname','$qualification','$phonenumber','$email','$doctorid','$password','$confirmpassword')";

$results=mysqli_query($connect,$insert) or die(mysqli_error($connect));
        print '<script type="text/javascript">';
            print 'alert("Successfully registered...")';
            print '</script>';
            header("refresh:0; url=Analyze.html");
    
    }
?>