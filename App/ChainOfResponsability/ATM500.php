<?php

declare(strict_types=1);

namespace App\ChainOfResponsability;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class ATM500 extends ATM
{
    public function withdrawal(float $money)
    {
        echo floor($money / 500) . " billet(s) de 500€ " . PHP_EOL;
        parent::withdrawal($money % 500);
    }
}
