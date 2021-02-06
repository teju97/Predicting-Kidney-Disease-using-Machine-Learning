<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysqli_connect("localhost","root","") or die ("check your server connection.");

mysqli_select_db($connect,"ckd");

echo "<center><p style='width:40%;font-size:35px;padding-top:100px;'>Doctors List</p></center>";
$query="SELECT doctor.fullname FROM doctor";
$results=mysqli_query($connect,$query) or die(mysqli_error($connect));
echo "<center><table  border=2 style='width:25%;'>";
while ($rows=mysqli_fetch_assoc($results)) {
echo "<tr style='height:35px;font-size:20px;'>\n";
foreach($rows as $value) 
{ 
echo "<td style='text-align:center;'>\n";  
echo $value; 
echo "</td>\n"; 
}
echo "</tr><br\>\n"; 
}
echo "</table></center>\n";
echo"<center style='padding-top:40px;'><a href='Admin_2nd.php'>Back</a></center>";
?>