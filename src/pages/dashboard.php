<?php
require_once __DIR__ . "/../../session.php";

//Varival para armazenar o tamanho do array Alunos
//com o objetivo de fornecer uma metrica de quantos alunos já foram cadastrados
$alunosCadastrados = count($_SESSION["Alunos"]);

//Variavel para armazenar o tamanho do array Professores
//com o objetivo de fornecer uma metrica de quantos alunos já foram cadastrados
$professoresCadastrados = count($_SESSION["Professores"]);

//Variavel para armazenar o retorno da função recemCadastrados
//Essa função retorna um array associativo de objetos
//Usaremos essa variavel para exibir os cadastrados recentemente
$cadastrosRecentes = recemCadastrados();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Escolar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
</head>

<body class=" d-flex flex-column min-vh-100">
    <header class="d-flex justify-content-between align-items-center px-2 headerDashboard">
            <h1 class="text-white fs-4">Sistema Escolar</h1>
            <p class="text-white mt-2 fs-4 ">Dashboard</p>
    </header>
    <main class="p-2 container-fluid flex-fill mt-4">
        <h2 class="text-dark title">Dashboard</h2> 
        <p class="text-dark subtitle">Bem-vindo ao Sistema Escolar</p>
            <section class="border p-5 d-flex flex-column gap-2 container-md rounded mt-5">
                <article class="row d-flex  gap-1">
                    <div class="col border rounded shadow-sm">
                        <div class="p-2">
                            <p class="text-secondary fs-5">
                                Alunos cadastrados
                            </p>
                            <p class="fs-3 fw-bold text-black">
                                <?php
                                echo $alunosCadastrados;
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="col border rounded shadow-sm">
                        <div class="p-2">
                            <p class="text-secondary fs-5">
                                Professores cadastrados
                            </p>
                            <p class="fs-3 fw-bold text-black">
                                <?php
                                echo $professoresCadastrados;
                                ?>
                            </p>
                        </div>
                    </div>
                </article>
                <article class="row">
                    <div class="col border rounded card-hover btn btn-secondary shadow m-2 p-1">
                        <a href="cadastrarAluno.php" class="fs-5">Cadastrar Aluno +</a>
                    </div>
                    <div class="col border rounded card-hover btn btn-secondary  shadow m-2 p-1">
                        <a href="cadastrarProfessor.php" class="fs-5">Cadastrar Professor +</a>
                    </div>
                </article>
                <article class="row mt-4 p-3">
                    <h2 class="text-center">Cadastrados recentementes</h2>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="border small">
                                <td class="border text-center text-dark fw-bold px-2">Nome</td>
                                <td class="border text-center text-dark fw-bold px-3">Tipo</td>
                            </tr>
                        </thead>
                        <tbody class="border">
                            <?php if(count($cadastrosRecentes) === 0):?>
                                    <tr>
                                        <td colspan="2" class="text-center text-secondary py-2">
                                            Nenhum cadastro recente
                                        </td>
                                    </tr>
                            <?php else: ?>
                                <?php foreach($cadastrosRecentes as $pessoa): ?>
                                    <tr class="border">
                                        <td class="border px-2">
                                            <?php echo htmlspecialchars($pessoa->getNome())?>
                                        </td>
                                        <td class="border px-2">
                                            <?php echo $pessoa instanceof Aluno ? "Aluno": "Professor"; ?>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </article>
            </section>
    </main>
    <footer class="bg-dark text-white mt-auto">
        <p class="container py-4">&copy; 2026 - Todos os direitos reservados.</p>
    </footer>
</body>

</html>