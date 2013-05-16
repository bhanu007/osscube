<?php 
mysql_connect( "localhost", "root", "" ) or die ("some error");
$x=mysql_select_db ( 'template' );
print_r($_REQUEST);
$field="";
$val="";
foreach ($_REQUEST as $key => $value) {
  $table=$key;
  break;
 }

foreach ($_REQUEST as $key => $value) {
	
	
	 if(is_Array($value)) {
		 $field.="$key ,";
		 $sval=implode(",",$value);
		 $val.="'$sval',";
		}
		else if($key!=$table && $key!='submit'){
		$field.="$key ,";
		$val.="'$value',";
	}
}
$field=rtrim($field," ,");
$val=rtrim($val," ,");
$sql= "insert into $table ($field) values($val)";
$res=mysql_query($sql);
if($res) {
	echo "Data Submitted";
} else {
	echo "Data NOt Submitted";
}
?>