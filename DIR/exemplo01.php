<?php 

$name = "images";

if(!is_dir($name)){//verifica se existe o diretorio

    mkdir($name);//cria uma pasta
    echo "Diretorio $name criado com sucesso";
}else {

    rmdir($name);//remove uma pasta
    echo "Diretorio $name ja existe, foi removido";
}

?>