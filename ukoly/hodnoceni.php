<?php
echo "<h1>Hodnocení studenta</h1>";
echo "<br>";
$studentName = "Mirko Vlach";
echo "<h2>$studentName</h2>";
echo "<h2>Výsledky testů</h2>";

$test1 = 9; 
$test2 = 9; 
$test3 = 9;

$soucet = $test1 + $test2 + $test3;
echo "Celkem: $soucet bodu z 300"; 
echo "<br>";
$prumer = $soucet / 3;
echo "Prumerny pocet bodu: $prumer";
echo "<br>";

$points = $prumer;
if ($points < 0 || $points > 100) {
echo"Neplatný počet bodů";
} elseif ($points >= 90) {
echo "Výborný";
} elseif ($points >= 75) {
echo "Chvalitbební";
} elseif ($points >= 60) {
echo "Dobrý";
} elseif ($points >= 40) {
echo "Dostatečný";
} else {
echo "Nedostatečný";
echo "<br>";
echo "Bonusové úkoly:<br>1+9=<br>2+8=<br>3+7=<br>4+6=<br>5+5=";
}


