<?php

namespace Theory;

// sqrt(4 ** 2 + 3 ** 2); // 5

function hypotenuse($cathetus1, $cathetus2)
{
    return sqrt($cathetus1 ** 2 + $cathetus2 ** 2);
}

// Call, Arguments
echo hypotenuse(3, 4);
