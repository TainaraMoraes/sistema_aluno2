<!Doctype hmtl>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Conexão dados dos alunos</title>
    </head>
    <body>
        <?php
            $query = mysqli_query($conexao_bd, $sql);
            if($query){
                echo "Aluno $nome cadastrado com sucesso!<br>";
                echo "<a href='menu.php'>Voltar</a>";
               
            }else{
                echo mysqli_error($conexao_bd);
            }

            mysqli_close($conexao_bd);
        ?>
    </body>
</html>