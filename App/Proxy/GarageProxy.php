<?php

declare(strict_types=1);

namespace App\Proxy;

include_once(__DIR__ . "\\..\\..\\autoload.php");

/**
 * Le proxy va venir entre la classe qui doit être utilisée et son utilisation dans le script client
 * il va pouvoir venir gérer tous les accès et relation
 */
class GarageProxy implements GarageInterface
{
    protected $garage;
    protected $count;

    public function __construct()
    {
        $this->garage = new Garage();
        $this->count = 0;
    }

    public function sellCar(): void
    {
        if ($this->count >= 100) {
            echo "limite de voiture atteinte" . PHP_EOL;
            return;
        }
        $this->garage->sellCar();
        $this->count++;
    }
    public function getCarCount(): int
    {
        return $this->count;
    }
}
