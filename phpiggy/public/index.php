<?php

declare(strict_types=1);
error_reporting(E_ALL); 
ini_set('display_errors', '1');

$app = include __DIR__ . "/../src/App/bootstrap.php";

$app->run();