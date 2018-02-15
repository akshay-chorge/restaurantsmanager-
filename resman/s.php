<?php
// get values frm signup.php
$rname = $_POST['rname'];
$rcode = $_POST['rcode'];
$rpass = $_POST['rpass'];
$remp = $_POST['remp'];
$radd = $_POST['radd'];

//connect to DB
$con=mysqli_connect("mysql.hostinger.in","u484969938_root","root25");
mysqli_select_db($con,"u484969938_resdb");

//sql query

					
$res=mysqli_query($con,"insert into res(rcode,rname,rpass,remp,radd)values('$rcode','$rname','$rpass','$remp','$radd')")
					or die("Failed to connect".mysqli_error($con));

					
?>
<center>
Sign up Successfully.
					Now <a href="login.php">Login</a>
					</center>
