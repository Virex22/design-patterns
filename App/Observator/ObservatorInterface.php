<?php

declare(strict_types=1);

namespace App\Observator;

require_once("../../autoload.php");

interface ObservatorInterface
{
    public function update();
}
