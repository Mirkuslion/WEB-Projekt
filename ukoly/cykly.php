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


<h1>Ukol E</h1>
<?php
$counter = 10;
while ($counter >=1){
    echo $counter . "<br>";
    $counter--;
};
echo "Hotovo!"
?>


<h1>Ukol F</h1>
<?php
$number = 8;
while($number < 5){
    echo $number . "<br>";
}
do {echo $number . "<br>";
}
while($number < 5);
?>


<h1>Ukol F</h1>
<?php
$i = 1;
while ($i <= 5) {
echo "$i<br>";
$i++;
}
?>