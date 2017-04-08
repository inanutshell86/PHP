<?php

namespace Theory;

define('VERSION', "version-1.5"); // global definition
const FOO = 7 ** 10;

echo VERSION;
echo FOO;
echo \Theory\FOO;

defined('\Theory\FOO'); // true
defined('\Theory\VERSION'); // false

# Predefined Constants

PHP_VERSION;
PHP_OS;
PHP_BINDIR;
DEFAULT_INCLUDE_PATH;

# Magic Constants

__LINE__;
__FILE__;
__DIR__;

// __FUNCTION__, __CLASS__, __TRAIT__, __METHOD__, __NAMESPACE

echo defined('VERSION');
echo constant('FOO');
