<?php

declare(strict_types=1);

namespace App\Command;

include_once(__DIR__ . "\\..\\..\\autoload.php");

/**
 * Classe récépteur
 */
class TVChannel
{
    protected $channel;

    public function __construct(int $channel = 1)
    {
        $this->channel = $channel;
    }

    public function change(int $channel)
    {
        $this->channel = $channel;

        return $channel;
    }

    public function plus()
    {
        return ++$this->channel;
    }
    public function minus()
    {
        return --$this->channel;
    }
    public function getChannel()
    {
        return $this->channel;
    }
}
