<?php
// Number logic
$number = 5;

// Even or Odd
if($number % 2 == 0){
    echo "It is Even<br>";
} else {
    echo "It is Odd<br>";
}

// Multiplication Table
echo "<h4>Table of $number</h4>";
for($i = 1; $i <= 10; $i++){
    echo "$number x $i = " . ($number * $i) . "<br>";
}
?>