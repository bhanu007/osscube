<?php
$output1;

function GetSchedule($scheduleOptions,$startDate,$weekDay,$matchDate,$minPractices,$maxPractices){
GLOBAL $output1;

$output1 = array();

for($i=0; $i < $scheduleOptions; $i++){
$date1 = mktime(0, 0, 0, substr($startDate[$i], 0, 2), substr($startDate[$i], 2, 2), 2012);
$date2 = mktime(0, 0, 0, substr($matchDate[$i], 0, 2), substr($matchDate[$i], 2, 2), 2012);
$days = ($date2 - $date1) / (60 * 60 * 24);
$weeks = floor($days / 7);
$remaining = $days % 7;
$result = -1;
for ($j = $minPractices[$i]; $j <= $maxPractices[$i]; $j++){
for ($y = 0; $y <= $remaining; $y++){
if($weeks){
$x = ($j - $y) / $weeks - $y;
}else{
$x = 0;
}
$x = round($x);
//echo "x=$x y=$y ";
if($x >= 0 && // not negative
//$x == floor($x) && // is integer
$x <= 7 - $remaining && // 
$x + $y <= 7 && // days/week not great than 7
$x * $weeks + $y * ($weeks + 1) == $j){ // adds up

//echo "x=$x y=$y $j";
$result = $x + $y;
break;
}
}
}
if($result !== -1){

array_push($output1, $result);
}else{

array_push($output1, 0);
}

}

return $output1;
}

// N N Y
var_export(GetSchedule(3,
array('0401', '0801', '0901'),
array('Sunday', 'Wednesday', 'Saturday'),
array('0910', '1007', '1004'),
array(4, 12, 12),
array(6, 14, 14)), true) . '<br/>';

echo '<br/>';

// Y Y N
var_export(GetSchedule(5,
array('0105', '0101', '0105', '0101', '1101'),
array('Thursday', 'Thursday', 'Thursday', 'Thursday', 'Thursday'),
array('0129', '0104', '0124', '0121', '1122'),
array(8, 4, 4, 4, 1),
array(9, 4, 4, 4, 2)), true) . '<br/>';
$res=GetSchedule(3,array(0401,0801,0901),array('Sunday','Wednesday','Saturday'),array(9010,1007,1004),array(4,12,12),array(6,14,14));
print_r($res);
?>