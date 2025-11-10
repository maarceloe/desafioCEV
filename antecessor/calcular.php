<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
            $numero = $_POST['numero'];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;

            echo "O seu numero é $numero. O antecessor é $antecessor e o sucessor é $sucessor";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>

</html>