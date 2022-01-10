<?php

declare(strict_types=1);

namespace App\Observator;

require_once("../../autoload.php");

// Classe qui permet de lier nos sujets avec nos observateurs
class TobaccoSubject
{
    protected $observers;

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

    public function addObservator(ObservatorInterface $observer)
    {
        $this->observers[] = $observer;
    }
    public function removeObservator(ObservatorInterface $observer)
    {
        array_splice($this->observers, array_search($observer, $this->observers), 1);
    }
}
