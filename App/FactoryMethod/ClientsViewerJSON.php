<?php

declare(strict_types=1);

namespace App\FactoryMethod;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class ClientsViewerJSON extends AbstractClientsViewer
{
    public function Display(): string
    {
        return json_encode($this->_data);
    }
}
