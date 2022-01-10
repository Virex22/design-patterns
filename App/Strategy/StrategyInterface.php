<?php

declare(strict_types=1);

namespace App\Strategy;

require_once("../../autoload.php");

interface StrategyInterface
{
    public function send(string $message);
}
