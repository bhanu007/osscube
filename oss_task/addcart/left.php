<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

</head>
<title>left </title>
<body>

<?php 
$x=array("Bags"=>array("Handbags"=>array("Kiara","peprone","Liberty"),
					   "Wallet"=>array("Highdesign","Kara","Miss Benette")
					   ),
		"Shoes"=>array("Belly"=>array("Cat Walk","United Colors Of Benetton","Jove"),
		               "Sandles"=>array("Cally","Miss Bennette","Jove")
					   ),
		"Jwellry"=>array("Earings"=>array("Zoye","Miss Bennete"),
		               "Ring"=>array("Peora","Miss Bennete")
					   )
		//"cloths"=>array("Tops"=>array("Puma","Nike","United Colors Of Benetton"),
		  //              "Jeans"=>array("Lewis","United Colors Of Benetton","GAP")
			//		    )
		);
$count=0;

foreach ($x as $key=>$value)
{
	$count++;
	echo "<ul>";
	echo '<h2 >'. $key. '</h2>';
	foreach ($value as $n => $newv)
	{
	  echo  '<font size="+1" color="#FF0033">'. $n .'</font>';
	 	foreach ($newv as $k => $v)
		{
			echo "<li><a href='index.php?pid=$count'>".$v."</a></li><br>";
		}
	}
	
	echo "</ul>";
	echo "</li>";
}


?>


</body>
</html>