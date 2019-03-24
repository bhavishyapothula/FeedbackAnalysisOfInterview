<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='bhavi';
$c=0;
mysql_connect($mysql_host,$mysql_user,$mysql_password);
mysql_select_db('project');
$query="SELECT * FROM juniordata";
if($is_query_run=mysql_query($query))
{
while($query_execute=mysql_fetch_assoc($is_query_run))
{
if($_POST["ju_name"]===$query_execute['juname']&&$_POST["ju_pass"]===$query_execute['jpass'])
{
	$c=1;
	include 'juniorhomepage.php';
}

}
if($c===0)
{
	
	include 'juniorlogin.php';
	echo "<center><b>Invalid,Try Again</b></center>";
}
}
?>