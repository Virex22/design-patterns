<?php

declare(strict_types=1);

namespace App\Singleton;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class ClientHall implements IPersonne
{
    private $lastname;
    private $firstname;

    public function __construct($lastname, $firstname)
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
        echo "Je suis $this->lastname $this->firstname et je suis un client" . PHP_EOL;
    }
}
