//index.php

<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src='jq.js'></script>
<script type="text/javascript" src='js.js'></script>
<title>Template Engine</title>
</head>
<body>


<?php
require_once ('db.php');
$res = mysql_query ( "select * from template" ) or die ( "SDs" );
?>
Populate Data
<form action=template.php>
		<select name=tempselect>
<?php

while ( $row = mysql_fetch_array ( $res ) ) {
	echo "<option>" . $row ['name'] . "</option>";
}
?>
</select> <input type="submit" name=submit value=submit>
	</form>
	<br />
	<br />
	<br />
	View Data
<?php
$res = mysql_query ( "select * from template" ) or die ( "SDs" );
?>
<form action=showdata.php>
		<select name=tempselect>
<?php

while ( $row = mysql_fetch_array ( $res ) ) {
	echo "<option>" . $row ['name'] . "</option>";
}
?>
</select> <input type="submit" name=submit value=submit>
	</form>
		<br />
	<br />
	<br />

	<button id="addelement">Add Element</button>
	<select id="tempopt">
		<option value=1>Text Box</option>
		<option value=2>Text Area</option>
		<option value=3>Check Box</option>
		<option value=4>Combo Box</option>
	</select>
	<form id='formcreatetemplate' action='createtemplate.php'>
		<label>Create New Template <br/>Name</label>
		<input type="text" name="newtemp" id="newtemp">
		<table id="template">
			<thead>
				<tr>
					<th>Element</th>
					<th>Caption</th>
					<th>Options</th>
				</tr>
			</thead>

		</table>
		<input type="submit" name=submit value=submit>
	</form>
</body>

</html>