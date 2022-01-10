<?php
spl_autoload_register(function ($class) {
    $fichier = __DIR__ . "\\" . $class . '.php';

    if (file_exists($fichier)) {
        include $fichier;
    }
});
