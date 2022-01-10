<?php

declare(strict_types=1);

namespace App\Interpreter;

require_once("../../autoload.php");

class Pharser
{

    private $treeExpression;

    public function __construct(string $expression)
    {
        // On divise l'expression en plusieurs parties
        $cutExpression = explode(" ", $expression);

        $this->treeExpression = [];

        // Pour chaque élément de notre expression on ajoute le type d'opérateur/élémentTerminal dans un tableau
        foreach ($cutExpression as $token) {
            if ($token == "+") {
                $this->treeExpression[] = new OperatorPlus();
            } else if ($token == "-") {
                $this->treeExpression[] = new OperatorMinus();
            } else {
                $this->treeExpression[] = new TerminalElementNumber(intval($token));
            }
        }
        // Désormais, notre expression est enregistré dans notre pharser
    }

    public function evaluate()
    {
        // Ici, tout dépend de l'analyse à effectuer, en regle générale on boucle sur chaque objet et on
        // exécute dans le sens de notre arbre
        $context = null;
        foreach ($this->treeExpression as $key => $expression) {
            if ($expression instanceof AbstractOperator) {
                $context = $expression->interpret($context, $this->treeExpression, $key);
            }
        }
        return $context;
    }
}
