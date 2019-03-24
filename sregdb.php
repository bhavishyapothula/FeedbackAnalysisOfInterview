<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='bhavi';
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password);
mysqli_select_db($con,'project');
$sname=$_POST['sname'];
$suname=$_POST['suname'];
$spass=$_POST['spass'];
$sreg=$_POST['sreg'];
$semail=$_POST['semail'];
$query="INSERT INTO seniordata(sname,suname,spass,sreg,semail)  VALUES ('$sname','$suname','$spass','$sreg','$semail')";
mysqli_query($con,$query);
header("refresh:2;url=seniorlogin.php");
?>