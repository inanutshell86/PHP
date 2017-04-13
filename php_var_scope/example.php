<?php

namespace Theory;

### for

for ($i = 0; $i < 3; $i++) {
    echo $i . "\n";
}

echo $i;

echo "\n";

### if

if (true) {
    $value = 'cat';
}

echo $value;

echo "\n";

### functions

$num = 2;
$increment = 1;

function increment($num)
{
    return $num + $increment;
}

// echo increment(3);

function increment2($num)
{
    // extremely bad
    global $increment;
    return $num + $increment;
}

// echo increment2(3);

echo "\n";

function increment3($num)
{
    return $num + $GLOBALS['increment'];
}

echo increment3(3);

echo "\n";

$x = 'i am from main.php';
require 'file.php';
