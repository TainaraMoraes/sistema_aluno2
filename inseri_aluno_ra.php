<!Doctype hmtl>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Consulta dados dos alunos por R.A</title>
    </head>
    <body>
        <?php
            include ("conexao_bd.php");
            
            $Ra = $_POST["RA"]; 
            $sql = "SELECT * FROM pessoas WHERE R_A =  $Ra";
            
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
                        </tr>
                    ';
                    while(($resul = mysqli_fetch_assoc($query)) != null){

                        echo "<tr>";
                            echo "<td>" . $resul['R_A'] . "</td>";
                            echo "<td>" . $resul['Nome'] . "</td>";
                            echo "<td>" . $resul['Idade'] . "</td>";
                            echo "<td>" . $resul['Endereco'] . "</td>";
                        echo "</tr>";
                    }            
                }else{
                echo "Não possui Aluno com esse R.A<br>";
                }
            }else{
                echo "Problema de sintaxe Bd";
                echo mysqli_error($conexao_bd);
            }
            mysqli_close($conexao_bd);
            echo "<a href='menu.php'>Voltar</a>";
        ?>
    </body>
</html>