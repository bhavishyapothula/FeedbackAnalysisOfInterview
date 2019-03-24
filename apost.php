<?php
if($_POST["au_name"]==="admin" && $_POST["au_pass"]==="ad")
{
	include 'adminhomepage.php';
}
else
{
	
	include 'adminlogin.php';
	echo "<center><b> Invalid login.Try again</b></center>";
}
	
?>