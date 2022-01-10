<?php

declare(strict_types=1);

namespace App\Composite;

include_once(__DIR__ . "\\..\\..\\autoload.php");

/**
 * Ici MealUnique est une feuille, car elle ne contient pas de sous-élément
 */
class MealUnique extends AbstractMeal
{
    function ShowRecipe()
    {
        echo "ingredients : " . PHP_EOL;
        foreach ($this->_ingredients as $ingredient)
            echo $ingredient . PHP_EOL;
        echo "steps : " . PHP_EOL;
        foreach ($this->_steps as $step)
            echo $step . PHP_EOL;
    }
}
