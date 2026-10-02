<?php

class Aluno extends Pessoa {
    private string $Curso;
    private string $Matricula;

    public function __construct(string $nome,string $cpf,string $curso, string $matricula){
        parent::__construct($nome,$cpf);
        $this->Curso = $curso;
        $this->Matricula = $matricula;
    }

    public function getCurso(){
        return $this->Curso;
    }

}
?>