<?php

echo "<h2>For Loop: Numbers from 1 to 20</h2>";
for ($i = 1; $i <= 20; $i++) {
    echo $i . " ";
}

echo "<br><br><h2>While Loop: Even Numbers from 1 to 20</h2>";
$num = 1;
while ($num <= 20) {
    if ($num % 2 === 0) {
        echo $num . " ";
    }
    $num++;
}

echo "<br><br><h2>Associative Array: Fruits and Colors</h2>";
$fruits = [
    "apple" => "red",
    "banana" => "yellow",
    "orange" => "orange",
    "grape" => "purple",
    "kiwi" => "green"
];

foreach ($fruits as $fruit => $color) {
    echo ucfirst($fruit) . " is " . $color . "<br>";
}

echo "<br><h2>For Loop with Break: First 5 Numbers</h2>";
for ($i = 1; $i <= 20; $i++) {
    echo $i . " ";
    if ($i === 5) {
        break;
    }
}

?>