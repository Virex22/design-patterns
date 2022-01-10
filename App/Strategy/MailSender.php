<?php

declare(strict_types=1);

namespace App\Strategy;

require_once("../../autoload.php");

class MailSender implements StrategyInterface
{
    public function send(string $message)
    {
        echo "Mail : $message" . PHP_EOL;
    }
}
