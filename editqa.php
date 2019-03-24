<?php
include 'facultyhomepage.php';
?>
<html>
<body>

<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='bhavi';
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password);
mysqli_select_db($con,'project');
$sql="SELECT * FROM qanda";
$records=mysqli_query($con,$sql);
?>
<center>
<table>
<tr>
<th>Company</th>
<th>Question</th>
<th>Answer</th>
</tr>
<?php
while($row = mysqli_fetch_array($records))
{
	echo "<tr><form action=editqadb.php method=post>";
	echo "<td><input type=text name=coname value='".$row['coname']."'></td>";
	echo "<td><input type=text name=question value='".$row['question']."'></td>";
	echo "<td><input type=text name=answer value='".$row['answer']."'></td>";
	echo "<input type=hidden name=qid value='".$row['qid']."'>";
	echo "<td><input type=submit name=edit>";
	echo "</form></tr>";
}
?>
</table>
</center>
</body>
</html>