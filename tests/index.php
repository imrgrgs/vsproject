<?php
use orm\Orm;

require "../vendor/autoload.php";

$a = new Orm();
echo ($a->model() . "\n");
