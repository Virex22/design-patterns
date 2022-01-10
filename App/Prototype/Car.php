<?php

declare(strict_types=1);

namespace App\Prototype;

include_once(__DIR__ . "\\..\\..\\autoload.php");

/**
 * Classe d'exemple qui va être cloné
 */
class Car implements IPrototype
{
    private $_numberplate;

    private $_color;

    private $_carBrand;

    private $_model;


    public function __construct($carBrand, $model)
    {
        $this->_numberplate = $this->generatePlate();
        $this->_color = "White";
        $this->_carBrand = $carBrand;
        $this->_model = $model;
    }

    private function generatePlate(): string
    {
        // 65 = A et 90 = Z en code ASCII , chr transforme le nombre en caractere
        $plate = chr(mt_rand(65, 90)) . chr(mt_rand(65, 90)) . " ";
        $plate .= mt_rand(0, 9) . mt_rand(0, 9) . mt_rand(0, 9) . " ";
        $plate .= chr(mt_rand(65, 90)) . chr(mt_rand(65, 90));
        return $plate;
    }

    public function setColor(string $color)
    {
        $this->_color = $color;
    }

    public function describe(): void
    {
        echo "Car " . $this->_numberplate . " : " . PHP_EOL
            . " Type : " . $this->_carBrand . " " . $this->_model . PHP_EOL
            . " Color : " . $this->_color . PHP_EOL;
    }
    public function __clone()
    {
        $this->_numberplate = $this->generatePlate();
    }
}
