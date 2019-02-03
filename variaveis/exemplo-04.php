<?php 

    $nome = (int)$_GET["a"];

    //var_dump($nome);

    $ip = $_SERVER["REMOTE_ADDR"];
    //pegar ip de um cliente

    $ip1 = $_SERVER["SCRIPT_NAME"];

    echo $ip;
    echo $ip1;
?>