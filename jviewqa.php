<?php
include 'juniorhomepage.php';
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='bhavi';
mysql_connect($mysql_host,$mysql_user,$mysql_password);
mysql_select_db('project');
$query="SELECT * FROM company";
$is_query_run=mysql_query($query);

?>
<html>
<head>
<style>
form{
	left: 0;
    line-height: 50px;
    margin: auto;
    margin-top: -100px;
    position: absolute;
    top: 50%;
    width: 100%;
}
</style>
</head>
<body>
<center>
<form action="jviewqadb.php" method="POST">
Select Company:<select name="comp">
<option>select company</option>
<?php
if($is_query_run)
{
while($query_execute=mysql_fetch_array($is_query_run))
{
$cname=$query_execute['cname'];
echo"<option>$cname<br></option>";
}
}
?>
</select><br>
<input type="submit">
</form>
</center>
</body>
</html>


