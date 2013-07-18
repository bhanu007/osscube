<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<title>left </title>
<body>
<div id="main">
<?php 
if($_GET[pid]=='1')
{
	echo ("<br>");
echo "<img src='s1.jpeg' alt='img not found' height='150px' width='150px' />";
echo '<input type="checkbox" name="c1">';
}


else if($_GET[pid]=='2')
{
	echo ("<br>");
	echo "<img src='s2.jpg' alt='img not found' height='150px' width='150px' />";
	echo '<input type="checkbox" name="c2">';
}
else if($_GET[pid]=='3')
{
	echo ("<br>");
	echo "<img src='s3.jpg' alt='img not found' height='150px' width='150px' />";
	echo '<input type="checkbox" name="c3">';
}
else if($_GET[pid]=='4')
{
	echo ("<br>");
	echo "<img src='s1.jpeg' alt='img not found' height='150px' width='150px' />";
}

echo '<br><br><br><br><br>';
echo '<input type="button"  value="add to cart">';
?>
</div>


</body>
</html>