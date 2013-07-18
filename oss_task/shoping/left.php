<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<title>left </title>
<body>
<?php 
SESSION_START();

$x=array("steletoes"=>array("KamlaNagar","Lajpat Nagar"),
		"Shopperstop"=>array("rajori gardern","Rohini"),
		"Spensor"=>array("Rajori garden","kamla nagar"));
$count=0;

foreach ($x as $key=>$value)
{$count++;
	echo "<ul>";
	echo "<u>".$key."</u><br>";
	foreach ($value as $n => $newv)
	{
		echo("<br>");
		echo "<li><a href='index.php?pid=$count'>".$newv."</a></li><br>";
	}
	
	echo "</ul>";
	echo "</li>";
}


?>


</body>
</html>