<?php
session_start();
// get values frm login.php
$username = $_POST['rcode'];
$password = $_POST['rpass'];

$_SESSION["srcode"]="$username";


//connect to DB
$con=mysqli_connect("mysql.hostinger.in","u484969938_root","root25",u484969938_resdb);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//sql query
$sql="select * from res where rcode='$username' and rpass='$password'";
					
 
$result=mysqli_query($con,$sql);
// Associative array
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

if($row['rcode']==$username && $row['rpass']==$password)
{
	
header('Location:home.php');
}
else
{
	echo "login failed";
header('Location:login.php');
}
// Free result set
mysqli_free_result($result);

mysqli_close($con);

?>


