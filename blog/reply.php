<?php  
require_once 'db.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');
print_r($_REQUEST);
$name=$_REQUEST['uname'];
$email=$_REQUEST['email_id'];
$reply=$_REQUEST['ctext'];
$id=$_REQUEST['x'];
$sql="insert into comment_on values(' ','$id','$name','$email','$reply',now())";
$res=mysql_query($sql);
header('location:index.php');
?>
