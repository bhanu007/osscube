<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<title>left </title>
<body>


<form action="addcart.php" method="post">
<div id="main">
<?php 
session_start();
$_SESSION['pid']=$_GET['pid'];
if($_GET['pid']=='1')
{
	echo ("<br>");
	echo '<h1> HandBags</h1>';
echo "<img src='p1.jpg' alt='img not found' height='200px' width='200px'/> ";
echo '<caption >  Kiara </caption>';
echo '<input type="checkbox" name="c1"> ';
echo "<img src='p2.jpg' alt='img not found' height='200px' width='200px'/> ";
echo '<caption >  Peprone </caption>';
echo '<input type="checkbox" name="c2"> ';
echo "<img src='l1.jpg' alt='img not found' height='200px' width='200px'/> ";
echo '<caption >  Liberty </caption>';
echo '<input type="checkbox" name="c3">';
echo '<h1> Wallets </h1>';
echo "<br> <img src='h1.jpg' alt='img not found' height='200px' width='200px'/> ";
echo '<caption >  HighDesign </caption> ';
echo '<input type="checkbox" name="c4"> ';
echo "<img src='k1.jpg' alt='img not found' height='180px' width='180px'/> ";
echo '<caption >  Kara</caption>';
echo '<input type="checkbox" name="c5"> ';
echo "<img src='m2.jpg' alt='img not found' height='200px' width='200px'/> ";
echo '<caption >Miss Bentte</caption>';
echo '<input type="checkbox" name="c6"> ';
}


else if($_GET['pid']=='2')
{
	echo ("<br>");
	echo '<h1> Belly</h1>';
echo "<img src='b1.jpg' alt='img not found' height='200px' width='200px'/> ";
echo '<caption >  Cat Walk</caption>';
echo '<input type="checkbox" name="c7"> ';
echo "<img src='b2.jpg' alt='img not found' height='200px' width='200px'/> ";
echo '<caption >  UCB </caption>';
echo '<input type="checkbox" name="c8"> ';
echo "<img src='b3.jpg' alt='img not found' height='200px' width='200px'/> ";
echo '<caption >  Jove </caption>';
echo '<input type="checkbox" name="c9">';
echo '<h1> Sandles</h1>';
echo "<br> <img src='sa1.jpg' alt='img not found' height='200px' width='200px'/> ";
echo '<caption >  Kally </caption> ';
echo '<input type="checkbox" name="c10"> ';
echo "<img src='sa2.jpg' alt='img not found' height='180px' width='180px'/> ";
echo '<caption >  Miss Benetton</caption>';
echo '<input type="checkbox" name="c11"> ';
echo "<img src='sa3.jpg' alt='img not found' height='200px' width='200px'/> ";
echo '<caption >  Jove</caption>';
echo '<input type="checkbox" name="c12"> ';
}
else if($_GET['pid']=='3')
{
	echo ("<br>");
	echo '<h1> Rings</h1>';
echo "<img src='j1.jpg' alt='img not found' height='200px' width='200px'/> ";
echo '<caption >  Cat Walk</caption>';
echo '<input type="checkbox" name="c7"> ';
echo "<img src='j2.jpg' alt='img not found' height='200px' width='200px'/> ";
echo '<caption >  UCB </caption>';
echo '<input type="checkbox" name="c8"> ';
echo '<br><h1> Earings</h1>';
echo "<img src='j3.jpg' alt='img not found' height='200px' width='200px'/> ";
echo '<caption >  Jove </caption>';
echo '<input type="checkbox" name="c9">';

echo "<img src='j4.jpg' alt='img not found' height='200px' width='200px'/> ";
echo '<caption >  Kally </caption> ';
echo '<input type="checkbox" name="c10"> ';
	
}


echo '<br><br><br><br><br>';

?>
<input type="submit" align="right" />
</div>

</form>
</body>
</html>