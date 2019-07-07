<?php 

require_once("config.php");

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
$root = new Usuario(); //instancia um novo objeto
$root->loadById(4);  //chama o objeto que esta na função getById
echo $root; //mostra o resultado */

//$lista = Usuario::getList();//como não usa $this não precisa criar um objeto pode criar direto 
//echo json_encode($lista);

//carrrega uma lsita de usuario pelo login
//$search = Usuario::search("no");
//echo json_encode($search);


//carrega um usuario usando login e senha
$usuario = new Usuario();
$usuario->login("Fulano","4567");
echo $usuario;

?>