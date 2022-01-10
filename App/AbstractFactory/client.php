<?php

declare(strict_types=1);

namespace App\AbstractFactory;

include_once(__DIR__ . "\\..\\..\\autoload.php");

// création de nos fabriques
$fabriques = [
    new ManFactory(),
    new WomenFactory()
];

// Création des noms
$nom = ["Bureau", "Perillard", "Bouvier", "Asselin", "Boulanger"];

// Création des prénoms
$prenom = ["Thomas", "Kari", "Faustin", "Serge", "Henry"];

// Tableau contenant tous nos clients
$clients = [];

// Pour nos deux fabriques
foreach ($fabriques as $fabrique) {
    // On crée une nouvelle inscription
    $inscription = new Inscription($fabrique);

    // On ajoute un majeur à partir de notre inscription (avec des paramètres aléatoires)
    $clients[] = $inscription->createMajor(
        mt_rand(120, 200) / 100,
        mt_rand(60, 100),
        $nom[array_rand($nom)],
        $prenom[array_rand($prenom)],
        mt_rand(0, 1) == 1
    );

    // On fait de même pour un mineur
    $clients[] = $inscription->createMinor(
        mt_rand(90, 160) / 100,
        mt_rand(45, 80),
        $nom[array_rand($nom)],
        $prenom[array_rand($prenom)]
    );
}

// On demande à chaque client de se présenter
foreach ($clients as $client)
    $client->presentation();
