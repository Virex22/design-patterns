<?php

declare(strict_types=1);

namespace App\TemplateMethod;

require_once("../../autoload.php");

class NormalBurger extends AbstractBurger
{
    public function addSauce()
    {
        $this->composition[] = "Sauce Mayonaise";
    }
}
