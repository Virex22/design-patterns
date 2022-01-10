<?php

declare(strict_types=1);

namespace App\Interpreter;

require_once("../../autoload.php");

/**  
 * Un element terminal est une partie de l'expression qui n'a pas besoin d'une autre partie pour fonctionner
 * L'opérateur, de plus, nécéssite forcément 2 nombres autours de lui pour fonctionner
 * Un nombre lui ne nessécite ni nombre ni opérateur pour fonctionner
 */
class TerminalElementNumber implements ExpressionInterface
{

    private $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function interpret($context, array $tree, int $index)
    {
        return $this->number;
    }
}
