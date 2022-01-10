<?php

declare(strict_types=1);

namespace App\ChainOfResponsability;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class ATM100 extends ATM
{
    public function withdrawal(float $money)
    {
        echo floor($money / 100) . " billet(s) de 100€ " . PHP_EOL;
        parent::withdrawal($money % 100);
    }
}
