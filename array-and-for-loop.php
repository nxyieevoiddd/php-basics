<?php
//5. uzdevums: Masīvs un 'for' cikls
//a) Izveidojiet failu "array-and-for-loop.js";
//b) Izveidot masīva (array) tipa mainīgo, kurā tiek glabāti 4 augļi;
//c) Ar 'for' cikla palīdzību izvadiet katru augli konsolē un izmantojiet masīva garumu (length), lai noteiktu cik iterācijas 'for' ciklam jāveic;
//d) Versionējiet 5.uzd. atsevišķā komitā;

$fruits = ["Watermelon"=>"Wildberry", "Pineapple"=>"Apple"];
foreach ($fruits as $key => $value) {
    echo "$key => $value\n";
}
