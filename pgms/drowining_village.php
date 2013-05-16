<?php
$output1;
function DrowningVillage($input1,$input2,$input3)
{
GLOBAL $output1;
$input1 = count($input2);
if($input3[0] < 0)	$input3[0] = $input3[0] * (-1);
if($input3[1] < 0)	$input3[1] = $input3[1] * (-1);
$input3[0] = $input3[0] + $input3[1];
$input3[1] = $input3[0] - $input3[1] - 1;
$input3[0] = $input3[0] - $input3[1] - 2;
$adjcnt = array();
$adjcnt[0][0] = $input3[0];
$adjcnt[0][1] = $input3[1];
$adjcnt[0][2] = $input2[$input3[0]][$input3[1]];
$adjcnt[0][3] = 1;
try
{
for($outer = 1, $j = 1, $rank = 1; $outer < ($input1 * $input1); $outer++)
{
for($t = 0; $t < count($input3); $t = $t + 2)
{
if($input3[$t] == -1) break;
if($input3[$t] - 1 >= 0)
{
$flag = 1;
for($s = 0; $s < $j; $s++)
{
if($adjcnt[$s][0] == ($input3[$t] - 1) && $adjcnt[$s][1] == $input3[$t+1])
{
$flag = 0;
break;
}
}
if($flag)
{
$adjcnt[$j][0] = $input3[$t] - 1;
$adjcnt[$j][1] = $input3[$t+1];
$adjcnt[$j][2] = $input2[$adjcnt[$j][0]][$adjcnt[$j][1]];
$adjcnt[$j][3] = 0;
$j++;
}
}
if($input3[$t] + 1 < $input1)
{
$flag = 1;
for($s = 0; $s < $j; $s++)
{
if($adjcnt[$s][0] == ($input3[$t] + 1) && $adjcnt[$s][1] == $input3[$t+1])
{
$flag = 0;
break;
}
}
if($flag)
{
$adjcnt[$j][0] = $input3[$t] + 1;
$adjcnt[$j][1] = $input3[$t+1];
$adjcnt[$j][2] = $input2[$adjcnt[$j][0]][$adjcnt[$j][1]];
$adjcnt[$j][3] = 0;
$j++;
}
}
if($input3[$t+1] - 1 >= 0)
{
$flag = 1;
for($s = 0; $s < $j; $s++)
{
if($adjcnt[$s][0] == $input3[$t] && $adjcnt[$s][1] == ($input3[$t+1] - 1))
{
$flag = 0;
break;
}
}
if($flag)
{
$adjcnt[$j][0] = $input3[$t];
$adjcnt[$j][1] = $input3[$t+1] - 1;
$adjcnt[$j][2] = $input2[$adjcnt[$j][0]][$adjcnt[$j][1]];
$adjcnt[$j][3] = 0;
$j++;
}
}
if($input3[$t+1] + 1 < $input1)
{
$flag = 1;
for($s = 0; $s < $j; $s++)
{
if($adjcnt[$s][0] == $input3[$t] && $adjcnt[$s][1] == ($input3[$t+1] + 1))
{
$flag = 0;
break;
}
}
if($flag)
{
$adjcnt[$j][0] = $input3[$t];
$adjcnt[$j][1] = $input3[$t+1] + 1;
$adjcnt[$j][2] = $input2[$adjcnt[$j][0]][$adjcnt[$j][1]];
$adjcnt[$j][3] = 0;
$j++;
}
}
}
$tmplist = array();
for($i = 0, $k = 0; $i < $j; $i++)
{
if($adjcnt[$i][3] == 0)
{
$tmplist[$k] = $adjcnt[$i][2];
$k++;
}
}
$min = min($tmplist);
for($i = 0; $i < count($input3); $i++)	$input3[$i] = -1;
for($i = 0, $k = 0; $i < $j; $i++)
{
if($adjcnt[$i][2] == $min && $adjcnt[$i][3] == 0)
{	
$input3[$k] = $adjcnt[$i][0];
$input3[$k+1] = $adjcnt[$i][1];
$adjcnt[$i][3] = ++$rank;

$k = $k + 2;
$outer++;
}
} $outer--;
}
for($i = 0; $i < ($input1 * $input1); $i++)
$output1[$i] = 0;
for($i = 0; $i < ($input1 * $input1); $i++)
$output1[$adjcnt[$i][3] - 1] = $adjcnt[$i][2];
}
catch(Exception $exp)
{
$output1 = $exp;
}
return $output1;
}
$res=DrowningVillage(3,array(array(3,3,8),array(2,9,2),array(7,1,4)),array(2,3));
print_r($res);
?>