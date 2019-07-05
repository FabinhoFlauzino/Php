<?php 
abstract class Animal{
    public function falar(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }
}

class Cachorro extends Animal{
    public function falar(){
        return "AU AU";
    }
}

class Gato extends Animal{
    public function falar(){
        return "MIAU";
    }
}

$pluto = new Cachorro();
$garfield = new Gato();

echo $pluto->falar()."<br>";
echo $pluto->mover()."<br>";

echo $garfield->falar()."<br>";
echo $garfield->mover()."<br>";
?>