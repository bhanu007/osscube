<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add to cart</title>
</head>

<body>
<?php 
session_start();
$pid=$_SESSION['pid'];
$total=0;
echo "<h2> <ul type='disc'>";
if(!empty($_POST['c1']))
{    
   echo("<br><li>You have Selected Kiara <br> Black coloured, non-leather handbag for women by Kiara.
Rs. 950 </li>");


   $total+=950;
    
	}
	
	if(!empty($_POST['c2']))
{    
echo("<br>");
   echo("<br><li>You have Selected Perpone <br> Turquoise coloured handbag for women from Peperone. Featuring a fold-over flap with magnetic closure, a detachable shoulder strap, a top handle and gold... more ›
Rs. 2030</li>");
   $total+=2030;
   
   
    
	}
	
	if(!empty($_POST['c3']))
{    
   echo("<br><li>You have Selected Liberty <br> A blue coloured handbag for women from Liberty. It is made from Polyurethane (PU).
Rs. 1199</li>");
   $total+=1199;
    
	}
	
	if(!empty($_POST['c4']))
{    
   echo("<br><li>You have Selected HighDEsign <br> A purple coloured wallet for women from Butterflies. It is made from non-leather material.
Rs. 799 </li>");
   $total+=799;
    
	}
	if(!empty($_POST['c5']))
{    
   echo("<br><li>You have Selected Kara <br> Kara offers a black coloured wallet for women. It is made of leather.Rs. 700 </li>");
   $total+=700;
    
	}
	if(!empty($_POST['c6']))
{    
   echo("<br><li>You have Selected MissBentte <br> Green coloured wallet for women from Butterflies. It is made from non-leather material.
Rs. 764</li>");
   $total+=764;
    
}

if(!empty($_POST['c7']))
{    
   echo("<br><li>Black coloured belly shoes for women from Catwalk. With non-leather upper and lining, these open toe slip-ons come with block heels and have a polyureth..  </li>");
   $total+=1299;
    
}

if(!empty($_POST['c8']))
{    
   echo("<br><li>Pink coloured belly shoes for women by Catwalk. The upper and lining are made from non-leather material, while the sole is made of resin.  </li>");
   $total+=1299;
    
}
if(!empty($_POST['c9']))
{    
   echo("<br><li>  pair of pink coloured belly shoes for women by Jove. These slip-ons have non-leather upper and resin sole. The heel size is 0-3 cms. </li>");
   $total+=799;
    
}
if(!empty($_POST['c10']))
{    
   echo("<br><li> Red coloured sandals for women by Jove. This pair has a non-leather upper and lining, and the sole is made of resin. </li>");
   $total+=649;
    
}
if(!empty($_POST['c11']))
{    
   echo("<br><li>Blue coloured, open-toe, gladiators for women from Miss Bennett. The upper and lining is made of non-leather material and it has Thermoplastic Rubber (TPR) sole  </li>");
   $total+=764;
    
}	
	echo("<br> <br>Your Net Amount=". $total .".00 Rs </h2>");
	echo("</ul>");
?>

</body>
</html>
