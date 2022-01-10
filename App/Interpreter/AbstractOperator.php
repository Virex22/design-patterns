<?php

declare(strict_types=1);

namespace App\Interpreter;

require_once("../../autoload.php");

/**
 * L'opérateur permettra dans une expression, de lier les différents éléments terminaux
 * se trouvant autour de l'opérateur
 */
abstract class AbstractOperator implements ExpressionInterface
{
    abstract public function interpret($context, array $tree, int $index);
}
