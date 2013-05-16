<?php 

 $output1; 
function GetOriginalScore($matchesPlayed, $playerScore) 
{ 
$validate_matchescount_flag=validateMatchesPlayed($matchesPlayed);
if($validate_matchescount_flag==false)
{
return;
}
$validate_score=validateIndividualScore($playerScore);
if($validate_score==false)
{
return;
}
GLOBAL $output1; 
$recursive_flag=false;
$mainloop_index=0;
$output1=array();
$index=0;
while($mainloop_index<$matchesPlayed)
{	
if(isset($playerScore[$mainloop_index+2]))
{
//forward consecutive check
if(($playerScore[$mainloop_index+1])==($playerScore[$mainloop_index]+1) && ($playerScore[$mainloop_index+2])==($playerScore[$mainloop_index]+2))
{
$output1[$index]=$playerScore[$mainloop_index+1];
$index++;
$mainloop_index+=3;
$recursive_flag=true;
}
//reverse consecutive check
else if(($playerScore[$mainloop_index+1])==($playerScore[$mainloop_index]-1) && ($playerScore[$mainloop_index+2])==($playerScore[$mainloop_index]-2))
{
$output1[$index]=$playerScore[$mainloop_index+1];
$index++;$mainloop_index+=3;
$recursive_flag=true;
}
else{
$output1[$index]=$playerScore[$mainloop_index];
$index++;$mainloop_index++;
}
}
else
{
//the element does not even exist. so what to do---just put the rest in the array. simple
$output1[$index]=$playerScore[$mainloop_index];
$index++;$mainloop_index++;
}
}
if($recursive_flag==true)
{
$output1=GetOriginalScore(count($output1),$output1);
}
return $output1; 
} 
function validateIndividualScore($PlayerScore)
{
$flag=true;
if(max($PlayerScore)>200)
{
echo "Individual score cannot be greater than 200";
$flag=false;
}
else if(min($PlayerScore)<0)
{
echo "Individual score cannot be less than 0";
$flag=false;
}
return $flag;
}

function validateMatchesPlayed($val)
{
$flag=true;
if($val>10000)
{
echo "Matches played cannot be greater than 10000";
$flag=false;
}
else if($val<1)
{
echo "Matches played cannot be less than 1";
$flag=false;
}
return $flag;
} 
 $res=GetOriginalScore(9,array(1,2,3,3,4,25,26,27,30));
 print_r($res);
?>