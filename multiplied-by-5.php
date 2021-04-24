<?php

// Part 1
function multiply($arr)
{
  for($i = 0; $i < count($arr); $i++) {
      $arr[$i] = $arr[$i] * 5;
  }
  return $arr;
}
$A = array(2,4,10,16);
$B = multiply($A);
var_dump($B);
/* expected output:
array (size=4)
  0 => int 10
  1 => int 20
  2 => int 50
  3 => int 80
*/

// Part 2
function multiply($arr,$factor)
{
  for($i = 0; $i < count($arr); $i++) {
      $arr[$i] = $arr[$i] * $factor;
  }
  return $arr;
}
$A = array(2,4,10,16);
$B = multiply($A,2);
var_dump($B);

?>