<?php

$exibirResposta = false;
$resposta = '';

if (isset($_POST['numero']) && is_numeric($_POST['numero'])) {

    $numero = $_POST['numero'];

    if (eFibonaci($numero)) {
        $resposta = "{$numero} pertence à sequência de Fibonacci.";
    } else {
        $resposta = "{$numero} não pertence à sequência de Fibonacci.";
    }

    $exibirResposta = true;
}

// Verifica se é um quadrado perfeito
function eQuadradoPerfeito($x)
{
    $s = sqrt($x);
    return ($s * $s == $x);
}

// Verifica se pertenca a sequencia Fibonaci
function eFibonaci($n)
{
    // Um numero é Fibonaci se uma das condições for verdadeira
    return eQuadradoPerfeito(5 * $n * $n + 4) || eQuadradoPerfeito(5 * $n * $n - 4);
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

    <h1>Desafio 1</h1>
    <a href="/vaga/Desafio_TargetSistemas">Voltar</a>
    <hr>
    <p>Dado a sequência de Fibonacci, onde se inicia por 0 e 1 e o próximo valor sempre será a soma dos 2 valores anteriores (exemplo: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34...), escreva um programa na linguagem que desejar onde, informado um número, ele calcule a sequência de Fibonacci e retorne uma mensagem avisando se o número informado pertence ou não a sequência.</p>

    <hr>

    <form action="desafio1.php" method="post">
        <div>Informe um número</div>
        <input type="number" name="numero">
        <button type="submit">Verificar</button>
    </form>

    <?php if ($exibirResposta): ?>
        <h3>Resposta</h3>
        <hr>
        <p><?= $resposta ?></p>

    <?php endif; ?>
</body>

</html>