<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='bhavi';
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password);
mysqli_select_db($con,'project');
$comp=$_POST['comp'];
$question=$_POST['question'];
$answer=$_POST['answer'];
$query="INSERT INTO qanda(coname,question,answer)  VALUES ('$comp','$question','$answer')";
mysqli_query($con,$query);
include 'seniorhomepage.php';
echo "<center><b>Data added succesfully</b></center> ";
header("refresh:2;url=addqa.php");
?>