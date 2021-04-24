<?php

$num1 = rand(0,1);
$headsCount = 0;
$tailsCount = 0;
$throwCount = 0;
function coinToss($number) {
    if ($number === 1)
    {
        $headsCount += 1;
        $throwCount += 1;
        echo "Attempt #$throwCount: Throwing a coin... It's a head! ... Got $headsCount head(s) so far and $tailsCount tail(s) so far.";
    }
    else if ($number === 0)
    {
        $tailsCount += 1;
        $throwCount += 1;
        echo "Attempt #$throwCount: Throwing a coin... It's a tail! ... Got $headsCount head(s) so far and $tailsCount tail(s) so far.";
    }
}
coinToss($num1);

?>