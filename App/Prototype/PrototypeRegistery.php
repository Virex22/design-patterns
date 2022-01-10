<?php

declare(strict_types=1);

namespace App\Prototype;

use Exception;

include_once(__DIR__ . "\\..\\..\\autoload.php");

/**
 * Blibliotheque d'objet à cloné
 */
class PrototypeRegistery
{
    /**
     * Tableau contenant les objets "template" à cloné
     */
    private $_items;

    public function addItem(string $id, IPrototype $prototype)
    {
        $this->_items[$id] = $prototype;
    }

    public function getCloneByID(string $id)
    {
        if (isset($this->_items[$id]))
            return clone $this->_items[$id];
        else
            throw new Exception("Wrong ID");
    }
}
