<?php

declare(strict_types=1);

namespace App\ChainOfResponsability;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class ATM20 extends ATM
{
    public function withdrawal(float $money)
    {
        echo floor($money / 20) . " billet(s) de 20€ " . PHP_EOL;
        parent::withdrawal($money % 20);
    }
}
