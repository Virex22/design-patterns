<?php

declare(strict_types=1);

namespace App\ChainOfResponsability;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class ATM1 extends ATM
{
    public function withdrawal(float $money)
    {
        echo floor($money / 1) . " piece(s) de 1€ " . PHP_EOL;
        parent::withdrawal($money % 1);
    }
}
