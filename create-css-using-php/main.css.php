<?php
header('Content-type: text/css');

function random_color()
{
    $rgb = array("a","b","c","d","e","f","0","1","2","3","4","5","6","7","8","9");
    $random = "#";
    $x = 0;
    for ($i=0; $i<6; $i++)
    {
        $x = rand(0,16);
        $random .= $rgb[$x];
    }
    return $random;
    
}
$color = random_color();
$color2 = random_color();

?>

h1 {
    color: <?= $color ?>;
}
p {
    color: <?= $color2 ?>;
}