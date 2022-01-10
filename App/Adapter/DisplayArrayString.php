<?php

declare(strict_types=1);

namespace App\Adapter;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class DisplayArrayString implements IDisplayArray
{
    private $_array;

    public function setArray(array $arrayToDisplay)
    {
        $this->_array = $arrayToDisplay;
    }

    public function display()
    {
        $arrayString = $this->arrayToString($this->_array, 0);
        echo $arrayString;
    }

    /**
     * Affichage par fonction récursive
     */
    private function arrayToString(array $array, int $subArrayCount = 0): string
    {
        $stringToDisplay = "";
        $prefix = "";
        for ($i = 0; $i < $subArrayCount; $i++)
            $prefix .= "  ";
        foreach ($array as $key => $value) {
            if (gettype($value) == "array") {
                $stringToDisplay  .= $prefix . $key . " >> " . PHP_EOL;
                $stringToDisplay  .= $this->arrayToString($value, $subArrayCount + 1);
            } else
                $stringToDisplay  .= $prefix . $key . " >> " . $value . PHP_EOL;
        }
        return $stringToDisplay;
    }
}
