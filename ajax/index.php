<script src="jquery-1.9.1.min.js" > </script>


<h1> <center> Pass Data With Ajax   </center>  </h1>
<br>
<br>
<form method="get" >
Name <input type="text" id="name" name="name" > <br>
Email <input type="text" id="email" name="email" ><br>
<span id="result" name="result">   </span>
<input type=button onclick="c()" value='butoon'>
</form>


<script>

function c(){
	var name=$("#name").val();
	var email=$("#email").val();
	$.ajax({
        type: "GET",
        url: "process.php",
        data: 'name='+name+'&email='+email,
        success: function(result){
        $("#result").html(result);
   }
});
	
//	$('#result').load('process.php','name='+name+'&email='+email	)
}



</script>