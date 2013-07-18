<?php
session_start();
include 'functions.php';
$user = new User();

// Checking for user logged in or not
/*if (!$user->get_session())
{
   header("location:login.php");
}
*/
if ($_REQUEST["register_btn"] == "Register") 
{

echo ('hhl');
$f=$_GET['name'];
$l=$_GET['username'];
$n=$_GET['password'];
$m=$_GET['email'];

 $user->register_user(12222,122,1,1);//$_GET['name'],$_GET['username'],$_GET['password'],$_GET['email']);
if ($register) {
        // Registration Success
        echo 'Registration  successful <a href="login.php">Click here</a> to login';
    } else {
        // Registration Failed
        echo 'Registration failed. Email or Username already exits please try again';
    }
}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
      
        <title> Register</title>
		<style>
		body
		{
		font-family:Arial, Helvetica, sans-serif;
		}
		</style>
		<script language="javascript" type="text/javascript"> 
		
	
            function submitregistration() {
                var form = document.reg;
				
     
 
if(form.name.value == "")
{
alert( "Enter name." );
return false;
}
else if(form.username.value == "")
{
alert( "Enter username." );
return false;
}
else if(form.password.value == "")
{
alert( "Enter password." );
return false;
}
else if(form.email.value == "")
{
alert( "Enter email." );
return false;
}
 
 
}
 
 
	</script> 
    </head>
    <body>
        <div id="container">
            
            <div id="main-body">
                <br/><br/>
                <form method="GET" action="register.php"  id="register_form" name="reg">
                    <div class="head">
                        <b> I am new user !</b><br/><br/>
                    </div>
                    <label>Full Name</label><br/>
                    <input type="text" name="name"  required="true"/><br/><br/>
                    <label>Username</label><br/>
                    <input type="text" name="username"  required="true"/><br/><br/>
                    <label>Password</label><br/>
                    <input type="password" name="password" required="true"/><br/><br/>
                    <label>Email</label><br/>
                    <input type="text" name="email" id="email"  required="true"/><br/><br/>
                    <input type="submit" name="register_btn" value="Register"/><br/><br/>
                    <label><a href="login.php">I already Registered. Login here</a></label>                    
                </form>
				
				
            </div>
            
        </div>
    </body>
</html>
