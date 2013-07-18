<?php 

include 'class.php';
?>


<html>
<head>
<script type="text/javascript">
function openWindow()
{

window.open('new.php','popUpWindow','height=500px, width=500px');

	}

</script>
</head>

<body>
<form action="new.php">
<input type="button" name="b" value="Add user" onclick=openWindow()>
<table border="">
<tr> 
    <th> First Name </th>
    <th> Last Name </th> 
    <th> Email </th>
     <th> gender </th>
      <th> Date of Birth </th>
       <th>Phone</th>
        <th> Address</th>
</tr>
<?php 
$obj=new user();
$record=$obj->getData();

while($row=mysql_fetch_array($record))
{

?>

	<tr>

	<td> <?php echo  $row['firstname'];  ?> </td>
	<td> <?php echo  $row['lastname'];  ?> </td>
	<td> <?php echo  $row['email'];  ?> </td>
	<td> <?php echo  $row['dob'];  ?> </td>
	<td> <?php echo  $row['gender'];  ?> </td>
	<td> <?php echo  $row['phone'];  ?> </td>
	
	</tr>
<?php 

}
?>

</table>
</form>

</body>

</html>