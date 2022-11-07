<?php

require './conexao.php';

for ($i = 1; $i <= 10; $i++) {

    $chave = 'CHAVE-SMS-' . $i;

    $conexao->set($chave, 'valor da chave =' . $i);

    echo "$chave\r\n";
}
