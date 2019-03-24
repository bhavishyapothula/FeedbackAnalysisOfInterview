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
<h1>Faculty Login</h1>
<form action="flogval.php" method="POST"><br>
User Name:<input type="text" name="fu_name"><br>
Password:<input type="password" name="fu_pass"><br>
<input type="submit"><br>
<a href="freg.php">New User,Register</a>
</form>
</center>
</body>
</html>