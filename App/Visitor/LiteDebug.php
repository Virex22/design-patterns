<?php

declare(strict_types=1);

namespace App\Visitor;

require_once("../../autoload.php");

/**
 * VisiteurConcret qui va visiter un objet pour lui demander 
 * d'accepter l'éxecution de sa méthode correspondante
 */
class LiteDebug implements DebugInterface
{
    public function visitHuman(Human $object)
    {
        echo "type : human"  . PHP_EOL;
        echo "name : " . $object->getName() . PHP_EOL;
        echo "age : " . $object->getAge()  . PHP_EOL;
        echo PHP_EOL;
    }
    public function visitCat(Cat $object)
    {
        echo "type : cat"  . PHP_EOL;
        echo "name : " . $object->getName() . PHP_EOL;
        echo "age : " . $object->getAge()  . PHP_EOL;
        echo PHP_EOL;
    }
}
