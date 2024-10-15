<?php

function result($a, $b, $c, $d, $e){
    $total = $a+$b+$c+$d+$e;
    $average = $total/5;

    echo 'Total Marks: '.$total;
    echo "\n";
    echo 'Average Marks: '.$average;
    echo "\n";
}

result(20,50,45,70,85);

$marks = 47;
switch($marks){
    case ($marks>=80 && $marks<= 100):
        echo 'Grade: A+';
        break;
    case ($marks>= 70 && $marks<= 79):
        echo 'Grade: A';
        break;
    case ($marks>= 60 && $marks<= 69):
        echo 'Grade: A-';
        break;
    case ($marks>= 50 && $marks<= 59):
        echo 'Grade: B';
        break;
    case ($marks>= 40 && $marks<= 49):
        echo 'Grade: C';
        break;
    case ($marks>= 33 && $marks<= 39):
        echo 'Grade: D';
        break;
    default:
    echo 'Grade: Failed';
    break;

}

