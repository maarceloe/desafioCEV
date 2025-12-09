<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 006</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <?php 
        //pegando os dados enviados no formulario retroalimentado pelo metodo get

        ?>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?php  $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="iddividendo">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="iddivisor">
            <input type="submit" value="Analisar">
        </form>

    </main>
    <section>
        <h1>Estrutura da Divisão</h1>
        <?php 
            $divisao = $dividendo/$divisor;
            $divinteiro = (int) $divisao;
            $resto = $dividendo%$divisor;
            
            echo("o dividendo é <strong>" . $dividendo. "</strong>, o divisor é <strong>" .$divisor. "</strong> e o resultado é <strong>" .$divinteiro. "</strong> com o resto <strong>" .$resto. "</strong>");

        ?>
    </section>
</body>
</html>