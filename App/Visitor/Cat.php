<?php

declare(strict_types=1);

namespace App\Visitor;

require_once("../../autoload.php");

class Cat extends AbstractLivingEntity
{
    public function accept(DebugInterface $visitor)
    {
        $visitor->visitCat($this);
    }
}
