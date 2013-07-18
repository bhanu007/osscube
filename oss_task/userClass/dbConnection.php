<?php 


	$DB_SERVER     		= "localhost";                              // Database Server machine
    $DB_LOGIN      		= "root";                                   // Database login
	$DB_PASSWORD   		= "root";                                       // Database password
	$DB_COMMON     		= "t";                           // Database name
	mysql_connect($DB_SERVER,$DB_LOGIN,$DB_PASSWORD) or die("error 1");
	$x=mysql_select_db($DB_COMMON) or die("error 2");
	
	
	?>