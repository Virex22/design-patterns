<?php

declare(strict_types=1);

namespace App\FactoryMethod;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class ClientsViewerPerso extends AbstractClientsViewer
{
    public function Display(): string
    {
        $displayString = "";
        foreach ($this->_data as $key => $client)
            $displayString .= "client n°$key - " . $client["nom"] . ' ' . $client["prenom"] . PHP_EOL;
        return $displayString;
    }
}
