<?php

namespace Classes;
class Helper
{
//    максимальный элемент массива
    public static function max_array($array)
    {
        $max = $array[0];
        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i] > $max) {
                $max = $array[$i];
            }
        }
        return $max;
    }

//сумму четных чисел
    public static function sum_array($array)
    {
        $sum = 0;
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] % 2 != 0) {
                $sum += $array[$i];
            }
        }
        return $sum;
    }

// замен минимального элемента на максимальный и наоборот
    public static function replace_array($array)
    {
        $max = $array[0];
        $indexMax = 0;
        $min = $array[0];
        $indexMin = 0;
        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i] > $max) {
                $max = $array[$i];
                $indexMax = $i;
            }
            if ($array[$i] < $min) {
                $min = $array[$i];
                $indexMin = $i;
            }
        }
        $tmp = $array[$indexMax];
        $array[$indexMax] = $array[$indexMin];
        $array[$indexMin] = $tmp;

//        $array[$indexMin] = $max;
//        $array[$indexMax] = $min;

        return $array;
    }

//возведение во вторую степень каждого элемента массива, если в нем есть эллемент меньше -2
    public static function pow_array($array)
    {
        $length = count($array);
        for ($i = 0; $i < $length; $i++) {
            if ($array[$i] < -2) {
                for ($j = 0; $j < $length; $j++) {
                    if ($array[$j] < 0) {
                        $array[$j] = pow($array[$j], 2);
                    }
                }
                break;
            }
        }
        return $array;
    }

//    генерировать массив случайных чисел
    public static function generate_array($min, $max, $length)
    {
        $array = [];
        for ($i = 0; $i < $length; $i++) {
            $array[] = rand($min, $max);
        }
        return $array;
    }

//    произведение на промежутке от старт до енд
    public static function mul_array($array, $start, $end)
    {
        $length = count($array);
        $mul = 1;
        if ($start < $end && $end < $length) {
            for ($i = $start; $i <= $end; $i++) {
                $mul *= $array[$i];
            }
        } else {
            return false;
        }
        return $mul;
    }

    // возвращает массив без четных чисел и возвращает false если их нет

    public static function GetArray($array)
    {
        foreach ($array as $k => $val) {
            if ($val % 2 != 0) {
                unset($array[$k]);
            }

        }
        if (empty($array))
            return false;
        return $array;
    }

//Дан массив действительных чисел а0,...,аn-1.
//Получить количество отрицательных членов данного массива и пpоизведение элементов, принадлежащих отрезку [b,d].

public static function Num ($array){
    $count = 0;
    foreach ($array as $val){
        if($val < 0) $count++;
    }
    return $count;
}

    public static function Mul($array, $b, $d){
        $count = count($array);
        $mul = 1;
        if ($d < $count && $d > $b && $b >=0){
            for($i = $b; $i <= $d; $i++){
                $mul *= $array[$i];
            }
            return $mul;
        }
        return false;
    }
}