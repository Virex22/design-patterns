<?php

declare(strict_types=1);

namespace App\Composite;

include_once(__DIR__ . "\\..\\..\\autoload.php");

/**
 * Class composant
 */
abstract class AbstractMeal
{
    protected $_ingredients = [];
    protected $_steps = [];

    public function addIngredient(string $ingredient)
    {
        $this->_ingredients[] = $ingredient;
    }
    public function addStep(string $step)
    {
        $this->_steps[] = $step;
    }
    abstract function ShowRecipe();
}
