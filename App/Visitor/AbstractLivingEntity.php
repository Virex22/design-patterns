<?php

declare(strict_types=1);

namespace App\Visitor;

require_once("../../autoload.php");

/**
 * Class abstraite permettant de créer des objets débuggables
 */
abstract class AbstractLivingEntity
{
    protected $name;

    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    abstract public function accept(DebugInterface $visitor);

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
}
