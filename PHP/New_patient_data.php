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
$name = $_POST['name'];
$age = $_POST['age'];
$mobilenumber = $_POST['mobilenumber'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$doctorid= $_POST['doctorid'];

$insert = "INSERT INTO patient(patientid,name,age,mobilenumber,email,gender,doctorid)
values('$patientid','$name','$age','$mobilenumber','$email','$gender','$doctorid')";

$result3=mysqli_query($connect,$insert);
if (mysqli_num_rows($result3) > 0) {
    
        print '<script type="text/javascript">';
            print 'alert("Registration Failed!!! Patient already exists...")';
            print '</script>';
            header("refresh:0; url=Admin_2nd.php"); 
    
    } else {
    
        print '<script type="text/javascript">';
            print 'alert("Successfully registered...")';
            print '</script>';
            header("refresh:0; url=Admin_end.php");
    
    }


?>
<?php
   $connect = mysqli_connect("localhost", "root", "") or die ("check your server connection.");
    mysqli_select_db($connect,"ckd");

    $query1="INSERT INTO todaylist(doctorid,patientid)
values('$doctorid','$patientid')";
    $result3=mysqli_query($connect,$query1) or die ("");
?>