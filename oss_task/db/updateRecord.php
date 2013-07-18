<?php 

require_once ('con.php');

$id=$_REQUEST['id'];
$fname=$_REQUEST['f'];
$lname=$_REQUEST['l'];
$dept=$_REQUEST['dept'];
$sal=$_REQUEST['sal'];

$sql="update employee_table  set firstName='$fname' , lastName='$lname' ,department='$dept',salary='$sal' where sno='$id' ";


mysql_query($sql)or die("LULUI");
echo "record is updated";

$s = $sal;

if(!filter_var($s, FILTER_VALIDATE_INT))
{
	
	$msg="integer is not valid ";
	header("location:index.php?msg=". $msg);
	exit;
}
else
{
	echo("Integer is valid");
}


?>
