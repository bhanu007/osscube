<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<form method="get" action="adddatatemp.php" onsubmit="return valid()">

<?php
mysql_connect( "localhost", "root", "" ) or die ("some error");
$x=mysql_select_db ( 'template' );

foreach($_REQUEST as $key){
}
echo "<input type='hidden' name='$key'>";
$sql="select temp_id from tname where template_name='$key'";
$res=mysql_query($sql);
while($i=mysql_fetch_assoc($res)){

	$temp_id=$i['temp_id'];
	
}
$sql1="select name,type,required from element where id='$temp_id'";
 $res1=mysql_query($sql1);
while($r=mysql_fetch_assoc($res1)){
	
	if($r['type']==1){
		if($r['required']==1){
            //todo.....

		}
		echo $r['name']."<input class='tx' type='textbox' name='".$r['name']."'><br>";
	}
	else if($r['type']==2){
		
		
		echo $r['name']."<textarea name='".$r['name']."'> </textarea>";
	}

	else if($r['type']==3)
      {
		echo  "<label>". $r['name']."</label><br>";
		$n=$r['name'];
	$sql="select eid from element where (id='$temp_id' and type='3')";
		$res=mysql_query($sql);
	while($r=mysql_fetch_assoc($res)){
      $eid=$r['eid'];
	}
        $sql1="select name from element_data where id='$eid'";
     $res1=mysql_query($sql1);
     while($r1=mysql_fetch_assoc($res1)){
        echo $r1['name']."
        <input type='checkbox' name='".$n."[]' value='". $r1['name']."'>";
	}

   }
	else if($r['type']==4){
       echo  "<label>". $r['name']."</label><br>";
		$n=$r['name'];
     $sql="select eid from element where (id='$temp_id' and type='4')";
     $res=mysql_query($sql);
	while($r=mysql_fetch_assoc($res)){
      $eid=$r['eid'];
	}
	 $sql1="select name from element_data where id='$eid'";
     $res1=mysql_query($sql1);
     echo "<select name='".$n."'>";
     while($r1=mysql_fetch_assoc($res1)){
       
       echo "<option>".$r1['name']."</option>";
	}
     echo "</select>";
	}



} 
?>
<input type="submit" id="sub">
</form>
