
<?php
include 'seniorhomepage.php';
?>
<html>
<body>
<center>
<table border=1 cellpadding=1 cellspacing=>
<tr>
<th>Company</th>
<th>Question</th>
<th>Answer</th>
<th>Delete</th>
</tr>
<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='bhavi';
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password);
mysqli_select_db($con,'project');
$sql="SELECT * FROM qanda";
$records=mysqli_query($con,$sql);
while($row = mysqli_fetch_array($records))
{
	echo "<tr>";
	echo "<td>".$row['coname']."</td>";
	echo "<td>".$row['question']."</td>";
	echo "<td>".$row['answer']."</td>";
	echo "<td><a href=deleteqadb.php?id=".$row['qid'].">Delete</a></td>";
}
?>
</table>
</center>
</body>
</html>



