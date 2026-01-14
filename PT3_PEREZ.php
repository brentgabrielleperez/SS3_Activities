<?php

$weight = 70.5;   // kg
$lifestyle = 's'; // 'A' = Active, 'S' = Sedentary
$lifestyle = strtoupper(trim($lifestyle));

if ($lifestyle == 'A') {
    $activityFactor = 15;
    $status = "Active";
} elseif ($lifestyle == 'S') {
    $activityFactor = 13;
    $status = "Sedentary";
} else {
    echo "\n\t\tInvalid lifestyle! Use 'A' or 'S'.\n";
    exit();
}

$calories = $weight * $activityFactor;

$width = 60;
$line = str_repeat("=", $width);

function center($text, $width) {
    $padding = floor(($width - strlen($text)) / 2);
    return str_repeat(" ", $padding) . $text;
}

echo "<pre>";
echo $line . "\n";
echo center("Daily Calorie Recommendation", $width) . "\n";
echo $line . "\n\n";

echo center("Weight: $weight kg", $width) . "\n";
echo center("Lifestyle: $status", $width) . "\n";
echo center("Activity Factor: $activityFactor", $width) . "\n\n";
echo center("Recommended Daily Calories: $calories calories", $width) . "\n\n";

echo $line . "\n";
echo "</pre>";
?>
