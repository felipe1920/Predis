<?php

require './conexao.php';


$iterator = NULL;

print_r(
    $conexao->scan(
        $iterator,
        [
            'match' => 'NOTIFICATIONREP72*',
            'count' => 20000,
        ]
    )
);

// SCAN 0 COUNT 20000 MATCH NOTIFICATIONREP72*


/**
 * match = PALAVRA A SER BUSCADA, CASO QUEIRA BUSCAR POR UMA PALAVRA PARCIAL USAR O *
 * count = TAMANHO DO BLOCO A SER ANALISADO PARA VER SE É LOCALIZADA A PALAVRA DESEJADA, A BUSCA VAI SER REALIZADA NOS PRIMEIOS 20K DE REGISTROS 
 * 
 * OBS-1: o retorno é aletório
 * OBS-2: a palavra será localizada dentro do range informado no count ou seja: a palavra 'NOTIFICATIONREP72' será localizada dentro dos primeiros 20k de registros.
 * OBS-3: $iterator == paginação ??
 */