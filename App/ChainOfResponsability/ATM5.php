<?php

declare(strict_types=1);

namespace App\ChainOfResponsability;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class ATM5 extends ATM
{
    public function withdrawal(float $money)
    {
        echo floor($money / 5) . " billet(s) de 5€ " . PHP_EOL;
        parent::withdrawal($money % 5);
    }
}
