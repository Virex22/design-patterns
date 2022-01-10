<?php

declare(strict_types=1);

namespace App\Observator;

require_once("../../autoload.php");

$tobaccoShop = new TobaccoShop();

// Creation de nos trois client
$clientTobacco1 = new ClientTobacco("jerome", $tobaccoShop);
$clientTobacco2 = new ClientTobacco("jamy", $tobaccoShop);
$clientTobacco3 = new ClientTobacco("anthony", $tobaccoShop);

// Définition des interets de chacun
$clientTobacco1->setInterest("cig");
$clientTobacco2->setInterest("newspaper");
$clientTobacco3->setInterest("newspaper");

// On ajoute l'observateur pour le client 1 et 2,
// Le 3 on ne le lis pas pour bien voir qu'il ne sera pas notifié
$tobaccoShop->addObservator($clientTobacco1);
$tobaccoShop->addObservator($clientTobacco2);

// tests 
$tobaccoShop->setCigAvailable(true);
$tobaccoShop->setCigAvailable(false);
$tobaccoShop->setNewspaperAvailable(true);
$tobaccoShop->setNewspaperAvailable(false);
$tobaccoShop->addObservator($clientTobacco3);
$clientTobacco3->setInterest("");
$tobaccoShop->setNewspaperAvailable(true);
$tobaccoShop->setNewspaperAvailable(false);
$tobaccoShop->removeObservator($clientTobacco2);
$tobaccoShop->setNewspaperAvailable(true);
