<!---------------------------------------------------------------------------------------------
Example client script for JQUERY:AJAX -> PHP:MYSQL example
---------------------------------------------------------------------------------------------->
<html>
  <head>
    <script language="javascript" type="text/javascript" src="jquery.js"></script>
  </head>
  <body>
  <!---------------------------------------------------------------------------------------------
  1) Create some html content that can be accessed by jquery
  ---------------------------------------------------------------------------------------------->
  <h2> Client example </h2>
  <h3>Output: </h3>
  <div id="output">this element will be accessed by jquery and this text will be replaced</div>



<form method="POST" id="form1">



First<input type="text" id="userName" name="userName">
Last<input type="text" id="lastName" name="lastName"><br>
<input type="button" name="btn" id="btn" value="click" onclick="f()">

</form>
  <script id="source" language="javascript" type="text/javascript">



function f(){

//var userName=$("#userName").val();
$.ajax({ 
      type: "POST",
      url: 't1.php',                  //the script to call to get data          
      data: "userName"+userName,                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
     // data: $('#userName').serialize(),
        beforeSend: function() {

        },
        success: function(response){
            alert(response);
   },
        complete: function () {
            
        },
        error: function(){
            
        }
    });

}
   
  </script>  
  </body>
</html>  
