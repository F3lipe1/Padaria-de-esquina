<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="cadastro.css">
</head>

<body>

    <header>
        <h1>Cadastro de Clientes | Padaria de Esquina</h1>
    </header>


    <main class="texte">

        <?php
        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];
        $emai = $_GET["email"];

        echo "<p>É um prazer te conhecer, a Padaria de Esuquina agradece $nome $sobrenome! Entraremos em contato com você <p>";
        ?>
        
        <button class="text-js">

            <a href="javascript:history.go(-1)">Voltar para página anterior</a>

        </button>

    </main>


</body>

</html>