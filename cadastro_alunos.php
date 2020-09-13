<!Doctype hmtl>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Cadastro de alunos</title>
    </head>
    <body>
        <?php
            echo'
                <form action="insere_dados_alunos.php" method="POST">
                    <fieldset>
                        <legend>Dados dos Alunos:</legend>
                            <label>Nome:</label>
                            <input type="text" name="nome"/><br>

                            <label>Idade:</label>
                            <input type="number" name="idade"/><br>

                            <label>Endereço:</label>
                            <input type="text" name="endereco"/><br>

                        <input type="submit" name = "submit" value="Cadastrar"/>
                    </fieldset>
                </form>
            ';
        ?>
    </body>
</html>