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
<h1>Admin login</h1>
<form action="apost.php" method="POST">
User Name:<input type="text" name="au_name"><br>
Password:<input type="password" name="au_pass"><br>
<input type="submit">
</form>
<center>
</body>
</html>