<?php
require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Fabinho Flauzino");
$cad->setEmail("fabioflauzino@hotmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();
?>