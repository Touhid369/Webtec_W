<?php

$temperature = 9;
$day = 5;

if (!is_numeric($temperature)) {
    die("Error: Temperature must be a numeric value.");
}

if (!is_int($day) || $day < 1 || $day > 7) {
    die("Error: Day must be an integer between 1 and 7.");
}

echo "<h2>Temperature Check</h2>";
echo "Current temperature: {$temperature}°C<br><br>";
echo "<hr>";
if ($temperature < 10) {
    echo "It's cold<br>";
} elseif ($temperature >= 10 && $temperature <= 25) {
    echo "It's warm<br>";
} else {
    echo "It's hot<br>";
}
echo "<hr>";

echo "<br><h2>Day of the Week</h2>";

switch ($day) {
    case 1:
        echo "Today is Monday";
        break;
    case 2:
        echo "Today is Tuesday";
        break;
    case 3:
        echo "Today is Wednesday";
        break;
    case 4:
        echo "Today is Thursday";
        break;
    case 5:
        echo "Today is Friday";
        break;
    case 6:
        echo "Today is Saturday";
        break;
    case 7:
        echo "Today is Sunday";
        break;
    default:
        echo "Invalid day number";
}

?>