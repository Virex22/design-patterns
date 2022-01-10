<?php

declare(strict_types=1);

namespace App\Command;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class TVRemoteChannelChange implements TVRemoteInterface
{
    protected $remote;
    protected $channel;

    public function __construct(TVChannel $remote, int $channel)
    {
        $this->remote = $remote;
        $this->channel = $channel;
    }

    public function execute()
    {
        $this->remote->change($this->channel);
    }
}
