<?php

define('TEST', 1);
defined('TEST') || define('TEST', 2);

var_dump(TEST);

var_dump(__LINE___);
var_dump(__FILE__);
var_dump(__DIR__);