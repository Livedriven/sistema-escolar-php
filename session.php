<?php
require_once __DIR__ ."/src/classes/Pessoa.php";
require_once __DIR__ . "/src/classes/CadastrosRecentes.php";
require_once __DIR__ ."/src/classes/Aluno.php";
require_once __DIR__ ."/src/classes/Professor.php";

//Verifica se tem uma sessão iniciada, se não tive inicia uma
if(session_status() === PHP_SESSION_NONE){
    session_start();
}

//Verifica se o array alunos já existe na sessão
//Caso não exista ele cria o array
if(!isset($_SESSION["Alunos"])){
    $_SESSION["Alunos"] = [];
}

if(!isset($_SESSION["Professores"])){
    $_SESSION["Professores"] = [];
}


function adicionarAluno($nome,$cpf,$curso,$matricula){
    $aluno = new Aluno($nome,$cpf,$curso,$matricula);
    $_SESSION["Alunos"][] = $aluno;
    CadastrosRecentes::getInstance()->adicionar($aluno);
}

function adicionarProfessor($nome,$cpf,$disciplina){
    $professor = new Professor($nome,$cpf,$disciplina);
    $_SESSION["Professores"][] = $professor;
    CadastrosRecentes::getInstance()->adicionar($professor);
}

function recemCadastrados():array{
    $historico = CadastrosRecentes::getInstance()->getHistorico();
    return $historico;
}
?>