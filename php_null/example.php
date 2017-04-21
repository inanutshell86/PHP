<?php

// $var = NULL;

### Functions

is_null($var);

function example($var = null)
{
    return;
}

example(); // null

### Null coalescing operator

$value = null;

$result = $value ?? 'nobody'; // nobody
// equivalent to: $result = isset($value) ? $value : 'nobody';
