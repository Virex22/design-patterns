<?php

declare(strict_types=1);

namespace App\Composite;

include_once(__DIR__ . "\\..\\..\\autoload.php");

// Creation de la feuille MealUnique
$friteSteak = new MealUnique();
$friteSteak->addIngredient("steak");
$friteSteak->addIngredient("frite");
$friteSteak->addStep("cuire le steak");
$friteSteak->addStep("cuire les frites");

// Creation d'une autre feuille MealUnique
$omelette = new MealUnique();
$omelette->addIngredient("oeufs");
$omelette->addIngredient("champignons");
$omelette->addStep("cuire l'oeuf");
$omelette->addStep("cuire les champignons");
$omelette->addStep("mélanger");

// Utilisation de nos feuilles pour créer notre Compose SetOfMeal
$omeletteEtFriteSteak = new SetOfMeal();
$omeletteEtFriteSteak->addSubMeal($friteSteak);
$omeletteEtFriteSteak->addSubMeal($omelette);
$omeletteEtFriteSteak->addIngredient("salade");
$omeletteEtFriteSteak->addStep("ajouter la salade dans l'ensemble de plats");
$omeletteEtFriteSteak->showRecipe();
