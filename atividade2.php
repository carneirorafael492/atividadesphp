<?php

    // Lendo o valor da conta de luz

    $valorContaLuz = $_GET['valor_conta'];

 

    // Verificando se o valor é maior que R$ 50,00

    if ($valorContaLuz > 50.00) {

        echo "Você está gastando muito";

    } else {

        echo "Seu gasto foi normal";

    }

    ?>