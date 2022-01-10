<?php

declare(strict_types=1);

namespace App\Builder;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class ProfileType
{
    protected $_builder;

    public function __construct(AbstractProfileBuilder $builder)
    {
        $this->_builder = $builder;
    }

    /**
     * Permet de créer un variant de notre objet
     */
    public function constructMediumProfile(): Profile
    {
        $this->_builder->activeDescription(true);
        return $this->_builder->built();
    }

    /**
     * Permet de créer un variant de notre objet
     */
    public function constructAdvancedProfile(int $age, int $weight, string $pseudo): Profile
    {
        $this->_builder->activeDescription(true);
        $this->_builder->addAge($age);
        $this->_builder->addWeight($weight);
        $this->_builder->addPseudo($pseudo);
        return $this->_builder->built();
    }
}
