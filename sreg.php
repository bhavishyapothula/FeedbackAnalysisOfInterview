<?php
include 'basic.php';
?>
<html>
<head><style>
form{
	left: 0;
    line-height: 30px;
    margin: auto;
    margin-top: -100px;
    position: absolute;
    top: 50%;
    width: 100%;
}
</style></head>
<body>
<center>
<h1>Senior Registration</h1>
<form action="sregdb.php" method="POST">
Student Name:<input type="text" name="sname"><br>
User Name:<input type="text" name="suname"><br>
Password:<input type="password" name="spass"><br>
Regno:<input type="text" name="sreg"><br>
Email ID:<input type="text" name="semail"><br>
<input type="submit" value="register"><br>
</form>
</center>
</body>
</html>