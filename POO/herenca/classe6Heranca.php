<?php 

class Documento{
    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($n){
        $this->numero = $n;
    }
}


class CPF extends Documento{

    public function validar($numeroCPF):bool{
        $numeroCPF = $this->getNumero();

        if(empty($numeroCPF)) {
            return false;
        }
        
        //Elimina possivel mascara
        $numeroCPF = preg_match('/[0-9]/', $numeroCPF)?$numeroCPF:0;
    
        $numeroCPF = str_pad($numeroCPF, 11, '0', STR_PAD_LEFT);
         
        //verifica se foi informados 11 digitos
        if (strlen($numeroCPF) != 11) {
            echo "length";
            return false;
        }
        
        else if ($numeroCPF == '00000000000' || 
            $numeroCPF == '11111111111' || 
            $numeroCPF == '22222222222' || 
            $numeroCPF == '33333333333' || 
            $numeroCPF == '44444444444' || 
            $numeroCPF == '55555555555' || 
            $numeroCPF == '66666666666' || 
            $numeroCPF == '77777777777' || 
            $numeroCPF == '88888888888' || 
            $numeroCPF == '99999999999') {
            return false;
    
         } else {   
             //calcula se é um cpf valido
            for ($t = 9; $t < 11; $t++) {
                 
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $numeroCPF{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($numeroCPF{$c} != $d) {
                    return false;
                }
            }
            return true;
        }   
    }
}

$doc = new CPF();
$doc->setNumero("12345678911");
echo $doc->validar("12345678911");

?>