<?php  
require_once 'db.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');
print_r($_REQUEST);
$uname=$_GET['uname'];
$email=$_GET['email_id'];
$comment_text=$_GET['ctext'];
$sql="insert into comment values('','1','$uname','$email','$comment_text',now())";
mysql_query($sql);
$sql1="select id from comment where (name='$uname' and email='$email')";
$r=mysql_query($sql1);
while($row=mysql_fetch_array($r)){
	$comment_id=$row['id'];
	
}
$sql3="insert into likecomment values('','$comment_id','0','0',now())";
mysql_query($sql3);
foreach ($_REQUEST as $key=>$value ){
	$id=$key;
	$status=$value;
	
}
$like="";
if($status=="like")
{
	$sql4="select count_like from likecomment where comment_id='$id'";
	$res=mysql_query($sql4);
	while($count=mysql_fetch_array($res)){
		$like=$count['count_like'];
		$like=$like+1;
	}
	$sql5="update likecomment set count_like='$like' where comment_id='$id' ";
	$res=mysql_query($sql5);
}
else if($status=="disike")
{
	$sql4="select count_dislike from likecomment where comment_id='$id'";
	$res=mysql_query($sql4);
	while($count=mysql_fetch_array($res)){
		$like=$count['count_dislike'];
		$like=$like+1;
	}
	$sql5="update likecomment set count_dislike='$like' where comment_id='$id' ";
   //echo $sql5;
	$res=mysql_query($sql5);
}
header('location:index.php');
?>