<?php

declare(strict_types=1);

namespace App\Interpreter;

require_once("../../autoload.php");

interface ExpressionInterface
{
    public function interpret($context, array $tree, int $index);
}
