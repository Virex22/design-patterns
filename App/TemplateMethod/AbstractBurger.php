<?php

declare(strict_types=1);

namespace App\TemplateMethod;

require_once("../../autoload.php");

abstract class AbstractBurger
{
    protected $composition;

    abstract public function addSauce();

    // DoBurger est la templateMethode qui va appeller toutes les autres methodes
    public function DoBurger()
    {
        $this->addBread();
        $this->addSteak();
        $this->addCheese();
        $this->addBacon();
        $this->addSalad();
        $this->addPickle();
        $this->addTomato();
        $this->addBread();
    }

    public function showComposition(string $name)
    {
        echo "$name : " . PHP_EOL;
        foreach ($this->composition as $value) {
            echo $value . PHP_EOL;
        }
        echo PHP_EOL;
    }

    public function addTomato()
    {
        $this->composition[] = "Tomate";
    }
    public function addBread()
    {
        $this->composition[] = "Pain";
    }
    public function addCheese()
    {
        $this->composition[] = "Fromage";
    }
    public function addSalad()
    {
        $this->composition[] = "Salade";
    }
    public function addPickle()
    {
        $this->composition[] = "Cornichon";
    }
    public function addSteak()
    {
        $this->composition[] = "Steak";
    }
    public function addBacon()
    {
        $this->composition[] = "Tranche de lard";
    }
}
