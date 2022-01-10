<?php

declare(strict_types=1);

namespace App\Iterator;

require_once("../../autoload.php");

// Classe de collection, ici c'est une encapsulation d'un tableau PHP pour des chaines de caractères uniquement
class StringArray
{
    protected $tab;

    public function __construct()
    {
        $this->tab = [];
    }

    public function get(int $index)
    {
        return $this->tab[$index];
    }

    public function set(string $elem, $index = null)
    {
        if ($index === null)
            $this->tab[] = $elem;
        else
            $this->tab[$index] = $elem;
    }
    public function lenght(): int
    {
        return count($this->tab);
    }
    public function getForwardIterator(): ForwardIterator
    {
        return new ForwardIterator($this);
    }
    public function getBackwardIterator(): BackwardIterator
    {
        return new BackwardIterator($this);
    }
}
