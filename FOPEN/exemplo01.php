<?php 

$file = fopen("log.txt", "a+");

fwrite($file, date("Y-m-d") . "\r\n");

fclose($file);

echo "Arquivo criado com sucesso";

?>