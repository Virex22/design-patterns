<?php

declare(strict_types=1);

namespace App\Decorator;

include_once(__DIR__ . "\\..\\..\\autoload.php");

// Creation de l'objet de base
$phone = new Phone();

// Ajout d'une fonctionnalité via le décorateur
$phone = new PhoneDecoratorPayement($phone);
//$phone = new PhoneDecoratorInternet($phone);



// Utilisation du téléphone pour voir les fonctionnalités disponibles
$phone->utilisation();
