
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo "abdul baten";

$a = 145;
$b = 34;

echo "<br> Result: " . ($a + $b);
?>

<?php
echo " hello 62 batch <br>";

print("hello world");

print_r("<br> HELLO PRINT and R");

var_dump("<br> hello dump");

$num1 = 400;
$num2 = 500;

$sum = $num1 + $num2;

$diff = $num1 - $num2;

$product = $num1 * $num2;

if ($num2 != 0) {
    $quotient = $num1 / $num2;
} else {
    $quotient = "Error: Division by zero is not allowed.";
}

echo "<br> Number 1: $num1";
echo "<br> Number 2: $num2";
echo "<br> Addition: $sum";
echo "<br> Subtraction: $diff";
echo "<br> Multiplication: $product";
echo "<br> Division: $quotient";

?>

</body>
</html>
