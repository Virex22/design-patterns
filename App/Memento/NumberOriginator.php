<?php

declare(strict_types=1);

namespace App\Memento;

require_once("../../autoload.php");

/**
 * Cette classe représente le rôle de l'ObjetOrigine, elle contient les deux méthodes importante :
 * saveToMemento et restoreFromMemento
 */
class NumberOriginator
{
    private $state;

    public function set(int $number)
    {
        $this->state = $number;
        echo "Originator : nombre défini a $this->state" . PHP_EOL;
    }

    public function saveToMemento(): Memento
    {
        return new Memento($this->state);
        echo "Originator : sauvegarde dans un memento" . PHP_EOL;
    }

    public function restoreFromMemento(Memento $memento)
    {
        $this->state = $memento->getSavedState();
        echo "Originator : memento chargé et nombre définit a $this->state" . PHP_EOL;
    }
}
