<?php

$oddNumbers = array();

for ($i = 1; $i < 20000; $i++) {
    if ($i % 2 > 0) {
        $oddNumbers[] = $i;
    }
}
var_dump($oddNumbers);

?>