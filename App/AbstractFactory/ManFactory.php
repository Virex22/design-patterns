<?php

declare(strict_types=1);

namespace App\AbstractFactory;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class ManFactory implements IClientFactory
{
    public function createMinor(
        float $size,
        float $weight,
        string $surname,
        string $firstname
    ): AbstractMinor {
        return new MinorMan($firstname, $surname, $size, $weight);
    }

    public function createMajor(
        float $size,
        float $weight,
        string $surname,
        string $firstname,
        bool $haveDrivingLicence
    ): AbstractMajor {
        return new MajorMan($firstname, $surname, $size, $weight, $haveDrivingLicence);
    }
}
