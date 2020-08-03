<?php

define('ROOT', dirname(__FILE__));

include(ROOT . '/../src/InTpl.php');

echo InTpl::Tpl('tpl3.php', ROOT)->render();