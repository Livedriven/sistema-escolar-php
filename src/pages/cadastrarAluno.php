<?php
require_once __DIR__ . "/../../session.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $curso = $_POST["curso"];
    $matricula= $_POST["matricula"];
    
    adicionarAluno($nome,$cpf,$curso,$matricula);
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <link rel="stylesheet" href="../style/alunos.css">
</head>

<body>

    <form method="post" class="formulario">
        <h2>Cadastro de Aluno</h2>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite o nome" required>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf"
                placeholder="000.000.000-00"
                maxlength="14"
                required>

        <label for="curso">Curso:</label>
        <select id="curso" name="curso" required>
            <option value="">Selecione o curso</option>
            <option value="informatica">Informática</option>
            <option value="administracao">Administração</option>
            <option value="contabilidade">Contabilidade</option>
            <option value="enfermagem">Enfermagem</option>
        </select>

        <label for="matricula">Matrícula:</label>
        <input type="text" id="matricula" name="matricula"
                placeholder="Digite a matrícula"
                required>

        <button type="submit">Cadastrar Aluno</button>
        <button type="reset">Limpar</button>
    </form>

</body>
</html>