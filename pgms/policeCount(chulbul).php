<?php 
$output1; 
function BalanceCapability($policeCount,$stationCount,$policeCapability)
{ 
GLOBAL $output1; 
sort($policeCapability);
$st_cap = array();
$d = ($policeCount / $stationCount);
$max_p_stat = ceil($d);
$min_p_stat = floor($d);

$no_ele_with_balance = ($policeCount % $stationCount);

$sta_cap = array();
for ($m = 0; $m < $stationCount; $m++)
{
$sta_cap[$m][0] = 0;
$sta_cap[$m][1] = 0;
}
if ($stationCount < $policeCount)
{
$temp_cap = $policeCapability; 
rsort($temp_cap);


for ($k = 0; $k < count($temp_cap); $k++)
{
for ($m = 0; $m < $stationCount; $m++)
{
if ($sta_cap[$m][1] <= $min_p_stat)
{
if ($min_p_stat == $sta_cap[$m][1])
{
if ($no_ele_with_balance > 0)
{
$sta_cap[$m][0] += $temp_cap[$k];
$sta_cap[$m][1] += 1;
$sta_cap = sort_arr($sta_cap);
unset($temp_cap[$k]);
$temp_cap = array_values($temp_cap);
$k--;
$no_ele_with_balance--;
break;
}
}
else
{
$sta_cap[$m][0] += $temp_cap[$k];
$sta_cap[$m][1] += 1;
$sta_cap = sort_arr($sta_cap);
unset($temp_cap[$k]);
$temp_cap = array_values($temp_cap);

$k--;

break;
}
}
}
}
for ($h = 0; $h < $stationCount; $h++)
{
$st_cap[$h] = $sta_cap[$h][0];
}
}
else
{
for ($n = 0; $n < $stationCount; $n++)
{
if ($n < $policeCount)
{
$st_cap[$n] = $policeCapability[$n];
}
}
}
sort($st_cap);
rsort($st_cap);
$output1 = $st_cap;
return $output1;
} 
function sort_arr($arr)
{ 
$temp1 = 0;
$temp2 = 0;
for ($k = 0; $k < count($arr)-1; $k++)
{
if ($k >= 0)
{
if ($arr[$k][0] > $arr[$k + 1][0])
{
$temp1 = $arr[$k + 1][0];
$temp2 = $arr[$k + 1][1];
$arr[$k + 1][0] = $arr[$k][0];
$arr[$k + 1][1] = $arr[$k][1];
$arr[$k][0] = $temp1;
$arr[$k][1] = $temp2;
$k = $k - 2;
}
}
}
return $arr;
}
$res=BalanceCapability(5,3,array(10,20,90,200,100));
print_r($res);
?>