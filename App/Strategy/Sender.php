<?php

declare(strict_types=1);

namespace App\Strategy;

require_once("../../autoload.php");

/**
 * La strategy est juste une classe utilisée au millieu de notre algorithme, 
 * elle permetteras de varier le comportement de la méthode juste à l'endroit voulu
 */
class Sender
{
    private $strategy;

    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function sendMessage(string $message)
    {
        echo "Sender : Creation du message ..." . PHP_EOL;
        $messageFormated = ucfirst(strtolower($message));
        echo "Sender : Envois du message avec la stratégie voulue " . PHP_EOL;
        $this->strategy->send($messageFormated);
        echo "Sender : Message Envoyé" . PHP_EOL . PHP_EOL;
    }
}
