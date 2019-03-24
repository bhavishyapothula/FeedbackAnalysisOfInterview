<?php
include 'basic.php';
?>
<html>
<head><style>
form{
	left: 0;
    line-height: 35px;
    margin: auto;
    margin-top: -100px;
    position: absolute;
    top: 50%;
    width: 100%;
}
</style></head>
<body>
<center>
<h1>Faculty Registration</h1>
<form action="fregdb.php" method="POST">
Faculty Name:<input type="text" name="fname"><br>
User Name:<input type="text" name="funame"><br>
Password:<input type="password" name="fpass"><br>
Emp id:<input type="text" name="freg"><br>
Email ID:<input type="text" name="femail"><br>
Mobile Number:<input type="text" name="fmob"><br>
<input type="submit" value="register">
</form>
</center>
</body>
</html>