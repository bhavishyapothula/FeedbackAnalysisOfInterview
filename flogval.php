<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='bhavi';
$c=0;
mysql_connect($mysql_host,$mysql_user,$mysql_password);
mysql_select_db('project');
$query="SELECT * FROM facultydata";
if($is_query_run=mysql_query($query))
{
while($query_execute=mysql_fetch_assoc($is_query_run))
{
if($_POST["fu_name"]===$query_execute['funame']&&$_POST["fu_pass"]===$query_execute['fpass'])
{
	$c=1;
	include 'facultyhomepage.php';
}

}
if($c===0)
{
	
	include 'facultylogin.php';
	echo "<center><b>Invalid,Try Again</b></center>";
}
}
?>