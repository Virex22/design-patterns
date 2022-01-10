<?php

declare(strict_types=1);

namespace App\State;

require_once("../../autoload.php");

/**
 * Le contexte sera directement enregistré dans notre Etat
 */
abstract class AbstractState
{
    protected $context;

    public function setContext(Phone $context)
    {
        $this->context = $context;
    }

    abstract public function button();
}
