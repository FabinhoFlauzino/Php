<?php 
    //variavel tipo basico
    $nome = "Fabinho";
    $site = 'www.fabinhoflauzino.com';

    $ano = 1985;
    $salario = 5500.99;
    $bloqueado = false;
    ////////////////////////////////////////
    //variavel tipo composto
    $frutas = array("abacaxi", "laranja", "manga");

    echo $frutas[2];
    echo "<br/>";

    $nascimento = new Datetime();

    var_dump($nascimento);

    //////////////////////////////////////////
    //variavel tipo especial
    $arquivo = fopen("exemplo-03.php", "r");

    var_dump($arquivo);

    $nulo = NULL;
?>

