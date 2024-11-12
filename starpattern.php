<?php
// Define the maximum width of the pyramid
$maxStars = 5;

// Upper part of the pyramid
for ($i = 1; $i <= $maxStars; $i++) {
    echo str_repeat('*', $i) . "<br>";
}

// Lower part of the pyramid
for ($i = $maxStars - 1; $i >= 1; $i--) {
    echo str_repeat('*', $i) . "<br>";
}
?>
