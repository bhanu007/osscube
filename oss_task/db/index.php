<html >
<title>Index page</title>
<head>
<?php  
require_once ('con.php');


?>
</head>
<body>
<a href="addR">ADDDDDD</a>
<table border='1'>
<th> Sno </th> <th> First Name  </th> <th> Last Name  </th> <th> Department </th> <th>Salary  </th>  
<?php 
$sql="select * from employee_table" ;
$result=mysql_query($sql)or die(mysql_error());

while($row=mysql_fetch_array($result)or die(mysql_error()))
{
?>
	
	
	<tr>
	<td> <?php echo  $row['sno']; ?></td>
	<td> <?php echo  $row['firstName'];  ?> </td>
	<td> <?php echo  $row['lastName'];  ?> </td>
	<td> <?php echo  $row['department'];  ?> </td>
	<td> <?php echo  $row['salary'];  ?> </td>
	<td> <a href="addRecord.php?id=<?php  echo $row['sno']; ?>"> Update </a> 
	</td>
	<td> <a href="deleteRecord.php?id=<?php  echo $row['sno']; ?>"> delete </a> 
	</td>
	</tr>
<?php 

}
?>










?>





</table>

</body>
</html>