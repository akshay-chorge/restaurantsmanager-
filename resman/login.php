<html>
<title>Login form</title>
<head>
<style>
input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
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
h1{
	color:blue;
	text-align:center;

}
	
</style>
</head>


<div id="frm">

<form action="l.php" method ="POST">
<center>
<p>

<input type="text" id="username" name="username" placeholder="username">
</p>
<p>

<input type="password" id="pass" name="pass" placeholder="pass">
</p>
<p>
<input type="submit" class="buttons" id="btn" value="login">

</p>
<b>
<h1>
New user
<a href="signup.php">Sign up</a></h1>
<br>
</b>
</form>
</center>

</div>
</body>
</html>