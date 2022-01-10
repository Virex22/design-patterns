<?php

declare(strict_types=1);

namespace App\Composite;

include_once(__DIR__ . "\\..\\..\\autoload.php");
/**
 * Ici SetOfMeal est une classe compose, elle contient des feuilles mais reste quand même enfant de AbstractMeal
 */
class SetOfMeal extends AbstractMeal
{
    protected $_subMeal = [];
    function addSubMeal(AbstractMeal $subMeal): bool
    {
        $this->_subMeal[]  = $subMeal;
        return true;
    }

    function ShowRecipe()
    {
        echo "submeal : " . PHP_EOL;
        foreach ($this->_subMeal as $meal)
            $meal->showRecipe();
        echo "ingredients : " . PHP_EOL;
        foreach ($this->_ingredients as $ingredient)
            echo $ingredient . PHP_EOL;
        echo "steps : " . PHP_EOL;
        foreach ($this->_steps as $step)
            echo $step . PHP_EOL;
    }
}
