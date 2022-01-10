<?php

declare(strict_types=1);

namespace App\Strategy;

require_once("../../autoload.php");

// Creation de notre sender avec la strategy MailSender
$sender = new Sender(new MailSender());
$sender->sendMessage("mon message");

// Creation de notre sender avec la strategy SMSSender
$sender->setStrategy(new SMSSender());
$sender->sendMessage("mon message");
