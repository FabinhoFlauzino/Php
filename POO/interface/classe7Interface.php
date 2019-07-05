<?php 

interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocaMacha($marcha);
}

class Civic implements Veiculo{

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

$carro = new Civic();

$carro->acelerar(200);

$carro->frenar(40);

$carro->trocaMacha(4);

?>