<?php

declare(strict_types=1);

namespace App\FactoryMethod;

include_once(__DIR__ . "\\..\\..\\autoload.php");

// Creation de notre FactoryMethode pour créer le bon ClientViewer
$constructViewer = new ConstructClientsViewerJSON();
$clientsViewer = $constructViewer->createClientViewer();

// Creation de nos clients
$clientsViewer->addClients("Dore", "Theo", 18);
$clientsViewer->addClients("Doe", "John", 22);
$clientsViewer->addClients("Jack", "Golmer", 28);

// Affichage de nos clients avec la méthode voulue
echo $clientsViewer->Display();
