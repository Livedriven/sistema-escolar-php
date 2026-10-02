<?php
class Professor extends Pessoa{
    private string $Disciplina;

    public function __construct(string $nome,string $cpf,string $disciplina){
        parent::__construct($nome,$cpf);
        $this->Disciplina = $disciplina;
    }
}
?>