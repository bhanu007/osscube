<?php
$output1 = 0;

function GetBestBowlerCount($input1,$input2)
{
GLOBAL $output1;

//Write code here
$input2 = explode(',',substr($input2,1,-1));

while(isset($input2[--$input1]))
{

$player_match_details = "$input2[$input1]";
$j = 0;
$player_wickets = 0;
while( isset($player_match_details[$j]))
{

$player_wickets += $player_match_details[$j++];
}

if($player_wickets/$j >= 5)
++$output1;
}
return $output1;
}
$res=GetBestBowlerCount(3,array("1","2","3"));
echo $res;
?>