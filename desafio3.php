<?php

$index = 12;
$soma = 0;
$k = 1;

while ($k < $index) {
    $k = $k + 1;
    $soma = $soma + $k;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Desafio 3</h1>
    <a href="/vaga/Desafio_TargetSistemas">Voltar</a>
    <hr>
    <p>Observe o trecho de código abaixo: <br><br> <code>int INDICE = 12, SOMA = 0, K = 1; <br> enquanto K < INDICE faça { K=K + 1; SOMA=SOMA + K; } <br> imprimir(SOMA);</code><br><br>Ao final do processamento, qual será o valor da variável SOMA?</p>

    <hr>

    <h4>Resposta:</h4>

    <p>A variável SOMA terá armazenada o valor <?= $soma ?>.</p>

</body>

</html>