<?php
include 'basic.php'
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
<h1>Senior Login</h1>
<form action="slogval.php" method="POST">
User Name:<input type="text" name="su_name"><br>
Password:<input type="password" name="su_pass"><br>
<input type="submit"><br>
<a href="sreg.php">New User,Register</a>
</form>
</center>
</body>
</html>