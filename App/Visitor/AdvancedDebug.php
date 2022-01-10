<?php

declare(strict_types=1);

namespace App\Visitor;

require_once("../../autoload.php");

/**
 * VisiteurConcret avec un comportement différent,
 * il débug la classe en elle même
 */
class AdvancedDebug implements DebugInterface
{
    public function visitHuman(Human $object)
    {
        echo "type : human"  . PHP_EOL;
        echo "name : " . $object->getName() . PHP_EOL;
        echo "age : " . $object->getAge()  . PHP_EOL;
        echo "class : " . get_class($object)  . PHP_EOL;
        echo PHP_EOL;
    }
    public function visitCat(Cat $object)
    {
        echo "type : cat"  . PHP_EOL;
        echo "name : " . $object->getName() . PHP_EOL;
        echo "age : " . $object->getAge()  . PHP_EOL;
        echo "class : " . get_class($object)  . PHP_EOL;
        echo PHP_EOL;
    }
}
