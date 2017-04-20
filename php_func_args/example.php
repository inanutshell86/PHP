<?php

namespace Theory;

echo round(10.9); // 11
echo "\n";
echo round(10.234); // 10
echo "\n";
echo round(10.61234, 2); // 10.61
echo "\n";

echo round(1.55, 1); // 1.6
echo "\n";
echo round(1.55, 1, PHP_ROUND_HALF_DOWN); // 1.5
echo "\n";

// float, string, bool, int, array
function drop($array, $count = 1)
{
    $result = [];
    for ($i = $count; $i < sizeof($array); $i++) {
        $result[$i] = $array[$i];
    }

    return $result;
}

print_r(drop([1, 2, 3])); // [2, 3]
echo "\n";
print_r(drop([1, 2, 3], 2)); // [3]
echo "\n";

### Args

// before PHP5.6
function sumArgs1()
{
    return array_sum(func_get_args());
}

echo sumArgs1(1, 2, 4); // 7
echo "\n";

// After PHP5.6
function sumArgs2(...$numbers)
{
    return array_sum($numbers);
}

echo sumArgs2(1, 2, 4); // 7
echo "\n";

function sumArgs3($arg, ...$numbers)
{
    return array_sum($numbers);
}

echo sumArgs3(10, 2, 4); // 6
echo "\n";
