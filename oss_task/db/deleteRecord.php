<?php 

require_once ('con.php');

$id=$_REQUEST['id'];
$sql="delete from employee_table where sno='$id' ";
//echo $sql;
$result=mysql_query($sql)or die("mysql_error");

echo("record is deleted");


?>