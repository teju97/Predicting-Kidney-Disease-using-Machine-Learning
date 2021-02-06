<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$name= $_POST['MyUsername'];
$pass= $_POST['MyPassword'];

 if ($name!="admin" || $pass!="admin123") {
    
        print '<script type="text/javascript">';
            print 'alert("Verification failed!!!")';
            print '</script>';
            header("refresh:0; url=Admin_login.php"); 
    
    } else {
    
        print '<script type="text/javascript">';
            print 'alert("Verified...")';
            print '</script>';
            header("refresh:0; url=Admin_2nd.php");
    
    }
?>