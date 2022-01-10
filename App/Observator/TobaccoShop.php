<?php

declare(strict_types=1);

namespace App\Observator;

require_once("../../autoload.php");

/**
 * Le bureau de tabac est le sujetConcret, 
 * il va avoir le lien avec son parents pour notifié les observateurs
 */
class TobaccoShop extends TobaccoSubject
{
    private $newspaperAvailable;
    private $cigAvailable;

    public function getNewspaperAvailable()
    {
        return $this->newspaperAvailable;
    }

    public function setNewspaperAvailable(bool $available)
    {
        $this->newspaperAvailable = $available;
        if ($available) $this->notify();
    }
    public function getCigAvailable()
    {
        return $this->cigAvailable;
    }
    public function setCigAvailable(bool $available)
    {
        $this->cigAvailable = $available;
        if ($available) $this->notify();
    }
}
