<?php

declare(strict_types=1);

namespace App\Facade;

require_once("../../autoload.php");

// Instanciation de notre facade
$home = new HomeFacade();

// Ici, notre façade est utilisée, on ne s'occupe pas de ce qu'il se passe derière
$home->createHome();
$home->createHotel();

/**
 * Attention : c'est un exemple web
 */
