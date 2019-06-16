<?php

namespace orm\Kernel;

use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;
use Symfony\Component\VarDumper\Dumper\HtmlDumper;

/**
 * Undocumented class
 */
class VarDumper
{

    /**
     * Undocumented function
     *
     * @param mixed $value
     * @return void
     */
    public function dump($value)
    {
        if (class_exists(CliDumper::class)) {
            $dumper = 'cli' === PHP_SAPI ? new CliDumper : new HtmlDumper;

            $dumper->dump((new VarCloner)->cloneVar($value));

            unset($dumper);
        } else {
            var_dump($value);
        }

        unset($value);
    }
}
