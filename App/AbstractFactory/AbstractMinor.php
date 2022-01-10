<?php

declare(strict_types=1);

namespace App\AbstractFactory;

include_once(__DIR__ . "\\..\\..\\autoload.php");

abstract class AbstractMinor
{
    protected $_weight;

    protected $_size;

    protected $_surname;

    protected $_firstname;

    public function __construct(
        string $firstname,
        string $surname,
        float $size,
        float $weight
    ) {
        $this->_firstname = $firstname;
        $this->_surname = $surname;
        $this->_size = $size;
        $this->_weight = $weight;
    }

    abstract public function presentation();
}
