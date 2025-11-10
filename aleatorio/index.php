<?php

$random = mt_rand(0, 100);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aleatórios</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
        <h1>Trabalhando com numeros aleatórios</h1>
        <p>O valor gerado foi <?php echo "<p>Gerando um número aleatório entre 0 e 100 ...<br>O valor gerado foi <strong>$random</strong></p>"; ?></p>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
</body>
</html>