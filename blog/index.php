<link rel="stylesheet" href="blog.css">
<script src="jquery-1.9.1.min.js"; ?>"> </script>
<div class="header"> Welcome to My Blog  </div> 
<div id="1" class="popup">
<form name="reply_comment" id="reply_comment"action="reply.php" method="get">
<span id="close">X</span>
Name <input type="text" name="uname"><br><br>
Email <input type="text" name="email_id"><br><br>
Comment <textarea rows="3" cols="20" name="ctext" placeholder="Maximum 250 words"></textarea> <br><br><br><br>
<input type="submit"  value="Comment">
<br><br>
</form>
</div>
<?php  
require_once 'db.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');
$sql="select artice_text from article where id='1'";
$res=mysql_query($sql);
?>

<br>
<div id="article" class="artice">
<?php
echo "<br>";
while($r=mysql_fetch_array($res))
{
echo ($r[0]);
}
?>
<br><br>
<div id="main" class="comment_box">
<form name="comment" id="comment" action="comment.php" method="get">
Name <input type="text" name="uname"><br><br>
Email <input type="text" name="email_id"><br><br>
Comment <textarea rows="3" cols="20" name="ctext" placeholder="Maximum 250 words"></textarea> <br><br><br><br>
<input type="submit"  value="Comment">
<br><br>
</form>
</div><br><br><br><br>
</div><br>

<?php 
$sql1="select id,name,comment_text,comment_time from comment where a_id='1'";
$res1=mysql_query($sql1);

echo "<br><div id='showcomment' class='showcomment'>";
echo "<form action='comment.php' method='get'>";
echo "<input type='button' value='View Oldest' id='old'' name='old'>";
echo "<input type='button' value='View Newest' id='new'name='new'><br>";
while($c=mysql_fetch_array($res1)){
$sql2="select name,c_text from comment_on where comment_id='".$c['id']."'";
$res8=mysql_query($sql2);
if($c['name']!="" && $c['comment_time']!=" " )
{
	

$sql="select count_like,count_dislike from likecomment where comment_id='".$c['id']."'";
	$c_like=mysql_query($sql);
	$row=mysql_fetch_assoc($c_like);
	
echo "<br><div class=cmnt>";
echo $c['name']." "; 
echo "<div class='t'> ". $c['comment_time']."</div>";	
echo "<br><span class='ctext'> ".$c['comment_text']."</span><br> <br>";
echo "<input type='submit' value='like' name='".$c['id']."'	>".$row['count_like']; 
echo "<input type='submit' value='disike' name='".$c['id']."'>".$row['count_dislike'];

echo "<input type='button' class='btn_cmmnt' value='Reply' name='comment' onClick=c(".$c['id'].")><br>";

echo "<br><div class='subcomment'> ";
 while($subcomment=mysql_fetch_array($res8)){
	
echo "<span class='name'>".$subcomment['name']."</span> <span class='floatr'> ".$subcomment['c_text'];
echo "</span><br>";
} 
echo"</div><br></div><br>";
}

}
echo "</form>";

echo "</div>";
?>
<div id='latest'>
<?php 
$sql1="select id,name,comment_text,comment_time from comment where a_id='1' order by comment_time desc";
$res1=mysql_query($sql1);

echo "<br><div id='showcomment' class='showcomment'>";
echo "<form action='comment.php' method='get'>";
echo "<input type='submit' value='View Oldest' name='old'>";
echo "<input type='submit' value='View Newest' name='new'><br>";
while($c=mysql_fetch_array($res1)){
$sql2="select name,c_text from comment_on where comment_id='".$c['id']."'";
$res8=mysql_query($sql2);
if($c['name']!="" && $c['comment_time']!=" " )
{
	

$sql="select count_like,count_dislike from likecomment where comment_id='".$c['id']."'";
	$c_like=mysql_query($sql);
	$row=mysql_fetch_assoc($c_like);
	
echo "<br><div class=cmnt>";
echo $c['name']." "; 
echo "<div class='t'>". $c['comment_time']."</div>";	
echo "<br><span class='ctext'> ".$c['comment_text']."</span><br> ";
echo "<input type='submit' value='like' name='".$c['id']."'	>".$row['count_like']; 
echo "<input type='submit' value='disike' name='".$c['id']."'>".$row['count_dislike'];

echo "<input type='button' class='btn_cmmnt' value='Reply' name='comment' onClick=c(".$c['id'].")>";
echo "<br><div class='subcomment'> ";
while($subcomment=mysql_fetch_array($res8)){

	echo "<span class='name'>".$subcomment['name']." </span> <span class='floatr'>  ".$subcomment['c_text'];
	echo "</span><br><br>";
}
echo"</div><br></div><br>";

}

}
echo "</form>";

echo "</div>";
function rec($id) {

$sql="select * from comment_on";
$c_like=mysql_query($sql);
while($row=mysql_fetch_assoc($c_like)) {
if($row['comment_id']==$id) {

}
}
}
?>
</div>
<script>
function latest() {
	
}
function c(id){
	var x=id;
	alert(x);
	  $("#1").show();
	 $("body").css("background-color", "#7F8792");
     $("#main").hide();
     $("#article").hide();
     $("#showcomment").hide();
     $("#reply_comment").append("<input type='hidden' name='x' value='"+x+"'>"); 
}
 $(document).ready(function() {
/*$(".btn_cmmnt").click(function(){
	  $("#1").show();
	 $("body").css("background-color", "#7F8792");
     $("#main").hide();
     $("#article").hide();
     $("#showcomment").hide();
   
	
}); */
	});
	$("#close").click(function(){
		 $("#1").hide();
		 $("body").css("background-color", "#DBEBFF");
	     $("#main").show();
	     $("#article").show();
	     $("#showcomment").show();
	     $("#latest").hide();
		});
$("#new").click(function(){
$("#showcomment").hide();
$("#latest").show();
});
</script>