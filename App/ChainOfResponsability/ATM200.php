<?php

declare(strict_types=1);

namespace App\ChainOfResponsability;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class ATM200 extends ATM
{
    public function withdrawal(float $money)
    {
        echo floor($money / 200) . " billet(s) de 200€ " . PHP_EOL;
        parent::withdrawal($money % 200);
    }
}
