<?php 
$db_name="employee";
$uname="root";
$pwd="root";
$host="localhost";

$con=mysql_connect($host,$uname,$pwd) or die(mysql_error());
mysql_select_db($db_name) or die(mysql_error());






?>