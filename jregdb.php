<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='bhavi';
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password);
mysqli_select_db($con,'project');
$jname=$_POST['jname'];
$juname=$_POST['juname'];
$jpass=$_POST['jpass'];
$jreg=$_POST['jreg'];
$jemail=$_POST['jemail'];
$query="INSERT INTO juniordata(jname,juname,jpass,jreg,jemail)  VALUES ('$jname','$juname','$jpass','$jreg','$jemail')";
mysqli_query($con,$query);
header("refresh:2;url=juniorlogin.php");
?>