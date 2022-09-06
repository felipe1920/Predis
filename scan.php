<?php

require './conexao.php';


$iterator = null;

print_r(
    $conexao->scan(
        $iterator,
        [
            'match' => 'CHAVE-*',
            'count' => 50,
        ]
    )
);
