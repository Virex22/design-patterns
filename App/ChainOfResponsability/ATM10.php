<?php

declare(strict_types=1);

namespace App\ChainOfResponsability;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class ATM10 extends ATM
{
    public function withdrawal(float $money)
    {
        echo floor($money / 10) . " billet(s) de 10€ " . PHP_EOL;
        parent::withdrawal($money % 10);
    }
}
