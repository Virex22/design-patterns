<?php

declare(strict_types=1);

namespace App\AbstractFactory;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class WomenFactory implements IClientFactory
{
    public function createMinor(
        float $size,
        float $weight,
        string $surname,
        string $firstname
    ): AbstractMinor {
        return new MinorWomen($firstname, $surname, $size, $weight);
    }

    public function createMajor(
        float $size,
        float $weight,
        string $surname,
        string $firstname,
        bool $haveDrivingLicence
    ): AbstractMajor {
        return new MajorWomen($firstname, $surname, $size, $weight, $haveDrivingLicence);
    }
}
