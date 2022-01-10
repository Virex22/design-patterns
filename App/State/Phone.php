<?php

declare(strict_types=1);

namespace App\State;

require_once("../../autoload.php");

class Phone
{
    private $isCharging;

    private $isOpen;

    // State permet d'enregistrer notre état
    private $state;


    public function __construct()
    {
        $this->state = new PhoneTurnedOff();
        $this->state->setContext($this);
    }
    public function button()
    {
        $this->state->button();
    }
    public function setIsCharging($isCharging)
    {
        $this->isCharging = $isCharging;
        $this->state = $isCharging ? new PhoneCharging() : new PhoneTurnedOn();
        $this->state->setContext($this);
    }

    public function setIsOpen($isOpen)
    {
        $this->isOpen = $isOpen;
        $this->state = $isOpen ? new PhoneTurnedOn() : new PhoneTurnedOff();
        $this->state->setContext($this);
    }
}
