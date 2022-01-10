<?php

declare(strict_types=1);

namespace App\ChainOfResponsability;

include_once(__DIR__ . "\\..\\..\\autoload.php");

/**
 * Le principe de la ChainOfResponsability est de pouvoir déléguer le fonctionnement à des classes
 * lors de l'utilisation la classe pourra déléguer le fonctionnement à la prochaine classe de la chaine
 * si elle est existante
 */
class ATM
{
    protected $nextATM;

    // Ici nous initialisons les classes suivantes directement dans notre classe (c'est plus adapté à notre besoin)
    public function withdrawalMoney(float $money)
    {
        if (!$this->setNext) {
            $this->setNext(new ATM500())
                ->setNext(new ATM200())
                ->setNext(new ATM100())
                ->setNext(new ATM50())
                ->setNext(new ATM20())
                ->setNext(new ATM10())
                ->setNext(new ATM5())
                ->setNext(new ATM2())
                ->setNext(new ATM1());
        }
        $this->withdrawal($money);
    }

    private function setNext(ATM $next)
    {
        $this->nextATM = $next;

        return $next;
    }

    protected function withdrawal(float $money)
    {
        if (!$this->nextATM) {
            echo "fin !" . PHP_EOL;
            return;
        }

        $this->nextATM->withdrawal($money);
    }
}
