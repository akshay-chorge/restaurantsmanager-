<!DOCTYPE html>
<html>
<head>
<style>
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}

input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 25%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
	 color: royalblue;
    //background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>

<ul>
  <li><a href="admin.php">Home</a></li>
  <li><a   href="sale.php">Sale</a></li>
  <li><a class="active" href="delete.php">Delete</a></li>
  
  <li><a href="logout.php">Logout</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
 

<?php

   $rcode= $_POST['rcode'];
   $con = mysqli_connect("mysql.hostinger.in", "u484969938_root", "root25","u484969938_resdb");
   

// sql to delete a record
$sql = "DELETE FROM res WHERE rcode='$rcode'";

if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}

?>
</div>
</body>
</html>












