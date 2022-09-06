<?php

echo '<pre>';

require_once("./vendor/autoload.php");

Predis\Autoloader::register();

$conexao = new Predis\Client([
    'scheme'    => 'tcp',
    'host'      => '127.0.0.1',
    'port'      => 6379,
]);