<?php

declare(strict_types=1);

namespace App\Command;

include_once(__DIR__ . "\\..\\..\\autoload.php");

interface TVRemoteInterface
{
    public function execute();
}
