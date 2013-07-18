<?php 
include 'mysql.class.php';

$o=new Mysql();

$o->connect();
$o->setHost();
$o->setPassword();
$o->setData("t");
$o->selectDatabase();

?>