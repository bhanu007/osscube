<?php
// Fill up array with names
$a[]="Gaurav";
$a[]="Nancy";
$a[]="Ashwani";
$a[]="Shashank";
$a[]="Megha";
$a[]="Deepika";
$a[]="Abhishek";
$a[]="Ramandeep";
$a[]="Avni";
$a[]="Saurabh";
$a[]="Anil";
$a[]="Jasleen";
$a[]="Praveen";
$a[]="Ankit";
$a[]="Bhanu";

//get the q parameter from URL
$q=$_GET["q"];

//lookup all hints from array if length of q>0
if (strlen($q) > 0) {
	$hint="";
	for($i=0; $i<count($a); $i++) {
		if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q)))) {
			if ($hint=="") {
				$hint=$a[$i];
			} else {
				$hint=$hint." , ".$a[$i];
			}
		}
	}
}

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint == "") {
	$response="no suggestion";
} else {
	$response=$hint;
}

//output the response
echo $response;
?>
