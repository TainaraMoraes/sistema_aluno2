<!Doctype hmtl>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Remover os alunos</title>
    </head>
    <body>
        <?php
            $ra = $_GET["ra"];

            include('conexao_bd.php');
            
            $sql = "DELETE FROM pessoas WHERE R_A=$ra";

            include('fecha_conexao_bd.php');

            header('location:consulta_todos_alunos.php');
        ?>
       
    </body>
</html>