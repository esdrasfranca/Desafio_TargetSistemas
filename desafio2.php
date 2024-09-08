<?php

// Define se a resposta será exibida na página
$exibeResposta = false;

// Recupera a frase, caso exista
$frase = $_POST['frase'] ?? null;

// Verifica se existe uma frase
if (!empty($frase)) {

    // Retira possíveis acentos da frase
    $fraseSemAcentos = preg_replace('/[^A-Za-z0-9 ]/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $frase));

    // Converte frase para minúsculas
    $fraseLowerCase = mb_convert_case($fraseSemAcentos, MB_CASE_LOWER, 'UTF-8');

    // Retira espaços da frase
    $arrFrase = str_split(str_replace(' ', '', $fraseLowerCase));

    // Conta as letras "a"
    $total = array_reduce($arrFrase, function ($accumulator, $item) {
        if ($item == 'a') {
            $accumulator++;
        }

        return $accumulator;
    });

    // Define exibeResposta como true
    $exibeResposta = true;
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

    <h1>Desafio 2</h1>
    <a href="/vaga/Desafio_TargetSistemas">Voltar</a>
    <hr>
    <p>Escreva um programa que verifique, em uma string, a existência da letra ‘a’, seja maiúscula ou minúscula, além de informar a quantidade de vezes em que ela ocorre.</p>

    <form action="desafio2.php" method="post">

        <p style="margin-bottom: 0px; font-weight: bold;">Digite uma Frase</p>
        <input type="text" name="frase" style="width: 50%;" value="<?= $frase ?>">
        <button type="submit">Verificar Frase</button>

    </form>

    <?php if ($exibeResposta): ?>

        <hr>

        <h4>Resposta:</h4>

        <p>Na frase informada existem <?= $total ?> letra(s) "a"!</p>

    <?php endif; ?>

</body>

</html>