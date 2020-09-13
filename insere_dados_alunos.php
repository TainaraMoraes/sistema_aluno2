<!Doctype hmtl>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Inserir dados dos alunos</title>
    </head>
    <body>
        <?php
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];
            $endereco = $_POST["endereco"];

            include ("conexao_bd.php");

            $sql = "INSERT INTO pessoas (nome, idade, endereco)
                   VALUE ('$nome', $idade, '$endereco')";

            include ("fecha_conexao_bd.php");

        ?>
    </body>
</html>