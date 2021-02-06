<?php
session_start();

if($_SESSION['authuser']!=1)
{
    echo"ACCESS DENIED";
exit();
}
$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection");
$doctorid= $_POST['doctorid'];
$password= $_POST['password'];

mysqli_select_db ($connect,"ckd");
$query="SELECT * FROM doctor WHERE doctorid='$doctorid' and password='$password'";

$results=mysqli_query($connect,$query) or die(mysqli_error($connect));

if ($results->num_rows > 0) {
    
        print '<script type="text/javascript">';
            print 'alert("Login Successful...")';
            print '</script>';
            header("refresh:0; url=Analyze.html"); 
    
    } else {
    
        print '<script type="text/javascript">';
            print 'alert("Login Failed!!")';
            print '</script>';
            header("refresh:0; url=Home.php");
    
    }

?>
