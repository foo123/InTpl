<?php

define('ROOT', dirname(__FILE__));

include(ROOT . '/../src/InTpl.php');

echo InTpl::Tpl(ROOT . '/tpl3.php')->render();