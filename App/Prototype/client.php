<?php

declare(strict_types=1);

namespace App\Prototype;

include_once(__DIR__ . "\\..\\..\\autoload.php");

// Instanciation de notre blibliothéque de models
$prototypeRegistery = new PrototypeRegistery();

// Création d'un nouvel objet "Car"
$car = new Car("renault", "scenic");
$car->setColor("Red");

// Enregistrement dans notre blibliothèque
$prototypeRegistery->addItem("car", $car);



// Création du premier clone
$newCar = $prototypeRegistery->getCloneByID("car");
$newCar->describe();

// Création du deuxième clone
$newCar2 = $prototypeRegistery->getCloneByID("car");
$newCar2->describe();
