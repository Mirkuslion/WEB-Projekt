<h1>Ukol A</h1>
<?php
for ($i = 1; $i <= 10;$i++){
    echo "$i<br>";
}
?>


<h1>Ukol B</h1>
<?php
for ($i = 2; $i <= 20;$i+=2){
    echo "$i<br>";
}
?>


<h1>Ukol C</h1>
<?php
$number = 7;
for ($i = 1; $i <= 10;$i++){
    $result = $number * $i;
    echo "$result<br>";
    
}
?>


<h1>Ukol D</h1>
<?php
$sum = 0;
for ($i = 1; $i <= 100;$i++){
     $sum += $i;
}
echo "Součet čísel od 1 do 100: " .$sum; 
?>


