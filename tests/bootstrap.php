<?php
use orm\Orm;
/**
 *
 */
require "../vendor/autoload.php";
try {
    $a = new Orm();
    echo (d($a->model()) . "\n");

} catch (\Exception $th) {
    //throw $th;
}
