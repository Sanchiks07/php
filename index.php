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
for ($a = 2; $a <= 100; $a+=2) {
    echo "$a <br>";
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
$c = 1;
for ($b = 1; $b <= 10; $b+=1) {
    $c = $c*$b;
}
echo "$c <br><br>";

//saskaita visus naturālos skaitļus no 1 - 22
$e = 0;
for ($d = 1; $d <= 22; $d++) {
    $e = $e + $d;
}
echo "$e";

?>