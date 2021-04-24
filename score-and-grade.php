<?php

$number = rand(50,100);

function getScoreAndGrade($score)
{
    if ($score < 70)
    {
        return "Your Score: $score/100<br>Your grade is D.";
    }
    else if ($score >= 70 && $score < 80)
    {
        return "Your Score: $score/100<br>Your grade is C.";
    }
    else if ($score >= 80 && $score < 90)
    {
        return "Your Score: $score/100<br>Your grade is B.";
    }
    else if ($score >= 90 && $score <= 100)
    {
        return "Your Score: $score/100<br>Your grade is A.";
    }
}
$scoreAndGrade = getScoreAndGrade($number);

function print100Times($result) {
    for ($i = 1; $i <= 100; $i++) {
        echo "$result <br><br>";
    }
}
print100Times($scoreAndGrade);

?>