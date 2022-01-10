<?php

declare(strict_types=1);

namespace App\Command;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class TVRemoteMinus implements TVRemoteInterface
{
    protected $remote;

    public function __construct(TVChannel $remote)
    {
        $this->remote = $remote;
    }

    public function execute()
    {
        $this->remote->minus();
    }
}
