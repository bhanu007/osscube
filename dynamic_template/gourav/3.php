//process.php
<?php
require_once('db.php');
/* print_r($_REQUEST);
 */$table=$_REQUEST['tablename'];
echo "<br/>";

$field="id, ";
$values="'', ";
foreach($_REQUEST as $key =>$val ) {
	if($key!='tablename' && $key!="submit" ) {
		if(is_Array($val)) {
			$field.="$key ,";
			$sval=implode(",",$val);
			$values.="'$sval' ,";
		}else {
			$field.="$key ,";
			$values.="'$val' ,";
		}
	}
}


$field=rtrim($field," ,");
$values=rtrim($values," ,");
$sql= "insert into $table ($field) values($values)";


$res=mysql_query($sql) or die("SDs");
if($res) {
	echo "Data Submitted";
} else {
	echo "Data NOt Submitted";
}

?>