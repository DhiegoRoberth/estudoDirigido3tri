<?php
class Funcionario
{


    public $nome;
    public $departamento;
    public $salario;
    private $dataEntrada; // sempre sera do tipo Data
    public $CPF;
    
    public function informarData(Data $data){
        $this->dataEntrada = $data;
    }

    public function recebeAumento(){
        $this->salario=$this->salario+($this->salario*0.1);
    }
    
    public function calculoGanhoAnual(){
        return $this->salario*12;
    }

    public function mostra(){
        //echo "O funcionário ". $this->nome . " do departamento " . $this->departamento . " funcionario desde ".$this->dataEntrada. ", possui um salario de R$ ". $this->salario. "\n";

        echo "O funcionario {$this->nome} do departamento {$this->departamento}, funcionario desde {$this->dataEntrada}, possui um salario de R$ {$this->salario} \n";
    }
}



class Data {

    private $dia;
    public $mes;
    public $ano;

    public function  __construct(int $dia,int $mes,int $ano)
    {
        if ($dia < 1 || $dia > 31) {
            throw new Exception("Dia incorreto");
            
        }

        $this->dia=$dia;
        $this->mes=$mes;
        $this->ano=$ano;
    }

    public function __toString()
    {
        $data = $this->dia."/".$this->mes."/".$this->ano;
        return $data;

    }
}








//$funcionario=new Funcionario();
//$funcionario->mostra();
// $usuario = new funcionario();
// $usuario->salario=100;
// $usuario->calculoGanhoAnual();
// echo $usuario->ganhoAnual;