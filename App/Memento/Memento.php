<?php

declare(strict_types=1);

namespace App\Memento;

require_once("../../autoload.php");

/**
 * La classe memento est juste une classe qui contient les propriétés à sauvegarder d'un objet
 */
class Memento
{
    protected $state;

    public function __construct(int $number)
    {
        $this->state = $number;
    }

    public function getSavedState(): int
    {
        return $this->state;
    }
}
