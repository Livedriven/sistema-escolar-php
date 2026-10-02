<?php
abstract class Pessoa {
    protected string $nome;
    protected string $CPF;

    public function __construct($nome,$cpf){
        $this->nome = $nome;
        $this->CPF = $cpf;
    }

    public function getNome():string{
        return $this->nome;
    }
}
?>