
<style>
#AddMore{
	float: right;
	margin-right: 50%;
	
}
#opt1,#add1{
	display: none;
}
</style>
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>



<?php 

mysql_connect( "localhost", "root", "root" ) or die ("some error");
$x=mysql_select_db ( 'template' );

foreach($_REQUEST as $key=>$v){
}

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
		echo"<input type='hidden' id='temp_id' value='".$temp_id."'>";
		echo $r['name']."<input class='tx' type='textbox' name='".$r['name']."'>";
		echo"<input type='button' onclick='del(this.id)' value='Delete' id='".$r['name'] ."' name='".$r['name'] ."'><br>";
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
<input type='button' id="AddMore" value="AddMore" onClick=add11()>  
<select id="opt1">
<option selected="selected" value="0">select</option>
<option>TextBox</option>
<option>TextArea </option>
<option>CheckBox</option>
<option>ComboBox</option>

</select>  <input type="button" id="add1" value="Add">
<input type="submit" id="sub1" value="save">
<form name="template_content1" id="template_content1">
</form>
<script>
function add11(){
$("#opt1").show();
$("#add1").show();
var v=$("#temp_id").val();
alert(v);

}
function del(a){
	alert(a);
		$.ajax({
            type: "GET",
             url: "template_action.php",
             data: a.serialize(),//+"&template_name="+$("#templateSelect").val(),
                     success: function(data) {
	 	             
	                    return false;
	             },
	             error: function() {
	                     alert("Error Occurred While Processing Your Request");
	                 }
         });


		
	
}

ci=1;

$("#add1").click(function(){
	
	
var val=$("#opt1").val();
if(val=="TextBox"){
	    ci++;	 	
	 	$("<br>**REQuired <input type='checkbox'  name=rbox_"+ci+">").appendTo("#template_content1");
	$("<input type='textbox' placeholder='label' id='text' name=txtbox_"+ci+">").appendTo("#template_content1");
		$("#sub").show();
 
}

else if(val=="TextArea"){
	 ci++;alert("hjhjh");
	 	$("<br>**REQuired <input type='checkbox'  name=rabox_"+ci+">").appendTo("#template_content1");
		$("<input type='textbox' placeholder='label' name='txta_"+ ci+"'>").appendTo("#template_content1");	
	$("#sub").show();
	
}
else if(val=="CheckBox"){
		ci++;
	$("<br><input type='text' placeholder='Tittle'  name='checkl_"+ci+"'>").appendTo("#template_content1");	
	$("<br><input type='text' placeholder='options' name='checkopt_"+ci+"'>").appendTo("#template_content1");
	$("<input type='button' value='Add more' class='addcheck1' id='addcheck1'>").appendTo("#template_content1");
      $(".addcheck1").click(function(){
      ci++;
       $("<br><input type='text' placeholder='options'  name='checkopt_"+ci+"'>").appendTo("#template_content1");	

      });

	$("#sub").show();
	
	
}
else if(val=="ComboBox"){
	ci++;
	$("<br><input type='text' placeholder='Tittle'  name='combo_"+ci+"'>").appendTo("#template_content1");	
    $("<br><input type='text' placeholder='options' name='combopt_"+ci+"'>").appendTo("#template_content1");
    $("<input type='button' value='Add more' class='addcombo' id='addcombo'>").appendTo("#template_content1");
     $(".addcombo").click(function(){
     ci++;
    $("<br><input type='text' placeholder='options'  name='combopt_"+ci+"'>").appendTo("#template_content1");	
     });
	$("#sub").show();

   }
	
});


</script>