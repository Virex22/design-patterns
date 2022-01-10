<?php

declare(strict_types=1);

namespace App\Builder;

include_once(__DIR__ . "\\..\\..\\autoload.php");


/**
 * Class "builder" qui permettera de créer notre objet partie par partie
 */
class ProfileBuilder extends AbstractProfileBuilder
{
    public function addAge(int $age)
    {
        $this->_profile->setAge($age);
    }

    public function addWeight(int $weight)
    {
        $this->_profile->setWeight($weight);
    }

    public function addPseudo(string $pseudo)
    {
        $this->_profile->setPseudo($pseudo);
    }

    public function activeDescription(bool $active)
    {
        $this->_profile->setDescription(
            $active ? "Je suis " . $this->_profile->getFirstname() . " " . $this->_profile->getSurname() : null
        );
    }
}
