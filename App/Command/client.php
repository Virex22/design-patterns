<?php

declare(strict_types=1);

namespace App\Command;

include_once(__DIR__ . "\\..\\..\\autoload.php");

// Creation de notre recepteur
$tvChannel = new TVChannel(5);

// Creation de nos commandes
$plus = new TVRemotePlus($tvChannel);
$minus = new TVRemoteMinus($tvChannel);
$change = new TVRemoteChannelChange($tvChannel, 4);

// Creation de notre appelant
$remote = new TVRemote();

$remote->execute($plus);
echo $tvChannel->getChannel() . PHP_EOL;
$remote->execute($minus);
echo $tvChannel->getChannel() . PHP_EOL;
$remote->execute($change);
echo $tvChannel->getChannel() . PHP_EOL;
$remote->execute(new TVRemoteChannelChange($tvChannel, 2));
echo $tvChannel->getChannel() . PHP_EOL;
