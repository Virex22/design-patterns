<?php

declare(strict_types=1);

namespace App\AbstractFactory;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class MinorMan extends AbstractMinor
{
    public function presentation()
    {
        echo "Homme jeune - nom : $this->_surname"
            . ", prenom: $this->_firstname"
            . ", poid: $this->_weight"
            . ", taille: $this->_size" . PHP_EOL;
    }
}
