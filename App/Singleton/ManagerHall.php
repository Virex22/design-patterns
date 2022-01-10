<?php

declare(strict_types=1);

namespace App\Singleton;

use InvalidArgumentException;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class ManagerHall implements IPersonne
{

    private $lastname;
    private $firstname;
    static private $instance  = null;
    /**
     * On créer une méthode static afin de récupérer et de verifier que l'on a bien une seule instance
     */
    static public function getInstance($nom = null, $firstname = null)
    {
        if (!self::$instance) {
            if ($nom == null || $firstname == null)
                throw new InvalidArgumentException();
            self::$instance = new managerHall($nom, $firstname);
        }
        return self::$instance;
    }

    /**
     * On met la fonction __clone en privé pour ne pas pouvoir créer d'autres instances à partir de clone
     */
    private function __clone()
    {
    }

    /** 
     * On met la fonction __construct en privé pour ne pas pouvoir créer d'autres instances à partir de clone
     * elle reste quand même utilisée dans la méthode static getInstance
     */
    private function __construct($lastname, $firstname)
    {
        $this->setLastname($lastname);
        $this->setFirstname($firstname);
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function speak(): void
    {
        echo "Je suis $this->lastname $this->firstname et je suis le gérant" . PHP_EOL;
    }
}
