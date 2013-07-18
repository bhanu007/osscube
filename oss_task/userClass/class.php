<?php 

include 'dbConnection.php';



class user
{

	private $firstname;
	private $lastname;
	private $email;
	private $dob;
	private $phone;
	private $gender;
	
		function getData()
		{
			
			$sql="select firstname,lastname,email,gender,dob,phone from users";
			$data=mysql_query($sql);
			return($data);
					
	}
	
	
	
	function setData ()
	{
		$firstname=$_REQUEST['firstName'];
		$lastname=$_REQUEST['lastName'];
		$email=$_REQUEST['email'];
		$dob=$_REQUEST['dob'];
		$phone=$_REQUEST['phn'];
		$gender=$_REQUEST['gender'];
	//	echo "Sds";	
		$sql="insert into users (firstname,lastname,email,phone) values ('$firstname','$lastname','$email','$phone')";
	//	echo "$sql";
		$d=mysql_query($sql);
		if($d)
		{
			echo"succesfully added";
		
		
		}
		else
		{
			echo"some problem";
				
		}
		
		
	}
	
	
	

}
if($_REQUEST['firstName']!="")
{
$obj=new user();
$obj->setData();
echo "<input type=button value=close onclick=aaa() >";
}	

?>
<script type="text/javascript">
function aaa()
{
	window.opener.location.reload(true);
	window.close();

}
</script>

