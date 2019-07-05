<?php

$conn = new mysqli("localhost","root","","dbphp7");

if($conn->connect_error){
    echo "[Erro]: ".$conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, senha) VALUES('Fabio',1234)");

//$stmt->bind_param("ss",$login,$senha);

//$login = "user";
//$senha = "12345";
$stmt->execute();
?>