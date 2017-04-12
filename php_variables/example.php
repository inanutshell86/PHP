<?php

echo factorial3();

echo "\n";

function factorial3()
{
    $result = 1;
    $result = $result * 2;
    $result = $result * 3;

    return $result;
}

echo average(1, 10, 4);

echo "\n";

function average($num1, $num2, $num3)
{
    $sum = $num1 + $num2 + $num3;

    return $sum / 3;
}

echo increment3(10);

echo "\n";

function increment3($num)
{
    $result = $num;
    $result = $result + 1;
    $result += 1; // -=, *=, /=
    $result++; // ++$i, $i--, --$i

    return $result;
}
