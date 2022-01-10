<?php

declare(strict_types=1);

namespace App\Builder;

include_once(__DIR__ . "\\..\\..\\autoload.php");

// Creation de notre profil basique
$profileBuilder = new ProfileBuilder("John", "Doe");
$profileBasic = $profileBuilder->built();

// Creation de notre profil avec description
$profileTypeDescription = new ProfileType(new ProfileBuilder("Gerard", "Kanson"));
$profileAvecDescription = $profileTypeDescription->constructMediumProfile();

// Creation de notre profil avancé
$profiletypeAvancer = new ProfileType(new ProfileBuilder("Jack", "Golmer"));
$profileAvancer = $profiletypeAvancer->constructAdvancedProfile(15, 60, "Jago");


// Creation de notre profil personnalisé
$profileBuilderPerso = new ProfileBuilder("Theo", "Dore");
$profileBuilderPerso->addAge(15);
$profileBuilderPerso->activeDescription(true);
$profileperso = $profileBuilderPerso->built();

/**
 * Attention : c'est un exemple web
 */
?>

<!DOCTYPE html>
<html lang="fr">
<style>
    .profile {
        margin: 20px auto;
        width: 70%;
        border-radius: 20px;
        box-shadow: 0 0 5px 1px black;
        padding: 20px;
    }

    p {
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>

<body>
    <?= $profileBasic->display() ?>
    <?= $profileAvecDescription->display() ?>
    <?= $profileAvancer->display() ?>
    <?= $profileperso->display() ?>
</body>

</html>