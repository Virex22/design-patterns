<?php

declare(strict_types=1);

namespace App\ChainOfResponsability;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class ATM2 extends ATM
{
    public function withdrawal(float $money)
    {
        echo floor($money / 2) . " piece(s) de 2€ " . PHP_EOL;
        parent::withdrawal($money % 2);
    }
}
