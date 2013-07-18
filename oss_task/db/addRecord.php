<html >
<?php  
require_once ('con.php');
$id=$_REQUEST['id'];

?>
<title></title>
<head>

</head>
<body>

<form method="post" action="updateRecord.php">

<?php 
$sql="select firstName,lastName,department,salary from employee_table where sno='$id'" ;

$result=mysql_query($sql)or die(mysql_error());

$row=mysql_fetch_array($result) or die("fgfgjfjg");
?>
<input type="hidden" name="id" value="<?php echo $id; ?>">
First Name :* <input type="text" name="f" value="<?php  echo $row['firstName']; ?>" > <br> 
Last Name : <input type="text" name="l" value=<?php  echo $row['lastName']; ?> > <br>
Department : <input type="text" name="dept" value=<?php  echo $row['department']; ?> > <br>
Salary : <input type="text" name="sal" value=<?php  echo $row['salary']; ?> > <br>

<input type="submit" value="Submit" > 

</form>



</body>
</html>