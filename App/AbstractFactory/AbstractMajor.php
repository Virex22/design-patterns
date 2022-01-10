<?php

declare(strict_types=1);

namespace App\AbstractFactory;

include_once(__DIR__ . "\\..\\..\\autoload.php");

abstract class AbstractMajor
{
    protected $_weight;

    protected $_size;

    protected $_surname;

    protected $_firstname;

    protected $_haveDrivingLicence;

    public function __construct(
        string $firstname,
        string $surname,
        float $size,
        float $weight,
        bool $haveDrivingLicence
    ) {
        $this->_firstname = $firstname;
        $this->_surname = $surname;
        $this->_size = $size;
        $this->_weight = $weight;
        $this->_haveDrivingLicence = $haveDrivingLicence;
    }

    abstract public function presentation();
}
