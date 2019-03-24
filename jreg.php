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
<h1>Junior Registration</h1>
<form action="jregdb.php" method="POST">
Student Name:<input type="text" name="jname"><br>
User Name:<input type="text" name="juname"><br>
Password:<input type="password" name="jpass"><br>
Regno:<input type="text" name="jreg"><br>
Email ID:<input type="text" name="jemail"><br>
<input type="submit" value="register">
</form>
</body>
</html>