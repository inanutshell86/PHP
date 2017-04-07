<?php

namespace Theory;

### Operator, Operand

// + - ** %

3 * 7; // infix

4.2 / 3.4;
3 + 4 - 3 + 1;

-1; // prefix
4;

// postfix
// $i++

4 % -3;
-30 ** -2.3;

### Unary, Binary

-1;
1 * 5;

### Priority

3 * 4 - 1;
3 * (4 - 1);

### Functions

sqrt(4); // 2
sin(0); // 0
sqrt(2 ** 2); // 2

sin(deg2rad(90)); // 1
cos(pi()); // -1
echo sqrt(sqrt(16)); // 2
