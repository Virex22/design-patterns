<?php

declare(strict_types=1);

namespace App\FactoryMethod;

include_once(__DIR__ . "\\..\\..\\autoload.php");

abstract class AbstractClientsViewer
{
    protected $_data = [];

    public function addClients(string $prenom, string $nom, int $age): void
    {
        $this->_data[] = [
            "prenom" => $prenom,
            "nom" => $nom,
            "age" => $age,
        ];
    }
    abstract public function Display(): string;
}
