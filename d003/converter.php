<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
        <h1>Conversor de moedas</h1>
        <?php

        $real = $_POST['money'] ?? 0;
        $cotacao = 5.31;
        $dolar = $real / $cotacao;

        /*
            echo '<p>Seus R$' . number_format($real, 2, ',', '.') . ' equivalem a US$' . number_format($dolar, 2, ',', '.') . '</p>';
            echo '<p>*cotação fixa de ' . $cotacao . ' definida no diretamente no codigo</p>';
            echo "<button>Voltar</button>";
            */

        // Formatação de moedas com internacionalização!
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</stong></p>";

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>