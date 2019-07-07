<?php 

class Usuario{

    private $idusuario;
    private $deslogin;
    private $dessenha;          //declaração de variaveis mesma que esta na tabela do banco
    private $dtcadastro;

    public function getIdusuario(){
        return $this->idusuario;
    }

    public function setIdusuario($value){
        $this->idusuario = $value;
    }

    public function getDeslogin(){
        return $this->deslogin;
    }

    public function setDeslogin($value){
        $this->deslogin = $value;
    }

    public function getDessenha(){
        return $this->dessenha;
    }

    public function setDessenha($value){
        $this->dessenha = $value;
    }

    public function getDtcadastro(){
        return $this->dtcadastro;
    }

    public function setDtcadastro($value){
        $this->dtcadastro = $value;
    }

    public function loadById($id){ //função para pegar elemento do banco pelo ID

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID"=>$id
        ));

        if (count($results)> 0 ) {
            
            $this->setData($results[0]);

        }
    }

    public function __toString(){ //função que trata o resultado vindo da tabela do banco e transforma em json
                                  //Faz o tratamento para mostrar os dados na tela ou em tabelas
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y")
        ));
    }

    //listar todos usuarios
    public static function getList(){ // vantagem se ser statico é que pode chamar ele direto na index usando ::
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
    }

    public static function search($login){//lista atraves do nome do login
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
            ':SEARCH'=>"%".$login."%"
        ) );
    }


    public function login($login, $password){
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
            ":LOGIN"=>$login,
            ":PASSWORD"=>$password
        ));

        if (count($results)> 0 ) {
            
            $this->setData($results[0]);

        } else {
            throw new Exception("Login e/ou senha invalidos");
            
        }
    }

    function setData($data){

        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));

    }    

    function insert(){

        $sql = new Sql();

        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ':LOGIN'=>$this->getDeslogin(),
            ':PASSWORD'=>$this->getDessenha()
        ));

        if (count($results) > 0) {
            $this->setData($results[0]);
        }
    }

    public function __construct($login = "", $password = ""){   
        $this->setDeslogin($login);
        $this->setDessenha($password);
    }

    public function update($login, $password){

        $this->setDeslogin($login);
        $this->setDessenha($password);

        $sql = new Sql();

        $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
            ':LOGIN'=>$this->getDeslogin(),
            ':PASSWORD'=>$this->getDessenha(),
            ':ID'=>$this->getIdusuario()
        ));
    }

    public function delete(){
        $sql = new Sql();

        $sql->query("DELETE FROM tb_usuarios  WHERE idusuario = :ID", array(
            ':ID'=>$this->getIdusuario()
        ));

        $this->setIdusuario(0);
        $this->setDessenha("");
        $this->setDeslogin("");
        $this->setDtcadastro(new DateTime());
    }


}

?>