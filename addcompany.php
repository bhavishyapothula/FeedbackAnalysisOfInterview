<?php
include 'adminhomepage.php';
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='bhavi';
mysql_connect($mysql_host,$mysql_user,$mysql_password);
mysql_select_db('project');
$query="SELECT * FROM company";
if($is_query_run=mysql_query($query))
{
while($query_execute=mysql_fetch_assoc($is_query_run))
{
	echo "<center>";
echo $query_execute['cname']."<br>";
echo "</center>";
}
}
?>
<html>

<body>
<center>
<form action="insertcomp.php" method="post">
<b>company:</b><input type="text" name="c1">
<input type="submit" value="Add Company">
</form>
</center>
</body>
</html>