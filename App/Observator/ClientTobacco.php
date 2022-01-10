<?php

declare(strict_types=1);

namespace App\Observator;

require_once("../../autoload.php");

/**
 * Le client est, ici, un observateur
 */
class ClientTobacco implements ObservatorInterface
{
    protected $name;
    protected $shop;
    protected $interest;

    public function __construct(
        string $name,
        TobaccoShop $shop
    ) {
        $this->name = $name;
        $this->shop = $shop;
    }

    public function setInterest(string $interest)
    {
        $this->interest = $interest;
    }

    public function update()
    {
        if ($this->interest == "cig") {
            if ($this->shop->getCigAvailable())
                echo "$this->name : super des cigarettes sont disponible !" . PHP_EOL;
        } else if ($this->interest == "newspaper")
            if ($this->shop->getNewspaperAvailable())
                echo "$this->name : super des journaux sont disponible !" . PHP_EOL;
    }
}
