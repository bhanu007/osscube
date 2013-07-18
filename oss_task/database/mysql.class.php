<?php 


class Mysql
{
	private $user;
	private $pass;
	private $data;
	private $host;
	private $newcon;
	private $sel;
	private $field;
	
	public function setuser()
	{
		
		$this->user="root";
	}
	
	public function getuser()
	{
		return $this->user;
		
		
	}
	
	public function setPassword()
	{
	
		$this->pass="root";
	}
	
	public function getPassword()
	{
		return $this->pass;
	
	
	}
	public function setHost()
	{
	
		$this->host="localhost";
	}
	
	public function getHost()
	{
		return $this->host;
	
	
	}
	
	public function setData($x)
	{
	
		$this->data=$x;
	}
	
	public function getData()
	{
		return $this->data;
	
	
	}


	function connect()
  	{
	
	
  		$conn= mysql_connect($this->gethost(),$this->getUser(),$this->getPassword());
  		
  		
  		if(!$conn)// testing the connection
  		{
  			die ("Cannot connect to the database ");
  		}
  		
  		else
  		{
  		
  			$this->newcon = $conn;
  		
  			echo "Connection established";
  		
  		}
  		
  		return $this->myconn;
	
	}
	
	function selectDatabase() // selecting the database.
	{
	
		$res=mysql_select_db($this->getData()) or die("<br> error 2"); 
		
		if(!$res) // if error occured display the error message
		{
	
			echo "Cannot find the database ". $this->data;
			
	
		}
		else {
			
		echo "<br>Database selected..";
		}
	}
	
	function closeConnection() // close the connection
	{
	$t=	mysql_close($this->newcon);
	
	if($t)
	{
		echo "<br>Connection closed";
	}
	else {
		
		
		echo "not closed";
	}
	}
	
	public function fncselect()
	{
		$this->sel="select $this->field from $this->tableName";
		return mysql_query($this->sel);
	}
	


}





$o=new Mysql();
$o->setUser();
$o->setHost();
$o->setPassword();
$o->setData("t");
$o->connect();
$o->selectDatabase();
$o->closeConnection();


?>