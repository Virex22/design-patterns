<?php

declare(strict_types=1);

namespace App\Facade;

use App\Bridge\Colors\Green;
use App\Bridge\Colors\Red;
use App\Bridge\Shape\Square;
use App\Bridge\Shape\Triangle;

require_once("../../autoload.php");

/**
 * La classe façade va encapsuler un ensemble de classes complexes pour des fonctionnalités dont on a besoin
 * Ici HomeFacade utilise une infime partie de notre Bridge et dans client.php le fonctionnement seras bien
 * plus éfficace
 */
class HomeFacade
{
    // Creation d'un triangle sur un carré pour faire une maison
    public function createHome()
    {
        $roof = new Triangle(100, uniqid("shape"), new Green());
        $roof->draw();
        echo "<br />";
        $base = new Square(100, uniqid("shape"), new Green());
        $base->draw();
        echo "<br />";
    }

    // Creation d'un triangle sur deux carrés pour faire un hotel
    public function createHotel()
    {
        $roof = new Triangle(100, uniqid("shape"), new Red());
        $roof->draw();
        echo "<br />";
        $base = new Square(100, uniqid("shape"), new Red());
        $base->draw();
        echo "<br />";
        $base = new Square(100, uniqid("shape"), new Red());
        $base->draw();
        echo "<br />";
    }
}
