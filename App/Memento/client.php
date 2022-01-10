<?php

declare(strict_types=1);

namespace App\Memento;

require_once("../../autoload.php");

// Creation de notre blibliotheque
$caretaker = new Caretaker();

// Création de notre objet d'origine
$originator = new NumberOriginator;

// tests
$originator->set(5);
$originator->set(15);
$caretaker->addMemento($originator->saveToMemento());
$originator->set(45);
$caretaker->addMemento($originator->saveToMemento());
$originator->set(2);
$caretaker->addMemento($originator->saveToMemento());
$originator->set(22);
$originator->restoreFromMemento($caretaker->getMemento(2));
$originator->restoreFromMemento($caretaker->getMemento((1)));
