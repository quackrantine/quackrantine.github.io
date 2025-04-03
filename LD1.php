<?php
$a = 5;
$b = 3;
$sum = $a + $b;
$difference = $a - $b;
$product = $a * $b;
$quotient = $a / $b;
$remainder = $product % 2;

echo "The sum is ".$sum."<br>";
echo "The difference is ".$difference."<br>";
echo "The product is ".$product."<br>";
echo "The quotient is ".$quotient."<br>";

if ($sum = 100){
    echo "The sum is equal to 100"."<br>";
}
else{
    echo "The sum is not equal to 100"."<br>";
}


if ($remainder == 1){
    echo "The product is odd";
}
else{
    echo "The Product is even";
}
