<?php

true;
false;

true || true && false && !true || !false;
// and, or, xor

3 > 4; // false
4 < 3; // false
3 >= 3; // true
3 <= 3; // true
5 == 5; // true
5 != 5; // false

function isOdd($num)
{
    return $num % 2 != 0;
}

var_dump(isOdd(3)); // true
var_dump(isOdd(4)); // false

function isShortString($str)
{
    $strlen = strlen($str);
    return 4 < $strlen && $strlen < 10;
}

var_dump(isShortString("long string, long string"));
var_dump(isShortString("short str"));
