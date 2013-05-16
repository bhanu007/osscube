<?php
mysql_connect( "localhost", "root", "" ) or die ("some error");
$x=mysql_select_db ( 'template' );
//print_r($_REQUEST);
foreach ($_REQUEST as $key => $value) {
	$template_name=$value;
}
$sql="select temp_id from tname where template_name='$template_name' ";
$res=mysql_query($sql);
while($r=mysql_fetch_assoc($res)){
	$temp_id=$r['temp_id'];
}
echo "<h1><center>Template Data<center></h1>";
echo "<table border=1 >";

$sql3="select * from $template_name";
$res3=mysql_query($sql3);

while($r3=mysql_fetch_assoc($res3)){
	echo "<tr>";
	foreach ($r3 as $key => $value) {
   echo"<th> ".$key."</th>";
   	}
	 echo"</tr><tr>";	
	foreach ($r3 as $key => $value) {
   echo"<td> ".$value."</td>";
	}
	echo "</tr>";
}
while($r3=mysql_fetch_assoc($res3)){
		
}
echo "</table>";

?>