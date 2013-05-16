<?php 

class A {
    public $amount;
    function start(){
        $this->amount = 100;
    }       
}
class B extends A {    
     function end(){
        echo "200";
    }
}
$obj = new B();
echo $obj->start();
echo $obj->amount;

$string = 'doctrine';
$needle   = 'c';
$pos = strpos($needle, $string);
if($pos){
echo "found ".$pos;
} else {
echo "not found";
}
$a = 'b';
echo " the letter $a ";
echo ' the letter $a ';
$str = ' cc bb ';
echo strlen($str);
function a(&$b)
{
  $b = $b + 4;
  return 12;
}
$a = 4;
a($a);
echo $a;
$a = array('a','c');
array_unshift($a, 'f','g');
echo implode('',$a);
$a = true;
$b = false;
echo $a;
echo $b;
function test()
{
    static $count = 0;
    $count++;
    echo $count;
    if ($count < 10) {
        test();
    }
    $count--;
}
test();
class any {
   protected $thing;
   public function  __construct() {
      echo $this->thing;
   }
}
$object = new any('thing');
$string = 'doctrine';
$needle   = 'd';
$pos = strpos($string, $needle);
if($pos){
echo "found ".$pos;
} else {
echo "not found";
}
error_reporting(E_ALL ^E_NOTICE);

echo $beer;

echo "\nbeer";
$a = 	12;
echo $a << 3;
$a = array("name" => "John", 
"gender" => "male");
$b = array("name" => "Mary", 
"gender" => "female", "age" => 30);
var_export($a + $b);
preg_match('/Nov 10(th)?/',
'Today is Nov 10th, 2010', 
$referers);  
var_export($referers);
class OO {
    public function foo() {
        return "Hello World!";
    }
    public function __call($name, $arguments){
        return $name;
    }
}

$class = new OO;
echo $class->bar('do','re','mi');
$a = array(4,7,8);
$b = array(2,4,8,19,1);
$c = $a+$b;
echo implode("",$c);
echo "<br>";
$a = 1;
function b($d)
{
  echo $a;
  echo $d;
}
echo b('6');
$s = 'key';
printf("[%\'*-20s]",$s);
var_dump(is_real(20.25));
var_dump(is_scalar(array('a','b')));


function twice(){
    echo 'xx';
}


echo twice();
$i = "0";
Class Transport
{
    private $units = 100;
    protected $capacity = 100;
}

class Train extends Transport
{
    private $units = 300;
    protected $capacity = 1000;

    public function getU() 
    {
        return $this->units;
    }

    public function getC()
    {
        return $this->capacity;
    }
}

$train = new Train();
echo $train->getU()*$train->getC();
class MoneyConversion
{
  var $euro = 'worthless';
  var $gold = 'priceless';

 function Money($a){
      return $a*6;
  }
}
$conv = new MoneyConversion();

if (is_a($conv,'Money')) {
  echo $conv->euro;
}else{
     echo $conv->gold;
}
print date("Y",mktime(0,0,0,0,0,date("Y")));
echo $a = $b == $b;
echo $a = $b <> $b;
echo $a = $b !== $c;
echo $a = $b !== $b;
echo"<br>";
echo (isset($a['prop']['cost']))?"1":"0";
echo $v;
echo '1';
preg_match('/\\(.+?\\)/',
'This is a (COUNT)first(/COUNT) test', 
$referers);
var_export($referers);

class AA {
    public $amount;
    function start(){
        $this->amount = 100;
    }       
}
class BB extends AA {    
     function end(){
        echo "200";
    }
}
$obj = new BB();
echo $obj->start();
echo $obj->amount;
$input = 'nice';
echo str_replace("CE",
"cer",
str_pad(strtoupper($input),10, "+", 
STR_PAD_BOTH));
$obj = (object) 'house';
echo $obj->scalar;
class any1 {
   public $thing = 'any';
   public function  __construct() {
      echo $this->thing;
   }
}
$object = new any1('thing');
$a = 6;
if($a > 6)
$a += 2;
$a += 4;
if($a > 5)
$a -= 2;
echo $a;
?>