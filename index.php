<?php

echo    "<style>
            body {
                background-color: #FC8EAC;
                color: white;
                font-size: 20px;
            }
        </style>";

echo "yippee <br><br>";

// izvadi visus pārā skaitļus no 1-100
echo "<b>1. uzdevums</b><br>";
for ($x = 2; $x <= 100; $x+=2) {
    echo "$x <br>";
}

// while cikls
// $y = 1
// while ($y <= 100) {
//      if ($y % 2 == 0){
//          echo "$x <br>";
//      }
//      $y = $y + 1;
// }

// ko dara %
// izvada atlikumu
// % - dala, peim., 13 % 5 = 3 (atlikums)
// 4 % 5 = 1 (nulli pārvērš pa 1)


//faktoriāls 10
//!3 = 3*2*1
echo "<br><b>2. uzdevums</b><br>";
$a = 1;
for ($b = 1; $b <= 10; $b++) {
    $a = $a*$b;
}
echo "$a <br><br>";

//saskaita visus naturālos skaitļus no 1 - 22
$summa = 0;
for ($i = 1; $i <= 22; $i++) {
    $summa = $summa + $i;
}
echo "$summa";

//izvada visus Fibonači skaitļus līdz 1000
echo "<br><br><b>3. uzdevums</b><br>";
$b_1 = 0;
for ($b = 1; $b <= 1000; $b = $b + 0) {
    echo "$b<br>";
    $bPlus1 = $b_1 + $b;
    $b_1 = $b;
    $b = $bPlus1;
}

//$b_1 = 0;
//$b = 1;
//while ($b <= 1000) {
//    echo "$b<br>";
//    $bPlus1 = $b_1 + $b;
//    $b_1 = $b;
//    $b = $bPlus1;
//}


//naturāli skaitļi no 1-100, kuri dalās ar 3 vai 5, bet nedalās ar 15
echo "<br><br><b>4. uzdevums</b><br>";
for ($n = 1; $n <= 100; $n = $n + 1) {
    if (($n % 3 == 0 || $n % 5 == 0) && $n % 15 != 0) {
        echo "$n" . " ";
    }
}

//izveido asociatīvo masīvu, kurā atslēgas ir Latvijas pilsētu nosaukumi
//bet vērtības ir to iedzīvotāju skaits
//izvadi ar print_r funkciju
echo "<br><br><b>5. uzdevums</b><br>";
$pilsetas = ["cesis" => 14699, "smiltene" => 5129, "valmiera" => 22376];
print_r ($pilsetas);

//izvadi izmantojot array_keys funkciju
echo "<br><br><b>6. uzdevums</b><br>";
$animals = ["kaķis" => "mjau", "suns" => "vau", "putns" => "čiv"];
print_r (array_keys($animals));

//izsauc API https://jsonplaceholder.typicode.com/posts un iegūsti masīvus ar asociatīvajiem masīviem, kas satur informāciju par ziņojumiem
//izvadiet katram ziņojumam tā nosaukumu, saturu un lietotāja ID, kas to ir izveidojis
echo "<br><br><b>7. uzdevums</b><br>";
$dataString = file_get_contents ("https://jsonplaceholder.typicode.com/posts");
$posts = json_decode($dataString);
var_dump ($posts[69]->title);

foreach ($posts as $posts) { //iziet katram array elementam cauri
    echo "<h2>$posts->title</h2>";
    echo "$posts->body";
};

//
echo "<br><br><b>8. uzdevums</b><br>";
?>