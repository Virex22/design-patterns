<?php

declare(strict_types=1);

namespace App\Adapter;

include_once(__DIR__ . "\\..\\..\\autoload.php");

/**
 * notre classe adapteur ici nous permet d'utiliser la classe JSONDisplayArray 
 * mais en réspectant l'interface IDisplayArray
 */
class AdapterArrayJSON implements IDisplayArray
{
    private $_adapte;
    public function __construct()
    {
        $this->_adapte = new JSONDisplayArray();
    }

    public function setArray(array $arrayTodisplay)
    {
        $this->_adapte->setData($arrayTodisplay);
    }

    public function display()
    {
        $this->_adapte->prepare();
        $this->_adapte->show();
    }
}
