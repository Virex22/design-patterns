<?php

declare(strict_types=1);

namespace App\Visitor;

require_once("../../autoload.php");

class Human extends AbstractLivingEntity
{
    public function accept(DebugInterface $visitor)
    {
        $visitor->visitHuman($this);
    }
}
