<?php 

//Problēmas risinājums
//Klubs uztur biedru sarakstu. Katrs biedrs tiek attēlots kā objekts ar četrām īpašībām: vārds, uzvārds, loma un stundas. Lomas var būt "leader" (vadītājs) vai "member" (biedrs). Stundas nosaka brīvprātīgo stundu skaitu mēnesī katram biedram.
//Izveidojiet testa datus, lai jūsu izveidotā programma spētu veikt uzdevumu.
//Ir jāizveido saraksts, kurā ir 2 vadītāji un 5 biedri.
//Programmai jāsniedz atbildes uz trim jautājumiem:
//1. Kas ir vadītāji?
//Izdrukājiett konsolē visus biedrus, kuriem ir loma "leader".
//2. Cik liels ir kopējais brīvprātīgo stundu skaits?
///Aprēķiniet un izvadiet summu visiem biedriem kopā.
///////3. Kuri saņems balvu “Zvaigžņu brīvprātīgais”?
//Balvu saņem biedrs, kuram ir vismaz 20 stundas un kurš nav vadītājs.
//Izdrukājiet konsolē šo biedru vārdus.
//Ja balvu nesaņem neviens, tad izmainiet testa datus, lai būtu vismaz viens biedrs, kurš atbilst kritērijiem.
//P.S. Izvadot datus konsolē izmantojiet pilnu vārdu

$members = [
    ["name" => "Adolf", "uzvards" => "Rizler", "role" => "leader", "hour" => 25],
    ["name" => "Arnold", "uzvards" => "Swarchnegger", "role" => "leader", "hour" => 30],
    ["name" => "Osama", "uzvards" => "Letter", "role" => "member", "hour" => 18],
    ["name" => "Obama", "uzvards" => "bin", "role" => "member", "hour" => 22],
    ["name" => "Donald", "uzvards" => "Ducks", "role" => "member", "hour" => 15],
    ["name" => "Johnny", "uzvards" => "Sins", "role" => "member", "hour" => 28],
    ["name" => "Enzo", "uzvards" => "Ferrari", "role" => "member", "hour" => 12]
];
echo "1. Vadītāji:\n";
foreach ($members as $people) {
    if ($people["role"] == "leader") {
        echo $people["name"] . " " . $people["uzvards"] . "\n";
    }
}
echo "\n";
$allHour = 0;
foreach ($members as $people) {
    $allHour += $people["hour"];
}
echo "2. Kopējais brīvprātīgo stundu skaits: " . $allHour . " hour\n\n";
echo "3. Balvu “Zvaigžņu brīvprātīgais” saņem:\n";
$balvasBiedri = [];
foreach ($members as $people) {
    if ($people["role"] == "member" && $people["hour"] >= 20) {
        $balvasBiedri[] = $people["name"] . " " . $people["uzvards"];
    }
}
if (count($balvasBiedri) > 0) {
    foreach ($balvasBiedri as $name) {
        echo $name . "\n";
    }
} else {
    echo "Neviens biedrs neatbilst kritērijiem.\n";
}
