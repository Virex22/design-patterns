<?php

declare(strict_types=1);

namespace App\AbstractFactory;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class MajorMan extends AbstractMajor
{
    public function presentation()
    {
        echo "Homme adulte - nom : $this->_surname"
            . ", prenom: $this->_firstname"
            . ", poid: $this->_weight"
            . ", permis: " . ($this->_haveDrivingLicence ? "oui" : "non")
            . ", taille: $this->_size" . PHP_EOL;
    }
}
