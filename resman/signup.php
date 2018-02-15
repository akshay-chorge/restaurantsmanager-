<html>
<title>Signup form</title>
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
	 color: black;
    //background-color: #f2f2f2;
    padding: 20px;
}
	
</style>
</head>

<body background="http://resman.esy.es/img/res5.jpg">
<div id="frm">

<form action="s.php" method ="POST">
<center>
<p>

<input type="text" id="rname" name="rname" placeholder="resname">
</p>
<p>

<input type="text" id="rcode" name="rcode" placeholder="rescode">
</p>

<p>

<input type="text" id="remp" name="remp" placeholder="remp">
</p>

<p>

<input type="text" id="radd" name="radd" placeholder="radd">
</p>

<p>

<input type="text" id="rpass" name="rpass" placeholder="respass">
</p>

<p>
<input type="submit" class="buttons" id="btn" value="signup">

</p>

</form>
</center>

</div>
</body>
</html>