<?php
include 'basic.php';
?>
<html>
<head><style>
form{
	left: 0;
    line-height: 50px;
    margin: auto;
    margin-top: -100px;
    position: absolute;
    top: 50%;
    width: 100%;
}
</style></head>
<body>
<center>
<h1>Junior Login</h1>
<form action="jlogval.php" method="POST">
User Name:<input type="text" name="ju_name"><br>
Password:<input type="password" name="ju_pass"><br>
<input type="submit"><br>
<a href="jreg.php">New User,Register</a>
</form>
</center>
</body>
</html>