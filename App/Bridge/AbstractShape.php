<?php

declare(strict_types=1);

namespace App\Bridge;

include_once(__DIR__ . "\\..\\..\\autoload.php");

/**
 * Class abstraite qui contiendra la couleur
 */
abstract class AbstractShape
{
    protected $_size;
    protected $_color;
    protected $_id;

    public function __construct(int $sizeInPixel, string $id, Icolor $color)
    {
        $this->_size = $sizeInPixel;
        $this->_color = $color;
        $this->_id = $id;
    }

    abstract public function draw();
}
