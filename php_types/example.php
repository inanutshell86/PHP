<?php

// int, float, bool, string, array
[] + 1;
"" + [];
sin("");

var_dump(100);

### Type Juggling

$foo = "0"; // "0"
$foo += 2; // 2
$foo = $foo + 1.3; // 3.3
$foo = 5 + "10 Little Piggies"; // 15

"string $foo";

### Type Casting

$foo = 10;
$bar = (boolean) $foo;

### ? == false

0;
"0";
0.0;
null;
[];

### Comparison

0 !== false; // true
0 === '0'; // false

### Functions

gettype(true); // boolean
is_string("adf"); // true
// is_numeric, is_int

### Type Hinting

// float, string, bool, int, array
function drop(array $array, int $count = 1): array
{
    return [];
}
