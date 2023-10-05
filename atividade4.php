php
<?php

$nota1 = floatval($_GET['nota1']);
$nota2 = floatval($_GET['nota2']);
$nota3 = floatval($_GET['nota3']);
$nota4 = floatval($_GET['nota4']);

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if ($media >= 5) {
    $mensagem = "Aprovado";
} else {
    $mensagem = "Reprovado";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <p>Média: <?php echo $media; ?></p>
    <p>Situação: <?php echo $mensagem; ?></p>
</body>
</html>