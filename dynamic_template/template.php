<head>    <title> Dynamic Template</title>
<style>
#sub{
	display: none;
}
#list{
	border:1px ;
	width: 200px;
	height: 100px;
	border-radius:4px;
-webkit-border-radius:4px;
box-shadow: 2px 2px 2px 2px  #4a8df8;
margin-left: 10px;
}
#list1{
	border:1px ;
	width: 200px;
	height: 100px;
	border-radius:4px;
-webkit-border-radius:4px;
box-shadow: 2px 2px 2px 2px  #4a8df8;
float: right;
margin-right: 10px;
margin-top:-100px;
}
#list3{
	border:1px ;
	width: auto;
	height: auto;
	border-radius:4px;
-webkit-border-radius:4px;
box-shadow: 2px 2px 2px 2px  #4a8df8;

}
#list h3{
	margin-top: 4px;
	padding-top: 4px;
}
</style>
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
</head>
<body>
	<h1> <center>   Welcome To Dynamic Template </center> </h1>

<div id="list">
	<h3> <center> Available Templates</center></h3>
<form method="get" action="displaytemp.php">
<?php    
mysql_connect( "localhost", "root", "" ) or die ("some error");
$x=mysql_select_db ( 'template' ); 
$sql="select template_name from tname";
$res=mysql_query($sql);
echo "<select name=tempname>";
while($row=mysql_fetch_array($res)){
echo "<option>". $row['template_name']. "</option>";
}
echo "</select>";
?>
<input type="submit"> 
</form>
</div>
<DIV id="list1">
<h3> <center> Show Template Data</center></h3>
<form method="get" action="displaytempdata.php">
<?php    
mysql_connect( "localhost", "root", "" ) or die ("some error");
$x=mysql_select_db ( 'template' ); 
$sql="select template_name from tname";
$res=mysql_query($sql);
echo "<select name=tempname>";
while($row=mysql_fetch_array($res)){
echo "<option>". $row['template_name']. "</option>";
}
echo "</select>";
?>
<input type="submit"> 
</form>


</DIV>
<br>
<div id="list3">
<form name="template_content" onsubmit="return valid()" method="get" action="template_action.php" id="template_content">
<h3> <center>Create New Template </center> </h3>
<label>Template Name</label> <input type="text" id="template_name" name="template_name">
<select id="opt">
<option>TextBox</option>
<option>TextArea </option><
<option>CheckBox</option>
<option>ComboBox</option>

</select>  
<input type="button" id="add" value="Add">



<input type="submit" id="sub" value="save">
</form>
<div>

</body>
<script>
$(document).ready(function(){

	ci=1;

$("#add").click(function(){
	
	
var val=$("#opt").val();
if(val=="TextBox"){
	    ci++;
	 	
	 	$("<br>**REQuired <input type='checkbox'  name=rbox_"+ci+">").appendTo("#template_content");
	$("<input type='textbox' placeholder='label' id='text' name=txtbox_"+ci+">").appendTo("#template_content");

	
		$("#sub").show();
		
  
}
else if(val=="TextArea"){
	 ci++;
	 	$("<br>**REQuired <input type='checkbox'  name=rabox_"+ci+">").appendTo("#template_content");
		$("<input type='textbox' placeholder='label' name='txta_"+ ci+"'>").appendTo("#template_content");	
	$("#sub").show();
	
}
else if(val=="CheckBox"){
	ci++;
	$("<br><input type='text' placeholder='Tittle'  name='checkl_"+ci+"'>").appendTo("#template_content");	
	$("<br><input type='text' placeholder='options' name='checkopt_"+ci+"'>").appendTo("#template_content");
	$("<input type='button' value='Add more' id='addcheck'>").appendTo("#template_content");
      $("#addcheck").click(function(){
      ci++;
       $("<br><input type='text' placeholder='options'  name='checkopt_"+ci+"'>").appendTo("#template_content");	

      });

	$("#sub").show();
	
	
}
else if(val=="ComboBox"){
	ci++;
	$("<br><input type='text' placeholder='Tittle'  name='combo_"+ci+"'>").appendTo("#template_content");	
    $("<br><input type='text' placeholder='options' name='combopt_"+ci+"'>").appendTo("#template_content");
    $("<input type='button' value='Add more' id='addcombo'>").appendTo("#template_content");
     $("#addcombo").click(function(){
     ci++;
    $("<br><input type='text' placeholder='options'  name='combopt_"+ci+"'>").appendTo("#template_content");	
     });
	$("#sub").show();

   }
	
});
});
function valid(){

var value=$("#template_name").val();
if (value=="")
{
$("#template_name").css("background-color","#cff993");
$("#template_name").attr("placeholder","  Name canot be empty");
	return false;

}
else{return true;}

}
</script>