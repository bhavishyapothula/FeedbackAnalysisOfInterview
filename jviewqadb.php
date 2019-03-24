<?php
include 'juniorhomepage.php';
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='bhavi';
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password);
mysqli_select_db($con,'project');
$sql="SELECT * FROM qanda where coname='$_POST[comp]'";
$records=mysqli_query($con,$sql);
echo "<center><table border=1><tr><th>Question</th><th>Answer</th></tr>";
while($row = mysqli_fetch_array($records))
{
	echo "<tr>";
	echo "<td>".$row['question']."</td>";
	echo "<td>".$row['answer']."</td>";
	echo "</tr>";
	
}
echo "</table></center>";
?>