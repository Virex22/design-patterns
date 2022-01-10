<?php

declare(strict_types=1);

namespace App\Memento;

require_once("../../autoload.php");

/**
 * La classe Caretaker permet d'enregistrer les mementos, ici elle est très basique
 * Essayer de faire une gestion plus avancée, avec des undo/redo, des points de sauvegarde, etc...
 */
class Caretaker
{
    private $mementos;

    public function addMemento(Memento $memento)
    {
        $this->mementos[] = $memento;
    }

    public function getMemento(int $index)
    {
        return $this->mementos[$index];
    }
}
