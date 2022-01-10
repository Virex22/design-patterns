<?php

declare(strict_types=1);

namespace App\Iterator;

require_once("../../autoload.php");

$stringArray = new StringArray();

$stringArray->set("un");
$stringArray->set("deux");
$stringArray->set("trois");

echo "forward" . PHP_EOL;
foreach ($stringArray->getForwardIterator() as $key => $value) {
    echo "$key => $value" . PHP_EOL;
}

echo "backward" . PHP_EOL;
foreach ($stringArray->getBackwardIterator() as $key => $value) {
    echo "$key => $value" . PHP_EOL;
}
