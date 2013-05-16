
//show data.php
<?php
/* print_r($_REQUEST);
 */
require_once('db.php');
$table=$_REQUEST['tempselect'];
$res=mysql_query("select * from $table") or die("SDs");
$i=0;
while($row[]=mysql_fetch_assoc($res)){ }; 


$row1="";
	foreach ($row as $key =>$val) {
		if($i==0) {
			$head= "<tr>";
		}
		$row1.= "<tr>";
		foreach ($val as $key1=>$val1) {
				if($i==0) {
					$head.="<td>$key1</td>";
				}
			$row1.="<td>$val1</td>";
		}
		$i++;
		$row1.= "</tr>";
	}
	$head.= "</tr>";
	$row1.= "</table>";
	echo "<table border=1>";
	echo $head;
	echo $row1;

	
	
	

?>