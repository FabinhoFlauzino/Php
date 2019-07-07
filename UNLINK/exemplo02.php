<?php 

if(!is_dir("images")){// verifica se não é um diretorio
    mkdir("images"); //cria uma pasta se não existir
} 

foreach (scandir("images") as $item) { //percorre itens dentro da pasta images
    if (!in_array($item, array(".", ".."))) { //percorre os objetos dentro da pasta images e retira do array os pontos
        
        unlink("images/" . $item); // apaga os item dentro da pastaS

    }
}

echo "OK";
?>