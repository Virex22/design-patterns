<?php

declare(strict_types=1);

namespace App\ChainOfResponsability;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class ATM50 extends ATM
{
    public function withdrawal(float $money)
    {
        echo floor($money / 50) . " billet(s) de 50€ " . PHP_EOL;
        parent::withdrawal($money % 50);
    }
}
