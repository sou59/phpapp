<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 03/01/19
 * Time: 14:25
 */

$numbers = [12, 56, 80, 123, 2, 800, 180];

function getMaxNumber(array $nums) {

    $max = $nums[0];
/*
    for ($i = 1; $i < count($nums); $i++){

        if($max < $nums[$i]) {
            $max = $nums[$i];
        }
    }
   */
    foreach ($nums as $value) {
        if($value > $max) {
            $max = $value;
        }
    }
    return $max;
}

echo getMaxNumber($numbers);
echo '<br>';
var_dump(max($numbers));