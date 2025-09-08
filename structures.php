<?php
/*
1. if, else, elseif
2. switch
3. ciklusok: for, while, foreach
4. Ternary operator
5.Tömbök
*/ 
// egy számról dönts el h az páros e
$number = 6;
echo "A {$number} egy ";
if ($number % 2 == 0) {
    echo "Páros ";
}
else
{
    echo"Páratlan ";
}
echo "szám.<br>";

$result = ($number % 2 ==0) ? "Páros" : "Páratlan";
echo "A $number egy $result szám";


?>