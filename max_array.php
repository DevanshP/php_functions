<?php

function getMaxArray($arr) {

  $arr = array(130,145,130,150,161,178,190);

  return $arr;

}

function getUniqueArray($arr){

  $arr = array(130,145,130,150,161,178,190,145,178);

  return $arr;

}

$newArr = array();

$maxArr = getMaxArray($newArr);

echo "The max value in the array is: ".max($maxArr)."<br><br>";

$newArr2 = array();

$uniqueArr = getUniqueArray($newArr2);

$uniqueArr = array_unique($uniqueArr);


echo "The unique values in the array2 are: <pre>";
print_r($uniqueArr);
echo "</pre>";
