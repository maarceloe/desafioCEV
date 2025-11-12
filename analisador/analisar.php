<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
        <h1>Analisador de numero real</h1>
        <?php
        $numero = $_POST['number'] ?? 0;

        echo "<p>Analisando o número <strong> " . number_format($numero, 3, ",", ".") . " </strong> informado pelo usuário:</p>";

        $int = (int) $numero;
        $fra = $numero - $int;

        echo "<p>
            <ul>
                <li>A parte inteira é: <strong>" . number_format($int,0, ",", ".") . " </strong></li>
                <li>A parte fracionaria é: <strong>" . number_format($fra,3,",",".") . " </strong></li>
            </ul>
           </p>"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>