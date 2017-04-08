<?php

namespace Theory;

require_once 'Example.php';
require_once 'Another.php';

echo \Theory\Example\iam();
echo \Another\iam();
echo Example\iam();

use function Theory\Example\iam;
use function Theory\Example\iam as eiam;
use function Another\iam as aiam;

echo iam();
echo eiam();
echo aiam();
