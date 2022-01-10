<?php

declare(strict_types=1);

namespace App\Interpreter;

require_once("../../autoload.php");

class OperatorPlus extends AbstractOperator
{
    public function interpret($context, array $tree, int $index)
    {
        if ($context === null)
            return
                $tree[$index - 1]->interpret($context, $tree, $index) +
                $tree[$index + 1]->interpret($context, $tree, $index);
        else
            return $context + $tree[$index + 1]->interpret($context, $tree, $index);
    }
}
