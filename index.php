<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema Escolar</title>

    <link rel="stylesheet" href="src/style/style.css">
</head>

<body>

    <!-- Cabeçalho -->
    <header class="header">
        <div class="container header-container">

            <a href="#" class="logo">
                Sistema Escolar
            </a>

            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#inicio" class="nav-link">Início</a>
                    </li>

                    <li class="nav-item">
                        <a href="#sobre" class="nav-link">Sobre</a>
                    </li>

                    <li class="nav-item">
                        <a href="#funcionalidades" class="nav-link">
                            Funcionalidades
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#cadastros" class="nav-link">
                            Cadastros
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </header>


    <main>

        <!-- Hero / Apresentação -->
        <section id="inicio" class="hero">
            <div class="container hero-container">

                <div class="hero-content">

                    <span class="hero-tag">
                        Sistema de Cadastro Escolar
                    </span>

                    <h1 class="hero-title">
                        Gestão escolar simples e organizada
                    </h1>

                    <p class="hero-description">
                        Um sistema desenvolvido para facilitar o cadastro
                        e a organização das informações de alunos e
                        professores em um único ambiente.
                    </p>

                    <a href="src/pages/dashboard.php" class="button button-primary">
                        Conheça o sistema
                    </a>

                </div>

                <div class="hero-image">
                    <div class="dashboard-placeholder">
                        <img src="public/dashboardPrint.png" alt="Imagem de demonstração do dashboard">
                    </div>
                </div>

            </div>
        </section>


        <!-- Sobre -->
        <section id="sobre" class="about section">
            <div class="container">

                <div class="section-header">
                    <span class="section-tag">Sobre o sistema</span>

                    <h2 class="section-title">
                        Uma solução para organizar seus cadastros escolares
                    </h2>

                    <p class="section-description">
                        O sistema de cadastro escolar permite centralizar
                        e organizar as informações de alunos e professores,
                        proporcionando uma maneira mais prática de consultar
                        e gerenciar os dados da instituição.
                    </p>
                </div>

            </div>
        </section>


        <!-- Funcionalidades -->
        <section id="funcionalidades" class="features section">
            <div class="container">

                <div class="section-header">
                    <span class="section-tag">Funcionalidades</span>

                    <h2 class="section-title">
                        Recursos do sistema
                    </h2>

                    <p class="section-description">
                        Conheça as principais funcionalidades disponíveis
                        no sistema.
                    </p>
                </div>


                <div class="features-grid">

                    <!-- Alunos -->
                    <article class="feature-card">

                        <div class="feature-icon">
                            👨‍🎓
                        </div>

                        <h3 class="feature-title">
                            Cadastro de alunos
                        </h3>

                        <p class="feature-description">
                            Cadastre e mantenha organizadas as informações
                            dos alunos da instituição.
                        </p>

                    </article>


                    <!-- Professores -->
                    <article class="feature-card">

                        <div class="feature-icon">
                            👨‍🏫
                        </div>

                        <h3 class="feature-title">
                            Cadastro de professores
                        </h3>

                        <p class="feature-description">
                            Registre e consulte as informações dos professores
                            de forma simples e organizada.
                        </p>

                    </article>


                    <!-- Dashboard -->
                    <article class="feature-card">

                        <div class="feature-icon">
                            📊
                        </div>

                        <h3 class="feature-title">
                            Dashboard
                        </h3>

                        <p class="feature-description">
                            Visualize rapidamente os principais dados
                            cadastrados no sistema.
                        </p>

                    </article>

                </div>

            </div>
        </section>


        <!-- Dashboard -->
        <section class="dashboard section">
            <div class="container dashboard-container">

                <div class="dashboard-content">

                    <span class="section-tag">
                        Dashboard
                    </span>

                    <h2 class="section-title">
                        Tenha uma visão geral dos cadastros
                    </h2>

                    <p class="section-description">
                        O dashboard apresenta um resumo das informações
                        cadastradas, permitindo visualizar rapidamente
                        os principais dados do sistema.
                    </p>

                </div>

                <div class="dashboard-image">
                    <div class="dashboard-placeholder">
                        <span>
                            Imagem do Dashboard
                        </span>
                    </div>
                </div>

            </div>
        </section>


        <!-- Cadastros -->
        <section id="cadastros" class="registrations section">
            <div class="container">

                <div class="section-header">
                    <span class="section-tag">
                        Cadastros
                    </span>

                    <h2 class="section-title">
                        Organização dos dados
                    </h2>

                    <p class="section-description">
                        O sistema conta com áreas específicas para
                        o cadastro de alunos e professores.
                    </p>
                </div>


                <div class="registrations-grid">

                    <!-- Cadastro de alunos -->
                    <article class="registration-card">

                        <div class="registration-image">
                            <img src="public/FormularioAluno.png" alt="">
                        </div>

                        <div class="registration-content">

                            <h3 class="registration-title">
                                Cadastro de alunos
                            </h3>

                            <p class="registration-description">
                                Tenha as informações dos estudantes
                                organizadas e disponíveis para consulta
                                e gerenciamento.
                            </p>

                        </div>

                    </article>


                    <!-- Cadastro de professores -->
                    <article class="registration-card">

                        <div class="registration-image">
                            <img src="public/FormularioProfessor.png" alt="">
                        </div>

                        <div class="registration-content">

                            <h3 class="registration-title">
                                Cadastro de professores
                            </h3>

                            <p class="registration-description">
                                Organize as informações dos professores
                                em um cadastro centralizado e de fácil
                                utilização.
                            </p>

                        </div>

                    </article>

                </div>

            </div>
        </section>


        <!-- Benefícios -->
        <section class="benefits section">
            <div class="container">

                <div class="section-header">

                    <span class="section-tag">
                        Benefícios
                    </span>

                    <h2 class="section-title">
                        Uma forma mais simples de organizar seus dados
                    </h2>

                </div>


                <div class="benefits-grid">

                    <div class="benefit-item">

                        <h3 class="benefit-title">
                            Organização
                        </h3>

                        <p class="benefit-description">
                            Centralize as informações de alunos e
                            professores em um único sistema.
                        </p>

                    </div>


                    <div class="benefit-item">

                        <h3 class="benefit-title">
                            Praticidade
                        </h3>

                        <p class="benefit-description">
                            Facilite o cadastro e a consulta das
                            informações escolares.
                        </p>

                    </div>


                    <div class="benefit-item">

                        <h3 class="benefit-title">
                            Visão geral
                        </h3>

                        <p class="benefit-description">
                            Acompanhe os principais registros através
                            do dashboard.
                        </p>

                    </div>

                </div>

            </div>
        </section>


        <!-- Chamada final -->
        <section class="cta">
            <div class="container cta-container">

                <h2 class="cta-title">
                    Organize seus cadastros escolares de forma simples
                </h2>

                <p class="cta-description">
                    Tenha alunos e professores organizados em um único
                    sistema.
                </p>

                <a href="src/pages/dashboard.php" class="button button-secondary">
                    Conhecer o sistema
                </a>

            </div>
        </section>

    </main>


    <!-- Rodapé -->
    <footer class="footer">
        <div class="container footer-container">

            <p class="footer-text">
                &copy; 2026 Sistema Escolar. Todos os direitos reservados.
            </p>

        </div>
    </footer>

</body>
</html>