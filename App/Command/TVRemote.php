<?php

declare(strict_types=1);

namespace App\Command;

include_once(__DIR__ . "\\..\\..\\autoload.php");

/**
 * class appelant
 * Ici on peut ajouter des fonctionnalités, telles qu'une mise en cache pour des logs, 
 * un système de undo/redo ou encore un système d'autorisation
 */
class TVRemote
{
    public function execute(TVRemoteInterface $command)
    {
        $command->execute();
    }
}
