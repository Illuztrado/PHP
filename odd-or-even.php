<?php

for ($i = 1; $i < 2000; $i++) {
    if ($i % 2 > 0) {
        echo "Number is " . $i . ". This is an odd number.";
        echo "<br>";
    } else if ($i % 2 === 0) {
        echo "Number is " . $i . ". This is an even number.";
        echo "<br>";
    }
}

?>