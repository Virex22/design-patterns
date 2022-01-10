<?php

declare(strict_types=1);

namespace App\Mediator;

require_once("../../autoload.php");

/** 
 * ElementAbstrait
 */
abstract class AbstractAirVehicle
{
    protected $name;
    protected $canLanding;
    protected $mediator;

    abstract public function __construct(string $name);
    abstract public function land();
    abstract public function liftOff();

    public function canLanding()
    {
        $this->canLanding = true;
    }

    public function canNotLanding()
    {
        $this->canLanding = false;
    }

    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }
}
