<?php

declare(strict_types=1);

namespace App\Singleton;

include_once(__DIR__ . "\\..\\..\\autoload.php");

// On créer les différentes personnes de la salle
$salle = [
    new ClientHall("John", "Gatten"),
    new ClientHall("Harry", "Bat"),
    new ClientHall("Claire", "Johnson"),
    new ClientHall("Charle", "Robert"),
    new CoachHall("Suzanne", "Lima"),
    new CoachHall("Anna", "Booker"),
    ManagerHall::getInstance("John", "Sampson")
];

// On demande à chaque personne de présenter
foreach ($salle as $personne)
    $personne->speak();

// Ici, on récupère l'instance existante de notre class SalleGerant
$instance = ManagerHall::getInstance();
