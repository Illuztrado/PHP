<?php

// Part 1
$x = array(4, 6, 1, 3, 5, 7, 25);

function draw_stars($array)
{
    foreach ($array as $value)
    {
        for ($i = 1; $i <= $value; $i++)
        {
            echo "*";
        }
        echo "<br>";
    }
}
echo "Part 1 <br><br>";
draw_stars($x);
echo "<br><br><br>";


// Part 2
$y = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
$string_array = array();

function draw_stars2($array)
{
    foreach ($array as $value) 
    {
        if (is_string($value) === true)
        {
            $string_array = str_split($value,1);
            foreach ($string_array as $string_array_value) 
            {
                echo strtolower($string_array[0]);
            }
            echo "<br>";
        }
        else if (is_string($value) === false)
        {
            for ($i = 1; $i <= $value; $i++)
            {
                echo "*";
            }
            echo "<br>";
        }
    }

}
echo "Part 2 <br><br>";
draw_stars2($y);
echo "<br><br>";
?>