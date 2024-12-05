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

?>