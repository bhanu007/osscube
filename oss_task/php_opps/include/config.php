<?php
$db_name="b";
$uname="root";
$pwd="root";
$host="localhost";

class DB_Class {

    function __construct() {
        $connection = mysql_connect($host,$uname,$pwd) or die("coonn");       mysql_select_db($db_name,$connection) or die("db");
    }

}
$x=new DB_Class();
?>
