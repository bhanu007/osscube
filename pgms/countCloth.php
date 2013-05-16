<?php
$output1;

function GetVisibleCount($ropeLength,$clothesCount,$clothesPosition)
{
GLOBAL $output1;


$rope = array();
$rope_number = 1;

foreach($clothesPosition as $clothPosition)
{
$start = $clothPosition[0];
$width = $clothPosition[1];

if($start < $ropeLength)
{
$inc = $start;
while(($inc < ($width+$start)) && ($inc < $ropeLength))
{
$rope[$inc] = $rope_number;
$inc++;
}
}
$rope_number++;
}
return $output1 = count(array_unique($rope));
}
$res=GetVisibleCount(10,5,array(array(0,4),array(6,3),array(1,5),array(6,4),array(7,2)));
echo   "Total number of visible clothes are=".$res;
?>