<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='bhavi';
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password);
mysqli_select_db($con,'project');
$sql="DELETE FROM qanda WHERE qid='$_GET[id]'";
if(mysqli_query($con,$sql))
{
	include 'seniorhomepage.php';
	echo "<center><b>deleted successfully</center></b>";
	header("refresh:2;url=deleteqa.php");
}
?>