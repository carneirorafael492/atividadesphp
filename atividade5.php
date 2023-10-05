<?php
  
    function calcularIMC($peso, $altura) {
        $alturaMetros = $altura / 100;
        $imc = $peso / ($alturaMetros * $alturaMetros);
        return $imc;
    }

    if (isset($_GET["idade"]) && isset($_GET["peso"]) && isset($_GET["altura"])) {
        $idade = $_GET["idade"];
        $peso = $_GET["peso"];
        $altura = $_GET["altura"];

        if (is_numeric($idade) && is_numeric($peso) && is_numeric($altura) && $altura > 0 && $peso > 0 && $idade >= 20 && $idade <= 60) {
            $imc = calcularIMC($peso, $altura);

            if ($imc < 18.5) {
                $classificacao = "Baixo peso";
            } elseif ($imc >= 18.5 && $imc < 24.9) {
                $classificacao = "Peso normal";
            } elseif ($imc >= 25 && $imc < 29.9) {
                $classificacao = "Sobrepeso";
            } elseif ($imc >= 30) {
                $classificacao = "Obesidade";
            }

            echo "<h1>Resultado do IMC</h1>";
            echo "<p>Seu IMC é: " . number_format($imc, 2) . "</p>";
            echo "<p>Classificação: " . $classificacao . "</p>";
        } else {
            echo "<h1>Erro</h1>";
            echo "<p>Preencha os campos com valores válidos para idade, peso e altura.</p>";
        }
    }
    ?>