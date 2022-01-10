<?php

declare(strict_types=1);

namespace App\State;

require_once("../../autoload.php");

//Creation de notre téléphone
$phone = new Phone();


// Tests 
$phone->button();
$phone->button();
$phone->setIsCharging(true);
$phone->button();
