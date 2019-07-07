<?php 
    class sql extends PDO{
        private $conn;// variavel para conexão

        public function __construct(){ //funçao para conexão com o banco de dados
            $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
        }

        private function setParams($statment, $parameters = array()){ //função que varias linhas do banco
            foreach ($parameters as $key => $value) {
                $this->setParam($statment, $key, $value);
            }
        }

        private function setParam($statment, $key, $value){ //função que pega uma linha do banco
            $statment->bindParam($key, $value);
        }

        public function query($rawQuery, $params = array()){ //função que executa o retorno do pedido do banco
            $stmt = $this->conn->prepare($rawQuery);

            $this->setParams($stmt, $params);

            $stmt->execute();

            return $stmt;
        }

        public function select($rawQuery, $params = array()):array{ //função que traz fatiado(detalhado) as querys do banco
            $stmt = $this->query($rawQuery, $params);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
    }

?>