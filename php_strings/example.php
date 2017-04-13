<?php

namespace Theory;

'simple string' . ' ' . 'another simple string';

echo 'string with \' escaping' . PHP_EOL;
echo "string \t with \n \\ \\n escape sequence\n";
echo 'simple string with escape sequence' . PHP_EOL;

function interpolation($value)
{
    return "interpolation example: $value" . PHP_EOL;
}

echo interpolation(100);

echo "\n";

function hereDoc($hello)
{
    return <<<EOD
        Example "of $hello string
        spannint 'multiple lines
        using heredoc syntax.\n\n
EOD;
}

echo hereDoc('hello, world');

function nowDoc()
{
    return <<<'EOD'
        Example of string
        spannint multiple lines
        using nowdoc syntax. $hello.
EOD;
}

echo nowDoc();

echo "\n";

$str = 'simple string';

echo $str[0];
echo $str[1];
echo $str[strlen($str) - 1];
