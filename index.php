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

$choose = rand(1,100);
echo "<br>Number is  - $choose<br>";
$Divisors = array();
for($i = 1;$i <= $choose;$i++)
{
    if($choose % $i == 0){
        array_push($Divisors, $i);
        echo $i . " ";
    }
}
$arrayOneToTen = array( 1,2,3,4,5,6,7,8,9,10 );
$cntr = 0;
$SuM = 0;
while ($SuM < 10){
    $SuM += $arrayOneToTen[$cntr];
    $cntr ++;
}

//Task 15
function printStringReturnNumber()
{
    echo "<br>Hello World v2.0";
    return 101;
}
echo "<br>" . $my_num = printStringReturnNumber();

//Task 16
function increaseEnthusiasm($s = "null")
{
    return $s . "!";
}
echo "<br>" . increaseEnthusiasm("Hello World?");
function repeatThreeTimes($s = "null")
{
    return $s . $s . $s;
}
echo "<br>" . repeatThreeTimes("Hello World? ");
echo "<br>" . increaseEnthusiasm(repeatThreeTimes("Help me pls "));
function cut($s = "null", $charsFromStart = 10)
{
    return substr($s,0,$charsFromStart);
}
//echo "<br>" . cut(increaseEnthusiasm(repeatThreeTimes("Help me pls ")), 5);
function ArrayTask($arr,$endIter,$nowIter = 0)
{
    echo $arr[$nowIter] . " ";
    if ($nowIter < $endIter){
        ArrayTask($arr, $endIter, ++$nowIter);
    }else
        return;
}
function NumSum($num,$sum=0)
{
    while ($num > 0)
    {
        $sum+=$num%10;
        $num/=10;
    }
    echo "$sum ";
    if ($sum>9)
        NumSum($sum);
    else return;
}

//Task 17
$XxX = "";
$arrXxX = array();
for($i=1;$i<5;$i++)
{
    $XxX = $XxX . "x";
    array_push($arrXxX,$XxX);
    echo $arr[$i] . "<br>";
}
function arrayFill($Symbol,$var)
{
    $temp = array();
    for ($i = 0;$i < $var; $i++)
    {
        array_push($retArr,$Symbol);
    }
    return $temp;
}

$hardArray = array(
    array(1,2,3),
    array(4,5),
    array(6)
);
function SumCounter(array $array){
    $Sum = array_sum($array);
    foreach($array as $child) {
        if (is_array($child))
            $Sum += SumCounter($child);
    }
    return $Sum;
}
$Array3X3 = array();
for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3; $j++){
        $Array3X3[$i][$j] = $i +3*$j +1;
    }
}
$array2539 = array (2, 5, 3, 9);
$result = $array2539[0]*$array2539[1]+$array2539[2]*$array2539[3];
echo "<br>" . $result . "<br>";
$user = array(
    "surname" => "Yurkov",
    "name" => "Vladislav",
    "patronymic" => "Arkadevich"
);
foreach ($user as $str)
    echo $str . " ";
$date = array(
    "day" => 11,
    "month" => 2,
    "year" => 2022
);
echo $date["'year'"] . "-";
echo $date["'month'"] . "-";
echo $date["'day'"];
$TaskArray = array('a','b','c','d','e');
echo"<br>" . count($TaskArray);
echo"<br>" . $TaskArray[count($TaskArray)-1] . " " . $TaskArray[count($TaskArray)-2];

//Task 18
function F1($var1, $var2){
    $sum = $var1 + $var2;
    if ($sum>10)
        return true;
    else return false;
}
function F2($var1, $var2){
    if ($var1 == $var2)
        return true;
    else return false;
}
function F3 ($var1){
    if($var1 < 10 || $var1 > 99)
        echo "Out of diaposon";
    else{
        $Sum = $var1 %10 + (($var1 - $var1 %10)/10);
        if($Sum<10)
            echo "Sum < 10";
        else
            echo "Sum > 10";
    }
}

$arrT18 = array(1, 2, 3, 5);
if(count($arrT18)==3)
    echo array_sum($arrT18) ."<br>";
else
    echo "<br>";

//Task 19
$xxxLine="";
echo "<br>";
for($i=0;$i<20;$i++)
{
    $xxxLine .= "x";
    echo "$xxxLine<br>";
}

//Task 20

$Mas = array(1, 50, 67, 9, 45);
function ArMean (array $arr , $num = 0, $Sum = 0){
    if($num < count($arr) - 1)
        ArMean($arr, $num+1, $Sum+$arr[$num]);
    if($num == count($arr) - 1)
        echo ($Sum+$arr[$num])/$num;
}
//ArMean (Mas);

function fromONEtoHUNDRED($num = 1, $sum = 1){
    if($num < 100)
        fromONEtoHUNDRED(num+1, $sum+$num);
    if($num == 100)
        echo $sum + $num;
}
fromONEtoHUNDRED();
//----------------------------\\
//          /\                \\
//         //                 \\
//        //     ^            \\
//       //     //\\          \\
//      //     //  \\         \\
//     //_____//____\\        \\
//    /______ ________\       \\
//          //                \\
//         //                 \\
//        //                  \\
//                            \\
//                  /\/\      \\
// Linking Park one \  / (luv)\\
//                   \/       \\
//----------------------------\\