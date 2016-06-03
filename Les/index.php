<?php

include './classes/Helper.php';

use Classes\Helper;

$ar = [1, 3, 5, 8, 9];

$res = Helper::max_array($ar);

echo $res . "<br>";

$sum = Helper::sum_array($ar);

echo $sum . "<br>";

$arRep = Helper::replace_array($ar);

echo "<pre>";
print_r($ar);
echo "</pre>";

echo "<pre>";
print_r($arRep);
echo "</pre>";

$arNum = [-1, -3, -5, 6, 7, 9];

$arNew = Helper::pow_array($arNum);


echo "<pre>";
print_r($arNum);
echo "</pre>";

echo "<pre>";
print_r($arNew);
echo "</pre>";


$arRand = Helper::generate_array(1, 7, 20);

echo "<pre>";
print_r($arRand);
echo "</pre>";


$Mul = Helper::mul_array($arRand, 3, 7);

//echo $Mul;


$arGet = Helper::GetArray($arRand);
echo "<pre>";
print_r($arGet);
echo "</pre>";


$M = Helper::Mul($arRand, 3, 9);
echo "<pre>";
print_r($M);
echo "</pre>";

