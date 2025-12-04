<?php

function sum($a, $b) {
    return $a + $b;
}

function factorial($n) {
    if ($n < 0) {
        return "Factorial is not defined for negative numbers";
    }
    
    if ($n === 0 || $n === 1) {
        return 1;
    }
    
    return $n * factorial($n - 1);
}

function is_prime($n) {
    if ($n < 2) {
        return false;
    }
    
    if ($n === 2) {
        return true;
    }
    
    if ($n % 2 === 0) {
        return false;
    }
    
    for ($i = 3; $i <= sqrt($n); $i += 2) {
        if ($n % $i === 0) {
            return false;
        }
    }
    
    return true;
}

echo "<h2>Sum Function</h2>";
echo "sum(10, 20) = " . sum(10, 20) . "<br>";
echo "sum(5, 15) = " . sum(5, 15) . "<br>";
echo "sum(100, 250) = " . sum(100, 250) . "<br>";

echo "<br><h2>Factorial Function</h2>";
echo "factorial(5) = " . factorial(5) . "<br>";
echo "factorial(0) = " . factorial(0) . "<br>";
echo "factorial(7) = " . factorial(7) . "<br>";

echo "<br><h2>Prime Number Checker</h2>";
$test_numbers = [2, 7, 10, 13, 15, 17, 20, 23, 25, 29];

foreach ($test_numbers as $number) {
    $result = is_prime($number) ? "is prime" : "is not prime";
    echo "{$number} {$result}<br>";
}

?>