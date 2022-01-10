<?php

declare(strict_types=1);

namespace App\FactoryMethod;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class ConstructClientsViewerPerso extends AbstractconstructClientsViewer
{
    public function createClientViewer(): AbstractClientsViewer
    {
        return new ClientsViewerPerso();
    }
}
