$output1 = array ();
$num;
$primes = array (2,3,5,7,11,13,17,19,23,29,31,37,41,43,47,53,59,61,67,71,73,79,83,89,97);
function GetLastDigits($t, $string1) {
GLOBAL $output1, $num, $primes;
$inputs = preg_split("/[(\\)\\,]/", $string1, -1, PREG_SPLIT_NO_EMPTY);
for ($i = 0; $t-- > 0;) {
$num = $inputs[2 * $i];
$lineNum = $inputs[2 * $i++ +1];
for($o = ($lineNum % $num) + 1;(($lineNum = (int) ($lineNum / $num)) > 0); $o *= (($lineNum % $num) + 1));
$output1[] = array_search($num, $primes) === FALSE ? 0 : $o;
}
}
?>