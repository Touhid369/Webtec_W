<?php

$string_var = "Hello World";
$integer_var = 42;
$float_var = 3.14;
$boolean_var = true;

$num1 = 10;
$num2 = 5;

$addition = $num1 + $num2;
$subtraction = $num1 - $num2;
$multiplication = $num1 * $num2;
$division = $num1 / $num2;

echo "Addition: " . $addition . "<br>";
echo "Subtraction: " . $subtraction . "<br>";
echo "Multiplication: " . $multiplication . "<br>";
echo "Division: " . $division . "<br>";

$float_num1 = 15.5;
$float_num2 = 3.2;

$float_addition = $float_num1 + $float_num2;
$float_subtraction = $float_num1 - $float_num2;
$float_multiplication = $float_num1 * $float_num2;
$float_division = $float_num1 / $float_num2;

echo "<br>Float Addition: " . $float_addition . "<br>";
echo "Float Subtraction: " . $float_subtraction . "<br>";
echo "Float Multiplication: " . $float_multiplication . "<br>";
echo "Float Division: " . $float_division . "<br>";

$sum = $num1 + $num2;
echo "<br>Sum using echo: " . $sum . "<br>";
print "Sum using print: " . $sum . "<br>";

echo "<br>--- Variable Types and Values ---<br><br>";

var_dump($string_var);
var_dump($integer_var);
var_dump($float_var);
var_dump($boolean_var);

?>