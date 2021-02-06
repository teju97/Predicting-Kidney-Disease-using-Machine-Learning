<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection.");

mysqli_select_db($connect,"ckd");

$patientid= $_POST['patientid'];
$doctorid= $_POST['doctorid'];

$q2="SELECT patientid FROM todaylist WHERE patientid='$patientid' AND doctorid='$doctorid'";
$r2=mysqli_query($connect,$q2) or die(mysqli_error());
$reg2=mysqli_fetch_assoc($r2);
if (mysqli_num_rows($r2) != 0) {
    
        print '<script type="text/javascript">';
            print 'alert("Patient already registerd")';
            print '</script>';
            header("refresh:0; url=Admin_old_patient.php"); 
    
    } 
else {
		$insert = "INSERT INTO todaylist(patientid,doctorid)
values('$patientid','$doctorid')";

		$result3=mysqli_query($connect,$insert);
        print '<script type="text/javascript">';
            print 'alert("Successfully registered...")';
            print '</script>';
            header("refresh:0; url=Admin_end.php");
    
    }

?>