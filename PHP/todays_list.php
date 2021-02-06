<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysqli_connect("localhost","root","") or die ("check your server connection.");

mysqli_select_db($connect,"ckd");

echo "<h4>Today's List</h4>";
$query="SELECT patient.name FROM paient";
$results=mysqli_query($connect,$query) or die(mysqli_error($connect));
echo" <table  border=�2�>\n";
while ($rows=mysqli_fetch_assoc($results)) {
echo "<tr>\n"; 
foreach($rows as $value) 
{
echo "<td>\n";  
echo $value; 
echo "</td>\n"; 
}
echo "</tr><br>\n"; 
}
echo "</table>\n";
echo"<a href='Admin_2nd.php'>Back</a>";
?>