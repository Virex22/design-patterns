<?php

declare(strict_types=1);

namespace App\Visitor;

require_once("../../autoload.php");

interface DebugInterface
{
    public function visitHuman(Human $object);
    public function visitCat(Cat $object);
}
