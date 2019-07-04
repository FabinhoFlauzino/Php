<?php

class Pessao{

    public $nome; //criando atributos

    public function falar(){//métodos 

        return "O meu nome é ".$this->nome; //usar this dentro do método pra chamar um atributo

    }
}

$fabio = new Pessao();
$fabio->nome = "Fabinho Flauzino";
echo $fabio->falar();

?>