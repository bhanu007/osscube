<head>    <title> Dynamic Template</title>
<style>
#sub{
	display: none;
}
#list{
	border:1px ;
	width: 500px	;
	height: auto;
	border-radius:4px;
-webkit-border-radius:4px;
box-shadow: 2px 2px 2px 2px  #4a8df8;
margin-left: 10px;
}
#list1{
	border:1px ;
	width: 300px;
	height: auto;
	border-radius:4px;
-webkit-border-radius:4px;
box-shadow: 2px 2px 2px 2px  #4a8df8;
float: right;
margin-right: 10px;
margin-top:-100px;
}
#list3{
	border:1px ;
	width: 500px;
	height: auto;
	border-radius:4px;
-webkit-border-radius:4px;
	margin-top:50px;
box-shadow: 2px 2px 2px 2px  #4a8df8;
	display: none;
	background-color: #fff;

}
#list h3{
	margin-top: 4px;
	padding-top: 4px;
}
#addTemplate{
	float: right;
	margin-right: 10px;
	background-color: #fff;
}
#close{
float:right ;
font-weight: bold;
font-family: sans-serif;
cursor: pointer;
margin-top:1px;
margin-right:1px;
font-size:16px;
	
}
#editcontent{
	width: auto;
	height: auto;
	display: none;
	background-color: #fff;
}
</style>
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
</head>
<body>

	<h1> <center>   Welcome To Dynamic Template </center> </h1>
	<input type="button" name='addTemplate' value="Add Template Here" id="addTemplate">
<center><br><br>
<div id="list">
	<h3> <center> Available Templates</center></h3>
<form method="get" name='edit_template' id="edit_template">
<?php    
mysql_connect( "localhost", "root", "root" ) or die ("some error");
$x=mysql_select_db ( 'template' ); 
$sql="select template_name from tname";
$res=mysql_query($sql);
echo "<input type='text' name='search' id='search' placeholder='Search Template'><br>";
// echo "<select name=tempname>";
echo "<table id='tempname' name=tempname > ";
echo "<tr><th>No</th><th>Template Name</th> <th> Options</th> ";
$ci=1;
$count=1;
while($row=mysql_fetch_array($res)){

echo "<tr> <td>".$count++."</td><td>".$row['template_name']."</td><td><input type='button' onclick='ad(this.id)' value='edit' class='editt' id='".$row['template_name']."'></td></tr>";
// echo "<option>". $row['template_name']. "</option>";

}
echo "</table>";
?>
<input type="submit"> 
<br><br>
</form>
</div>
</center>

<!--  <div id="list1">  -->
<!-- <h3> <center> Show Template Data</center></h3>  -->
<!--  <form method="get" action="displaytempdata.php">  -->
 <?php    
//  mysql_connect( "localhost", "root", "root" ) or die ("some error");
//  $x=mysql_select_db ( 'template' ); 
//  $sql="select template_name from tname";
//  $res=mysql_query($sql);
//  echo "<select name=tempname>";
//  while($row=mysql_fetch_array($res)){
//  echo "<option>". $row['template_name']. "</option>";
//  }
//  echo "</select>";
//  ?>
<!--  <input type="submit">  -->
<!--  </form>  -->
<!--  </div>  -->
<br><br><br>
<center>
<div id="list3">
<form name="template_content" onsubmit="return valid()" method="get" action="template_action.php" id="template_content">
<span id='close'>X</span>
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
</center>
<div id="editcontent">


</div>
</body>
<script>
function ad(a){

	 $("body").css("background-color", "rgb(40%,40%,40%)");
     $("#list").hide();
	  $("#editcontent").show().load("edit.php",""+a+"=template");
}
$(document).ready(function(){

	$("#addTemplate").click(function(){
		$("body").css("background-color", "rgb(40%,40%,40%)");
		$("#list").hide();
		$("#list3").show();
			
		});
		$("#close").click(function(){
		$("#list3").hide();
		$("body").css("background-color", "white");$("#list").show();
			
		});
		/* $(".editt").click(function(){
			$.ajax({
	            type: "GET",
	             url: "edit.php",
	             data: $("#edit_template").serialize(),//+"&template_name="+$("#templateSelect").val(),
	          
 	             success: function(data) {
 	 	             alert(data);
 	            	     $("body").css("background-color", "rgb(40%,40%,40%)");
 	          		     $("#list").hide();
 	          		     $("#editcontent").html(data);
 	                    return false;
 	             },
 	             error: function() {
 	                     alert("Error Occurred While Processing Your Request");
 	                 }
	         });


			});
		
 */			
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