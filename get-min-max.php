<?php

$sample = array(135, 2.4, 2.67, 1.23, 332, 2, 1.02);
$array2 = array();
function getMaxAndMin($array) {
    sort($array);
    $array2["max"] = $array[count($array)-1];
    $array2["min"] = $array[0];
    return $array2;
}
$output = getMaxAndMin($sample);
var_dump($output);

?>