<?php

declare(strict_types=1);

namespace App\Strategy;

require_once("../../autoload.php");

class SMSSender implements StrategyInterface
{
    public function send(string $message)
    {
        echo "Sms : $message" . PHP_EOL;
    }
}
