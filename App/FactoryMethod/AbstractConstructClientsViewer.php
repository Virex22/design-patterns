<?php

declare(strict_types=1);

namespace App\FactoryMethod;

include_once(__DIR__ . "\\..\\..\\autoload.php");

abstract class AbstractConstructClientsViewer
{
    abstract public function createClientViewer(): AbstractClientsViewer;
}
