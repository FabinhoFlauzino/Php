<?php 

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
$headres = array();

foreach ($usuarios[0] as $key => $value) {
    array_push($headres, ucfirst($key));
}


$file = fopen("usuarios.csv", "w+"); //abre um csv usuarios se não tiver o arquivo ele cria
fwrite($file, implode("," , $headres). "\r\n");

foreach ($usuarios as $row) {//para cada linha 

    $data = array();

    foreach ($row as $key => $value) {//coluna
        
        array_push($data, $value);
    }
    
    fwrite($file, implode(",", $data). "\r\n");
}

fclose($file);

?>