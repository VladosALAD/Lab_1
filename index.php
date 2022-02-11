<?php

//Task 1
/* Imagine a lot of code here */
$very_bad_unclear_name="15 chicken wings";

// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " Hello World!";

//// Don't change the line below

echo "<br>Your order is:$very_bad_unclear_name.";

//Task 2
$int1 = 10;
echo $int1 . "<br>";
$int2 = 1001;
echo $int2;
$float1 = 123.456;
echo (6+6) . "<br>";

$last_month = 1187.23;
$this_month = 1089.98;
echo ($last_month - $this_month);

//Task 11
$num_languages = 4;
$months=11;
$days = $months*16;
$days_per_language=$days/$num_languages;
echo "<br>" . $days_per_language;

//Task 12
echo 8**2;

//Task 13
$my_num = 64;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;

//Task 14
$a = 10;
$b=3;
echo "<br>" . ($a%$b);
if ($a%$b==0)
    echo "<br>Делится<br>";
else echo "<br>Делится с остатком<br>" . ($a%$b);
echo $st = pow(2,10) . "<br>";
echo sqrt(245) . "<br>";
$arr = array(4,2,5,19,13,0,10);
$SUM = 0;
foreach($arr as $item)
    $SUM += $item**2;
echo sqrt($SUM) . "<br>";
echo round(sqrt(379),0) . " ";
echo round(sqrt(379),1) . " ";
echo round(sqrt(379),2) . "<br>";
$arr2 = array(
    "floor" => floor(sqrt(587)),
    "ceil" => ceil(sqrt(587)));
$arr3=array(
    4,-2,5,10,-130,0,10
);
$minN=$arr3[0];$maxN=$arr3[0];
foreach($arr3 as $num)
    echo"$num ";
if ($minN > $num)
    $minN = $num;
if ($maxN < $num)
    $maxN = $num;
echo"<br>maximum - $maxN , minimum - $minN";

echo "<br>" . rand(1,100) . "<br>";
$arr4 = array();
for($i = 0;$i<10;$i++) {
    array_push($arr4, rand(1, 100));
}

for($i = 0;$i<10;$i++) {
    echo "$arr4[$i] ";
}

for($i = 0; $i < 7;$i++)
{
    $a=rand(-100,100);
    $b=rand(-100,100);
    echo "<br>a-b=$a-$b=|" . ($a-$b) . "|=" . abs($a-$b);
}
$arr5 = array();
for($i = 0;$i<10;$i++) {
    array_push($arr5, rand(-40, 20));
}
foreach ($arr5 as &$item) {
    echo $item . " ";
    if($item < 0)
        $item = abs($item);
}