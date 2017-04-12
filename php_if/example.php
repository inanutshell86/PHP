<?php

function lucky($num)
{
    // if (expression) statement
    if ($num == rand(1, 3)) {
        return "You are lucky!";
    } elseif ($num < 1 || $num > 3) {
        return "Unexpected nubmer";
    } else {
        return "Sorry, you are not lucky. Try again!";
    }
}

function mod($num)
{
    return $num >= 0 ? $num : -$num;
}

echo lucky(3);
