<?php
$output1;

function GetJumpCount($climbUp,$climbDown,$noOfWalls,$wallHeights)
{
GLOBAL $output1;

$jump = $climbUp - $climbDown;
$jump1 = $jump - 1;
for ($i = 0; $i < $noOfWalls; $i++)
{
$withoutLastJump = $wallHeights[$i] - $climbUp;
 $output1 += ($withoutLastJump > 0)?
((int)(($withoutLastJump + $jump1)/$jump)) +1: 1; 
}
return $output1;
}
$res=GetJumpCount(5,1,2,array(9,10));
echo "total number of jumps are" .$res;
?>