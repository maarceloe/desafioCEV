<?php 

    $numero             = str_replace(',', '.',$_POST['number']);
    $fracionaria        = $numero % $numero;

    echo "<p>Analisando o numero <strong>" . number_format($numero, 2 , ',', '.') . "</strong> informado pelo usuário:</p>";
    echo "<p>
            <ul>
                <li>A parte inteira é: " .$inteira." </li>
                <li>A parte fracionaria é: " .$fracionaria. "</li>
            </ul>
           </p>"
?>