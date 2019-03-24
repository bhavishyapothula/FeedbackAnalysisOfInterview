<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='bhavi';
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password);
mysqli_select_db($con,'project');
$sql="UPDATE qanda SET question='$_POST[question]',answer='$_POST[answer]' WHERE qid='$_POST[qid]'";
if(mysqli_query($con,$sql))
{
	include 'facultyhomepage.php';
	echo "<center><b>modified successfully</b></center>";
	header("refresh:2;url=editqa.php");
}
?>