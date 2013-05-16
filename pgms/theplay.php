<?php
$output1;
function getPlayCount($input1,$input2) { 
global $output1; 
$str_array=explode(",(",$input2); 
foreach($str_array as $case) {
$p = explode(",",
preg_replace("/\(|\)|\d+:/","",$case)); 
for($i=4,$sum=0; $i<$p[2]; $i++) 
$sum = $sum + nCr($p[0],$i)*nCr($p[1],$p[2]-$i);
$output1[]=$sum;
return $output1;
}
} 
function nCr($n, $r){
if ($r > $n) return 0; $diff=($n-$r); if($r==1 || $diff==1) { return $n; }
 if ($r == 0 || $n == $r) return 1; if ($r < $diff) $diff = $r;$top_result=1;
  for($i=0; $i<$diff; $i++) $top_result*=($n-$i); $bot_result=1;
  	for($j=$diff; $j>1; $j--) $bot_result*=$j; 
  		return $top_result/$bot_result;
}
$res=getPlayCount(1,array((5),(2),(5)));
print_r($res);
?>