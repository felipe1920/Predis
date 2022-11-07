<?php

echo '<pre>';

require_once("./vendor/autoload.php");

Predis\Autoloader::register();

$conexao = new Predis\Client([
    'scheme'    => 'tcp',
    'host'      => '127.0.0.1',
    'port'      => 6379,
    'database' => 8
]);

$dadosTeste = [];
for ($i = 1; $i <= 10; $i++)
{

    $dadosTeste[$i]['chave'] = 'CHAVE-' . $i;
    $dadosTeste[$i]['valor'] = 'VALOR-' . $i;
}

// SETA DADOS PARA TESTE
foreach ($dadosTeste as $dT)
{
    $conexao->set($dT['chave'], $dT['valor']);
}

foreach ($dadosTeste as $dT)
{
    echo "GET: " . $conexao->get($dT['chave']) . "\r\n";
}
