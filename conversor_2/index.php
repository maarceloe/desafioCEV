<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas</h1>
        <form action="converter.php" method="post">
            <label for="number">Quantos R$ você tem na carteira?</label>
            <input type="number" name="money" id="idmoney">
            <input type="submit" value="Converter" step="0.01">
        </form>
    </main>
</body>
</html>