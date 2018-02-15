<?php
// get values frm signup.php

$rcode=$_POST['rcode'];
$rfood = $_POST['rfood'];
$rqty=$_POST['rqty'];
$ramt=$_POST['ramt'];

//connect to DB
$con=mysqli_connect("mysql.hostinger.in","u484969938_root","root25");
mysqli_select_db($con,"u484969938_resdb");
$famt=$rqty * $ramt;
//sql query
$res=mysqli_query($con,"insert into rfood(rcode,rfood,rqty,ramt)values('$rcode','$rfood','$rqty','$famt')")
					or die("Failed to connect".mysqli_error($con));
?>
<html>
<body>
<center>
Data added Successfully.Go to
<a href="/home.php">Home</a>
back.
</center>
</body>
</html>


					


