<!DOCTYPE html>
<html>
<head>
    <title>Resultado do Cálculo</title>
</head>
<body>
    <h1>Resultado do Cálculo</h1>
    <?php
    // Captura a altura e o sexo enviados via GET
    if (isset($_GET['altura']) && isset($_GET['sexo'])) {
        $altura = floatval($_GET['altura']);
        $sexo = $_GET['sexo'];

        // Calcula o peso ideal com base no sexo
        if ($sexo === 'M') {
            $pesoIdeal = (72.7 * $altura) - 58;
        } elseif ($sexo === 'F') {
            $pesoIdeal = (62.1 * $altura) - 44.7;
        } else {
            echo "Sexo inválido.";
            exit;
        }

        echo "O seu peso ideal é: " . number_format($pesoIdeal, 2) . " kg.";
    } else {
        echo "Por favor, forneça a altura e o sexo.";
    }
    ?>
    <br><br>
    <a href="indexAtividade3.html">Voltar</a>
</body>
</html>
