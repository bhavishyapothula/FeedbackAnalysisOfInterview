<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='bhavi';
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password);
mysqli_select_db($con,'project');
$cnam=$_POST['c1'];
$query="INSERT INTO company(cname)  VALUES ('$cnam')";
mysqli_query($con,$query);
include 'adminhomepage.php';
echo "<center><b>Company added succesfully</b></center>";
header("refresh:2;url=addcompany.php");
?>