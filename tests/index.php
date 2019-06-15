<?php
use orm\Orm;

require "../vendor/autoload.php";

$a = new Orm();
echo (d($a->model()) . "\n");
