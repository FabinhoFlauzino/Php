<?php 

interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocaMacha($marcha);
}

abstract class Automovel implements Veiculo{

    public function acelerar($velocidade){
        echo "O veiculo acelerou até ".$velocidade." Km/h<br>";
    }

    public function frenar($velocidade){
        echo "O veiculo frenou até ". $velocidade." Km/h<br>";
    }

    public function trocaMacha($marcha)
    {
        echo "O veiculo engatou a marcha ".$marcha;
    }
}

class Saveiro extends Automovel{
    public function empurrar(){

    }
}

$carro = new Saveiro();
$carro->acelerar(150);
?>