<?php

//created by ralph degoma - Jan. 18 2023
function repeat($array = [1,2,4]) {

    if(count($array) == 0) {
        echo "parameter is not acceptable";
        die;
    }

    $str = str_repeat(implode(",", $array).",", 3);

    echo json_encode(array_map(function($n) {
        return (int) $n;
    },array_filter(explode(",",$str))));

}

function reformat($str) {

    if(strlen($str) == 0) {
        echo "parameter is not acceptable";
        die;
    }

    $str_formatted = strtolower(substr($str, 1, strlen($str) - 1));
    $first_letter = strtoupper(substr($str, 0, 1));
    $vowels = ["a","e","i","o","u"];
    $formatted = str_replace($vowels, "", $str_formatted);

    echo $first_letter.$formatted;

}

function multiply($power) {

    if($power == 0) {
      return 1;
    }

    $value = [];
    $counter = 1;
    for($i = 0; $i <= $power; $i++) {
      if($i == 0) {
        $counter = 1;
        $value = [$counter];
      }
      $counter = $counter * 2;
      array_push($value, $counter);
    }

    return $value[$power - 1];
}

function binaryToDecimal($binary) {

    //convert it to decimal
    $sum = 0;
    $counter = 1;
    for($i = count($binary); $i >= 1; $i--) {
        $sum += $binary[$i-1] ? multiply($counter) : 0;
        $counter++;
    }

    echo $sum;

}
