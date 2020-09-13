<!Doctype hmtl>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Consulta dados dos alunos po R.A</title>
    </head>
    <body>
        <?php   

            echo'
                <form action="inseri_aluno_ra.php" method="POST">
                    <fieldset>
                        <legend>Dados do Aluno:</legend>
                            <label>R.A:</label>
                            <input type="number" name="RA"/>

                            <input type="submit" name="submit" value="Procurar"/>
                    </fieldset>
                </form>
            ';
        ?>
    </body>
</html>