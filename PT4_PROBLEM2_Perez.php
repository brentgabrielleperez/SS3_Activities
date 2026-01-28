<?php
$count = 0;
$smallest = null;
$largest = null;

echo "Perfect square numbers from 100 down to 1:<br><br>";

for ($i = 100; $i >= 1; $i--) {
    for ($j = 1; $j * $j <= $i; $j++) {
        if ($j * $j == $i) {
            echo "Perfect square found: " . $i . "<br>";
            $count++;

            if ($smallest === null || $i < $smallest) {
                $smallest = $i;
            }

            if ($largest === null || $i > $largest) {
                $largest = $i;
            }
        }
    }
}

echo "<hr>";
echo "Total number of perfect squares detected: " . $count . "<br>";
echo "Smallest perfect square detected: " . $smallest . "<br>";
echo "Largest perfect square detected: " . $largest;
?>
