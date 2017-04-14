<?php

### Definition

[];
$ar = ['apple', 'mango', 'banana'];
$ar2 = [[], [1, 2, 3], ['milk', 5]];

echo $ar[0];
echo "\n";
print_r($ar2);

$ar[0]; // 'apple'
$ar[2]; // 'banana'

### Mutation

$ar[] = 'orange';
$ar[2] = 'melon';
unset($ar[0]);

// echo $ar[0]; // error
// echo "\n";

// Union
// [1, 2, 3, 5] + [8, 1, 3];
$ar3 = [1, 2, 3, 5];
$ar4 = [8, 1, 3];
$ar5 = $ar3 + $ar4; // [1, 2, 3, 5]
// $ar5 = array_merge($ar3, $ar4);

print_r($ar5);
echo "\n";

[] == []; // true
[1] != [2]; // true

### Functions

sizeof($ar);
in_array('apple', $ar);
empty($ar);
end($ar);

### Print Arrays

print_r($ar);

### Example

function myMax(array $arr)
{
    if (empty($arr)) {
        return;
    }

    $max = $arr[0];

    for ($i = 0; $i < sizeof($arr); $i++) {
        if ($max < $arr[$i]) {
            $max = $arr[$i];
        }
    }
    return $max;
}

print_r(myMax([1, 6, 8, 3, 7]));
echo "\n";

### Foreach

function myMax2(array $arr)
{
    if (empty($arr)) {
        return;
    }

    $max = $arr[0];

    foreach ($arr as $value) { // foreach ($array as $index => $value)
        if ($max < $value) {
            $max = $value;
        }
    }

    return $max;
}

print_r(myMax2([1, 6, 8, 3, 7]));
echo "\n";
