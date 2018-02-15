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




<div style="margin-left:25%;padding:1px 16px;height:1000px;">
 
 
 <div id="frm">

<form action="ul.php" method ="POST">

<h1>Update the restaurant</h1>
<p>

<input type="text" id="rcode" name="rcode" placeholder="rcode">
</p>

<p>

<input type="text" id="rname" name="rname" placeholder="rname">
</p>
<p>

<input type="text" id="radd" name="radd" placeholder="radd">
</p>
<p>

<input type="text" id="remp" name="remp" placeholder="remp">
</p>

<p>
<input type="submit" class="buttons" id="btn" value="submit">

</p>

</form>


</div>


</div>

</body>
</html>