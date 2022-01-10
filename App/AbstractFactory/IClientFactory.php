<?php

declare(strict_types=1);

namespace App\AbstractFactory;

include_once(__DIR__ . "\\..\\..\\autoload.php");

interface IClientFactory
{

    /**
     * Créer un client mineur
     */
    public function createMinor(
        float $size,
        float $weight,
        string $surname,
        string $firstname
    ): AbstractMinor;

    /**
     * Créer un client majeur
     */
    public function createMajor(
        float $size,
        float $weight,
        string $surname,
        string $firstname,
        bool $haveDrivingLicence
    ): AbstractMajor;
}
