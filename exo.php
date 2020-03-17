<?php
$a = 3;
$b = 6;
if ($b > $a) {
    echo "$b est plus grand que .$a";
}
else {
    echo "erreur";
}
echo '<br>';

$b = 3;
$a = 6;
if ($b < $a) {
    echo "$b est plus petit que $a";
}

$a = 2;
$b = 5;
$temp = $a;
$a = $b;
$b = $temp;
echo "<br>$a, $b";

echo '<br>';

$a = 4;
$b = 6;
echo $a + $b;

echo '<br>';
echo(rand(1,100));
echo '<br>';
echo(rand(5,10));

echo '<br>';
$a = 3;
$b = 9;
function ajouter($a, $b) {
    $addi = $a + $b;
    echo "Ca fait $addi";
}
ajouter($a, $b);
echo '<br>';

$a = rand(1,100);
if ($a < 50) {
    echo "$a /100 Je suis nul";
}
else { echo "$a /100 Je suis bon"; }

echo "<br>";

$x = rand(0,5);
if ($x == 1) {
    echo "AAAAA";
}
elseif ($x == 2) {
    echo "BBBBB";
}
elseif ($x == 3) {
    echo "CCCCC";
}
elseif ($x == 4) {
    echo "DDDDD";
}
elseif ($x == 4) {
    echo "EEEEE";
}
else {
    echo "Je suis une perruche";
}

echo "<br>";

$x = rand(0,5);
switch ($x) {
    case 1 :
        echo "AAAAA";
        break;
    case 2 :
        echo "BBBBB";
        break;
    case 3 :
        echo "CCCCC";
        break;
    case 4 :
        echo "DDDDD";
        break;
    default :
            echo "Je suis une perruche";
            break;
}

echo "<br>";

for($i=0;$i<10;$i++){
    echo "Nombre random".($i+1)." : ".random_int(0,666)."<br>";
}
echo "<br";

    for ($i=0; $i<15; $i++) { 
        $tableau[$i] = random_int(0,2000);
    }

echo "<br";

    $i = 1;
    foreach($tableau as $value){
        echo "Valeur $i : $value <br>";
        $i++;
    }
?>