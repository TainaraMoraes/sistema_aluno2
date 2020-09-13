<!Doctype hmtl>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Consulta dados dos alunos</title>
    </head>
    <body>
        <?php
            include ("conexao_bd.php");

            $sql = "SELECT * FROM pessoas";
            
            $query = mysqli_query($conexao_bd, $sql);
                if($query){
                    if(mysqli_num_rows($query) > 0){
                        
                        echo "<table border='1'>";
                            echo '
                                <tr>
                                    <th>R.A</th>
                                    <th>Nome</th>
                                    <th>Idade</th>
                                    <th>Endereço</th>
                                    <th colspan="2">Operações</th>
                                </tr>
                            ';
                        while(($resul = mysqli_fetch_assoc($query)) != null){

                            echo "<tr>";
                                echo "<td>" . $resul['R_A'] . "</td>";
                                echo "<td>" . $resul['Nome'] . "</td>";
                                echo "<td>" . $resul['Idade'] . "</td>";
                                echo "<td>" . $resul['Endereco'] . "</td>";
                                echo "<td><a href='editar_aluno.php?ra=$resul[R_A]'>Editar</a></td>";
                                echo "<td><a href='remover_aluno.php?ra=$resul[R_A]'>Remover</a></td>";
                            echo "</tr>";
                        }  
                        echo "</table>";          
                    }
                }else{
                    echo "Problema de sintaxe SQL<br>";
                    echo mysqli_error($conexao_bd);
                }

            mysqli_close($conexao_bd);


        ?>
        <a href="menu.php">Voltar</a>
    </body>
</html>