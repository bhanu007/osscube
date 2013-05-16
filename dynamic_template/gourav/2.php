//create template.php
<?php
require_once('db.php');

$res=mysql_query("select * from template") or die("SDs");
/* while($row=mysql_fetch_array($res)) {
	print_r($row);
} */
$arr = $_REQUEST;
$tempName = $_REQUEST ['newtemp'];
$sql = "insert into template (name) values('$tempName')";
mysql_query ( $sql );
$sql = "select id from template where name='$tempName'";
$res = mysql_query ( $sql ) or die ( 'ss' );
$row = mysql_fetch_array ( $res );
echo $lastId = $row ['id'];
echo "<br/>";
$i = 0;
$query1 = "id int(10) primary key auto_increment, ";

foreach ($arr as $key=>$val) {
	$i++;
	$val=str_replace(" ","_",$val);
	$val=rtrim($val,"_");
	$val1=explode("_",$key);
	print_r($value);
	if($val1[0]=="text") {
		$query1.="$val varchar(50) ,";		
		$sql="insert into elements values('','$val','$lastId','$i','0')";
		mysql_query($sql);
    } 
	if($val1[0]=="texta") {
		$query1.="$val varchar(50) ,";
		$sql="insert into elements values('','$val','$lastId','$i','1')";
		mysql_query($sql);
	}
	if($val1[0]=="combo") {
		$query1.="$val varchar(50) ,";
		$sql= "insert into elements values('','$val','$lastId','$i','3')";
		mysql_query($sql);
		$comboopt="comboopt_".$val1[1];
		$options=explode(",",$arr[$comboopt]);
		$sql="select id from elements where name='$val' and temp_id='$lastId'";
		$res=mysql_query($sql) or die('ss');
		$row=mysql_fetch_array($res);
		echo $lastChId=$row['id'];
		foreach ($options as $v1) {
			$sql= "insert into options values('','$lastId','$v1','1','$lastChId')";
			mysql_query($sql);
		}
	}
	if($val1[0]=="check") {
		$query1.="$val varchar(50) ,";
		$sql="insert into elements values('','$val','$lastId','$i','2')";
		mysql_query($sql);
	    $checkopt="checkopt_".$val1[1];
		$options=explode(",",$arr[$checkopt]);
		$sql="select id from elements where name='$val' and temp_id='$lastId'";
		$res=mysql_query($sql) or die('ss');
		$row=mysql_fetch_array($res);
		echo $lastCoId=$row['id'];
		
		foreach ($options as $v1) {
			$sql="insert into options values('','$lastId','$v1','0','$lastCoId')";
			mysql_query($sql);
		}
		echo "<br/>";
	}
}
echo $query1;
echo $query1=rtrim($query1," ,");
echo $table="create table $tempName ($query1)";
mysql_query($table) or die("Table NOt Created");
echo "Everything Looks Fine!";
?>