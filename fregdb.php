<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='bhavi';
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password);
mysqli_select_db($con,'project');
$fname=$_POST['fname'];
$funame=$_POST['funame'];
$fpass=$_POST['fpass'];
$freg=$_POST['freg'];
$femail=$_POST['femail'];
$fmob=$_POST['fmob'];
$query="INSERT INTO facultydata(fname,funame,fpass,freg,femail,fmob)  VALUES ('$fname','$funame','$fpass','$freg','$femail','$fmob')";
mysqli_query($con,$query);
header("refresh:2;url=facultylogin.php");
?>