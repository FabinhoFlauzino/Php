<?php
    $anoNascimento = 1985;

    $nome = "Fabinho";

    $sobrenome = "Flauzino";

    $nomeCompleto = $nome." ".$sobrenome;
    //concatenação entre duas variaveis usasse o "."
    //não esquecer do espaço para não ficar colado as palavras

    echo $nome;

    echo "<br/>";

    if(isset($nome)){
        //isset verifica se a variavel $nome ja esta sendo usada e mostra na tela
        echo $nome;

    }

    unset($nome);
    //unset apaga uma variavel que ja esta sendo usada da memória mas nao 
    //perde as declarações anteriores até o uso do unset

?>