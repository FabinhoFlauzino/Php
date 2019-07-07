<?php 

spl_autoload_register(function($class_name){ //função que resgistra pasta vinda de outro lugar
    $filename = "class".DIRECTORY_SEPARATOR.$class_name.".php";  //busca um arquivo que esta em outra pasta

    if (file_exists(($filename))) { //verifica se existe o arquivo
        require_once($filename);
    }
});
    
?>