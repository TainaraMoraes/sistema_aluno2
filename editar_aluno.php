<!Doctype hmtl>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Editar os alunos</title>
    </head>
    <body>
        <?php
           include('conexao_bd.php');

           $ra = $_GET["ra"];

           $sql = "SELECT * FROM pessoas WHERE R_A=$ra";
            
           $query = mysqli_query($conexao_bd, $sql);
           $resul = mysqli_fetch_assoc($query);

           echo '
                <form action="inseri_dados_editar.php" method="GET">
                    <fieldset>
                        <legend>Dados do Aluno:</legend>
                            <label>Nome:</label>
                            <input type="text" name="nome_editado" value="?php echo $resul["nome"]; ?>" />

                            <label>Idade:</label>
                            <input type="number" name="idade_editado" value="?php echo $resul["idade"]; ?>"/>

                            <label>Endereço:</label>
                            <input type="text" name="endereco_editado" value="?php echo $resul["endereco"]; ?>"/>

                            <input type="hidden" R_A="ra" Nome="ra" value="?php echo $ra?>" /> 
                            <input type="submit" name="submit" value="Alterar"/>
                    </fieldset>
                </form>
           ';


          include("fecha_conexao_bd.php");
          mysqli_close($conexao_bd);

            
        ?>
       
    </body>
</html>