<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='bhavi';
$c=0;
mysql_connect($mysql_host,$mysql_user,$mysql_password);
mysql_select_db('project');
$query="SELECT * FROM seniordata";
if($is_query_run=mysql_query($query))
{
while($query_execute=mysql_fetch_assoc($is_query_run))
{
if($_POST["su_name"]===$query_execute['suname']&&$_POST["su_pass"]===$query_execute['spass'])
{
	
	$c=1;
	include 'seniorhomepage.php';
	
}

}
if($c===0)
{
	
	include 'seniorlogin.php';
	echo "<center><b>Invalid,Try  again</b></center>";
}
}
?>