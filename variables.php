<?php

//3. uzdevums: Mainīgie
// a) Izveidojiet failu "variables.php";
// b) Izveidojiet 'string' tipa mainīgo "groupName", kurā tiek glabāts tava kursa nosaukums;
// c) Izveidojiet 'number' tipa mainīgo "size", kurā tiek glabāts studentu skaits grupā;
// d) Izveidojiet 'boolean' tipa mainīgo "isActive", kura vērtība NAV patiesa;
// e) Izveidojiet konstanti "EULER", kura vērtība ir 2.718;
// f) Versionējiet 3.uzd. atsevišķā komitā;

$x = "Olivers ";
echo "$x" ;
$y = 11 ;
$t = 12 ; 
echo " $y + $t =  " ;
echo $y + $t   ;
$skaits = (" grupa ir 23 cilvēki");
echo $skaits ;
define(" PI ",  3.141);
define(" groupName "," PT2025 ");
echo constant (" groupName " );

$c = 16 ;
if ($c >= 18){
    $v = " vairāk par 18 gadiem ";
    echo $v;
} else {
    $z = " mazāk par 18 gadiem ";
    echo "$z";
}
