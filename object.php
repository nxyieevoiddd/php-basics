<?php

$car = [
    " brand " => " Audi ",
    " model " => " Rs6 ",
    " year " => 2023
];
$c = 2025 - 2023 ;
if ($c >= 10){
    $v = " vairāk par 10 gadiem ";
    echo $v;
} else {
    $z = " mazāk par 10 gadiem ";
    echo "$z";
}
echo $car [" brand "];
echo $car [" model "];
echo $car [" year "];
