<?php

declare(strict_types=1);

namespace App\Singleton;

include_once(__DIR__ . "\\..\\..\\autoload.php");


interface IPersonne
{
    /**
     * Accesseur de l'attribut nom
     */
    public function getLastname(): string;
    /**
     * Accesseur de l'attribut prenom
     */
    public function getFirstname(): string;
    /**
     * Mutateur de l'attribut nom
     */
    public function setLastname(string $lastname): void;
    /**
     * Mutateur de l'attribut prenom
     */
    public function setFirstname(string $firstname): void;
    /**
     * Permet à la personne de se présenter
     */
    public function speak(): void;
}
