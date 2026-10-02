<?php
require_once __DIR__ . "/../../session.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $disciplina = $_POST["disciplina"]; 
    
    adicionarProfessor($nome,$cpf,$disciplina);
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/professores.css" />
    <title>Cadastro de Professores</title>
</head>
<style>
        
    </style>
<body>


    <form method="post" class="formulario">
        <h2>Cadastro de Professores</h1>
        <div>
            <label for="nome">Nome:</label>
            <input 
                type="text" 
                id="nome" 
                name="nome" 
                placeholder="Digite o nome do professor"
                required
            >
        </div>

        <br>

        <div>
            <label for="cpf">CPF:</label>
            <input 
                type="text" 
                id="cpf" 
                name="cpf" 
                placeholder="000.000.000-00"
                maxlength="14"
                required
            >
        </div>

        <br>

        <div>
            <label for="disciplina">Disciplina:</label>
            <select id="disciplina" name="disciplina" required>
                <option value="">Selecione uma disciplina</option>
                <option value="matematica">Matemática</option>
                <option value="portugues">Português</option>
                <option value="historia">História</option>
                <option value="geografia">Geografia</option>
                <option value="ciencias">Ciências</option>
                <option value="ingles">Inglês</option>
                <option value="educacao_fisica">Educação Física</option>
                <option value="artes">Artes</option>
                <option value="informatica">Informática</option>
            </select>
        </div>

        <br>

        <button type="submit">Cadastrar Professor</button>
        <button type="reset">Limpar</button>

    </form>

</body>
</html>

