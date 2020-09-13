<!Doctype hmtl>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Conexão dados dos alunos</title>
    </head>
    <body>
        <?php
           $conexao_bd = mysqli_connect("localhost", "tainara", "123456");

           if(!$conexao_bd){
               echo mysqli_connect_error($conexao_bd);
           }

           $seleciona_bd = mysqli_select_db($conexao_bd, "alunos");
           if(!$seleciona_bd){
                echo mysqli_error($conexao_bd);
           }
        ?>
    </body>
</html>