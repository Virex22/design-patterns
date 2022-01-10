<?php

declare(strict_types=1);

namespace App\Builder;

include_once(__DIR__ . "\\..\\..\\autoload.php");

abstract class AbstractProfileBuilder
{

    protected $_profile;

    public function __construct(string $firstname, string $surname)
    {
        $this->_profile = new Profile($firstname, $surname);
    }

    public function built(): Profile
    {
        return $this->_profile;
    }

    abstract public function addAge(int $age);
    abstract public function addWeight(int $weight);
    abstract public function addPseudo(string $pseudo);
    abstract public function activeDescription(bool $active);
}
