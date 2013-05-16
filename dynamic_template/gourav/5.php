//template.php
<?php 
require_once('db.php');
echo "<pre>";
print_r($_REQUEST);
$tempName=$_REQUEST['tempselect'];
$sql= "select t.id,e.id as eid, t.name as tname,e.name as ename,e.type from template t
	join elements e
	on 
	e.temp_id=t.id
	where t.name='$tempName'";
$res=mysql_query($sql) or die("ss");	

echo "<form name=$tempName action='process.php'>";
echo "<input type='hidden' name='tablename' value='$tempName'>";
while($row=mysql_fetch_array($res)) {
	echo "<br/>";
	if($row['type']==0) {
		echo " <label >".$row['ename']."</label>";
		echo " <input type='text' name='".$row['ename']."' >";
	}
	if($row['type']==1) {
		echo " <label >".$row['ename']."</label>";
		echo " <textarea name='".$row['ename']."' ></textarea>";
	}
	if($row['type']==2) {
		echo " <label >".$row['ename']."</label>";
		$sql1= "select name from options where temp_id='".$row['id']."' AND 
				element_id='".$row['eid']."'";
			$res1=mysql_query($sql1) or die("ss");
		while($row1=mysql_fetch_array($res1)) {
			echo "<label>".$row1['name']."</label><input type='checkbox' name='".$row['ename']."[]'  value='".$row1['name']."' >";
		}
	}
	if($row['type']==3) {
		echo " <label >".$row['ename']."</label>";
		$sql1= "select name from options where temp_id='".$row['id']."' AND 
				element_id='".$row['eid']."'";
			
		$res1=mysql_query($sql1) or die("ss");
		echo "<select name='".$row['ename']."'>";
		while($row1=mysql_fetch_array($res1)) {
			echo "<option>".$row1['name']."</option>";
		}
		echo "</select>";
	
	}
}
?>
<input type="submit" name=submit value=submit>

</form>