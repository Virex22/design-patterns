<?php

declare(strict_types=1);

namespace App\AbstractFactory;

include_once(__DIR__ . "\\..\\..\\autoload.php");


class Inscription
{
    protected $_clientFactory;

    /**
     * Demande la classe "Factory" à utiliser pour la création des clients
     */
    public function __construct(IClientFactory $clientFactory)
    {
        $this->_clientFactory = $clientFactory;
    }

    /**
     * Utilise le Factory privé pour créer l'instance de notre client majeur
     */
    public function createMajor(
        float $size,
        float $weight,
        string $surname,
        string $firstname,
        bool $haveDrivingLicence
    ): AbstractMajor {
        return $this->_clientFactory->createMajor($size, $weight, $surname, $firstname, $haveDrivingLicence);
    }

    /**
     * Utilise le Factory privé pour créer l'instance de notre client mineur
     */
    public function createMinor(
        float $size,
        float $weight,
        string $surname,
        string $firstname
    ): AbstractMinor {
        return $this->_clientFactory->createMinor($size, $weight, $surname, $firstname);
    }
}
