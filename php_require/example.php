<?php

namespace Theory;

set_include_paht('/tmp');
echo get_include_path();

include 'Example.php';
require 'Example.php';
require 'Another.php';
require_once 'Example.php';
require_once 'Example.php';

hello();
