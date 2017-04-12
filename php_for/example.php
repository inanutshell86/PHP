<?php

echo factorial(5);

echo "\n";

function factorial($n)
{
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

// echo isPrime(12);
var_dump(isPrime(12));

echo "\n";

function isPrime($n)
{
    $isPrime = true;
    for ($i = 2; $i <= $n / 2; $i++) {
        if ($n % $i == 0 && $n % 1 == 0) {
            $isPrime = false;
            break;
        }
    }
    return $isPrime;
}

echo sumPrimes(10); // 18

echo "\n";

function sumPrimes($n)
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        if (!isPrime($i)) {
            continue;
        }
        $sum += $i;
    }
    return $sum;
}
